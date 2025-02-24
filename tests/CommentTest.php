<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentTest extends WebTestCase
{
    public function testCommentPageIsSuccessful()
    {
        $client = static::createClient();
        $client->request('GET', '/post/1'); // Remplace par l'URL de la page d'un post avec commentaires

        $this->assertResponseIsSuccessful(); // Vérifie que la page charge bien (HTTP 200)
    }

    public function testCommentFormExists()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/post/1'); // Remplace par l'URL correcte

        $this->assertSelectorExists('form'); // Vérifie qu'il y a un formulaire
        $this->assertSelectorExists('textarea[name="commentaire"]'); // Vérifie le champ texte
        $this->assertSelectorExists('button[type="submit"]'); // Vérifie qu'il y a un bouton de soumission
    }

    public function testSubmitComment()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/post/1'); // Remplace par l'URL correcte

        $form = $crawler->selectButton('Envoyer')->form([
            'commentaire' => 'Ceci est un test de commentaire.',
        ]);

        $client->submit($form);
        $client->followRedirect(); // Suivre la redirection après soumission

        $this->assertSelectorTextContains('.comment-list', 'Ceci est un test de commentaire.'); // Vérifie que le commentaire apparaît bien
    }
}
