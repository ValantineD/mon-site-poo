<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller{

    public function index() {
        $this -> render('home', [
        'title' => 'Page Home',
        'description' => 'Description lalalala',
        'age' => 35
        ]);
    }


    public function contact(): void {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this -> render('contact', [
                'title' => 'Page Contact',
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message']
            ]);
        }
    }
}
