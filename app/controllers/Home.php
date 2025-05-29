<?php

namespace App\controllers;

class Home
{
  public function index($params)
  {

    dd(delete('users', ['id' => 34]));
    $users = all('users');

    return [
      'view' => 'home',
      'data' => ['title' => 'Home', 'users' => $users],
    ];
  }
}
