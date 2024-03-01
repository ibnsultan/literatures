<?php

namespace App\Controllers;

use App\Mvc;

class HomeController extends Mvc
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'description' => 'Welcome to the home page!'
        ];

        $this->render('home', $data);
    }
}