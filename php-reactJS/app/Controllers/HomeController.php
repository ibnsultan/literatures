<?php

namespace App\Controllers;

use App\Mvc;

class HomeController extends Mvc
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'description' => 'Welcome to the home page!',
            'todos' => [
                'Go to the store',
                'Finish the tutorial',
                'Clean the house'
            ]
        ];

        $this->render('home', $data);
    }
}