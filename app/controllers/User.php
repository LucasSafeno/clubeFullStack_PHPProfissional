<?php

namespace App\controllers;

class User
{
  public function show($params)
  {
    var_dump('Show');
    die();
  }

  public function create($params)
  {
    var_dump($params);
    die();
  }
}
