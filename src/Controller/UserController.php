<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use SRC\Entity\User;

class UserController extends AbstractController
{
    public function index(){
        return $this->render('user/user.html.twig');
    }
}
