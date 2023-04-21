<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use SRC\Entity\User;

class UserController extends AbstractController
{
    public function index(): JsonResponse
    {
        $user = new User();
        $user->setName('John');
        $user->setLastname('Doe');
        $user->setEmail('matu@emgil.com');
        $user->setPassword('123456');
        $user->setStatus(1);
        
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
}
