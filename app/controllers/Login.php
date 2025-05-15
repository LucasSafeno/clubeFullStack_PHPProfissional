<?php

namespace App\Controllers;

class Login
{
  public function index()
  {
    return [
      'view' => 'login.php',
      'data' => ['title' => 'Login'],
    ];
  } //? index()

  public function store()
  {
    var_dump('login');
    die();
  } //? store()
}
