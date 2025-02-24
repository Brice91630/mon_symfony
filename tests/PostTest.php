<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Post;
use App\Entity\User;

class PostTest extends TestCase
{
    public function testPostProperties()
    {
        $user = new User();
        $post = new Post();

        $post->setTitle('Mon premier article');
        $post->setContent('Ceci est le contenu de l\'article de test.');
        $post->setAuthor($user);
        $post->setCreatedAt(new \DateTimeImmutable('2024-02-19'));

        // Vérifier les valeurs des propriétés
        $this->assertEquals('Mon premier article', $post->getTitle());
        $this->assertEquals('Ceci est le contenu de l\'article de test.', $post->getContent());
        $this->assertSame($user, $post->getAuthor()); // Vérifie si c'est bien le même objet
        $this->assertInstanceOf(\DateTimeImmutable::class, $post->getCreatedAt()); // Vérifie que la date est correcte
        $this->assertEquals('2024-02-19', $post->getCreatedAt()->format('Y-m-d')); // Vérifie la date exacte
    }
}
