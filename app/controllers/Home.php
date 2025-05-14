<?php

namespace App\controllers;

class Home
{
  public function index($params)
  {
    return [
      'view' => 'home.php',
      'data' => ['name' => 'Lucas', 'title' => 'Home'],
    ];
  }
}
