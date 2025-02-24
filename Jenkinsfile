pipeline {
    agent any

    environment {
        GIT_REPO = "https://github.com/Brice91630/mon_symfony.git"
        GIT_BRANCH = "main"
        DEPLOY_DIR = "web014"
    }

    stages {
        stage('Cloner le dépôt') {
            steps {
                script {
                    try {
                        sh "[ -d ${DEPLOY_DIR} ] && rm -rf ${DEPLOY_DIR} || echo 'Rien à supprimer'"
                        sh "git clone -b ${GIT_BRANCH} ${GIT_REPO} ${DEPLOY_DIR}"
                    } catch (Exception e) {
                        error "Échec du clonage : ${e.message}"
                    }
                }
            }
        }

        stage('Installation des dépendances') {
            steps {
                dir("${DEPLOY_DIR}") {
                    sh 'composer install --optimize-autoloader --no-interaction'
                }
            }
        }

        stage('Configuration de l\'environnement') {
            steps {
                withCredentials([usernamePassword(credentialsId: 'mysql-creds', usernameVariable: 'DB_USER', passwordVariable: 'DB_PASS')]) {
                    script {
                        def envLocal = """
                        APP_ENV=prod
                        APP_DEBUG=0
                        DATABASE_URL=mysql://${DB_USER}:${DB_PASS}@127.0.0.1:3306/${DEPLOY_DIR}?serverVersion=8.3.0&charset=utf8mb4
                        """.stripIndent()
                        writeFile file: "${DEPLOY_DIR}/.env.local", text: envLocal
                    }
                }
            }
        }

        stage('Déploiement') {
            steps {
                sh "[ -d /var/www/html/${DEPLOY_DIR} ] && rm -rf /var/www/html/${DEPLOY_DIR} || echo 'Rien à supprimer'"
                sh "rsync -av --delete ${DEPLOY_DIR}/ /var/www/html/${DEPLOY_DIR}/"
                sh "chown -R www-data:www-data /var/www/html/${DEPLOY_DIR}/var"
                sh "chmod -R 775 /var/www/html/${DEPLOY_DIR}/var"
            }
        }
    }

    post {
        success {
            echo 'Déploiement réussi !'
        }
        failure {
            echo 'Erreur lors du déploiement.'
        }
    }
}