<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\UserService;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TestConnexion extends TestCase
{
    public function testUserAuthentication()
    {
        // Simuler un utilisateur en base
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setPassword('hashedpassword'); // Simulons un mot de passe haché

        // Mock du repository UserRepository
        $userRepository = $this->createMock(UserRepository::class);
        $userRepository->method('findOneBy')->willReturn($user);

        // Mock du service de hashage de mot de passe
        $passwordHasher = $this->createMock(UserPasswordHasherInterface::class);
        $passwordHasher->method('isPasswordValid')->willReturn(true);

        // Création du service d'authentification
        $userService = new UserService($userRepository, $passwordHasher);

        // Vérification de l'authentification
        $authenticatedUser = $userService->authenticateUser('test@example.com', 'password123');
        $this->assertSame($user, $authenticatedUser);
    }
}
