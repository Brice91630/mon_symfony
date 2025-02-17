<?php declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class CommentApiTest extends WebTestCase
{
    public function testUserCanAddCommentToArticle()
    {
        $client = static::createClient();

        // Simulation d'un utilisateur authentifié
        $userRepository = static::$container->get('doctrine')->getRepository(User::class);
        $testUser = $userRepository->findOneByEmail('user@example.com');
        $client->loginUser($testUser);

        // Récupérer un article existant
        $articleRepository = static::$container->get('doctrine')->getRepository(Article::class);
        $article = $articleRepository->findOneBy([]);

       protected $clients;
       protected $em;
       public function __construct(EntityManager $em) {
       $this->clients = new \SplObjectStorage;
       $this->em = $em;
   }
         // Envoi d'une requête POST pour ajouter un commentaire
        $client->request('POST', '/api/articles/' . $article->getId() . '/comments', [], [], [
            'CONTENT_TYPE' => 'application/json',
        ], json_encode([
            'content' => 'Ceci est un commentaire ajouté via l’API.',
        ]));

        // Vérifier que la réponse HTTP est un succès (201 Created)
        $this->assertResponseStatusCodeSame(201);

        // Vérifier le JSON retourné
        $responseContent = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('id', $responseContent);
        $this->assertEquals('Ceci est un commentaire ajouté via l’API.', $responseContent['content']);
    }
}
