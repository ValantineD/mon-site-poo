<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;
use App\Repository\UserRepository;

class HomeController extends Controller
{

    public function index()
    {
        $userRepository = new UserRepository();
        $user = $userRepository->findAll();

        $this->render('home', [
            'title' => 'Page Home',
            'users' => $user
        ]);
    }

}
