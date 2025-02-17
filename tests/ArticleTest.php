<?php declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ArticleApiTest extends WebTestCase
{
    public function testUserCanCreateArticle()
    {
        $client = static::createClient();

        // Simulation d'un utilisateur authentifié (si nécessaire)
        $userRepository = static::$container->get('doctrine')->getRepository(User::class);
        $testUser = $userRepository->findOneByEmail('user@example.com');
        $client->loginUser($testUser);

        // Envoi de la requête POST pour créer un article
        $client->request('POST', '/api/articles', [], [], [
            'CONTENT_TYPE' => 'application/json',
        ], json_encode([
            'title' => 'Mon premier article',
            'content' => 'Voici le contenu de mon premier article.',
        ]));

        // Vérifie que la réponse est un succès (201 Created)
        $this->assertResponseStatusCodeSame(201);

        // Vérifie que le JSON retourné contient bien les données attendues
        $responseContent = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('id', $responseContent);
        $this->assertEquals('Mon premier article', $responseContent['title']);
    }
}
