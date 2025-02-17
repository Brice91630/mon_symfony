<?php declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class LoginTest extends WebTestCase
{
    public function testUserCanLogin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'user@example.com',
            '_password' => 'password123',
        ]);

        $client->submit($form);

        // Vérifie que la réponse est une redirection après la connexion réussie
        $this->assertResponseRedirects('/dashboard');

        // Suivre la redirection
        $client->followRedirect();

        // Vérifie que la page affichée contient un élément avec un message de bienvenue
        $this->assertSelectorTextContains('.welcome-message', 'Bienvenue, User');

        // Vérifie que l'utilisateur est bien authentifié
        $user = static::$container->get('security.token_storage')->getToken()->getUser();
        $this->assertNotNull($user);
        $this->assertEquals('user@example.com', $user->getUserIdentifier());
    }
}
