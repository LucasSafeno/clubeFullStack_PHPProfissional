<?php

namespace App\controllers;

class Users
{
  public function index()
  {

    //  echo json_encode($_SERVER);
    $users = all('users', 'id, firstName,lastName');

    echo json_encode($users);

    //dd('teste');
  } //? index
}
