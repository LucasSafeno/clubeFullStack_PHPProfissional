<?php

namespace App\controllers;

class User
{
  public function show($params)
  {
    if (!isset($params['user'])) {
      return redirect("/");
    }

    $user = findBy('users', 'id', $params['user']);

    var_dump($user);
    die();
  } //?s show

  public function create($params)
  {
    return [
      'view' => 'create.php',
      'data' => ['title' => 'Create User',],
    ];
  } //? create()

  public function store()
  {
    $validate = validate([
      'firstName' => 'required',
      'lastName' => 'required',
      'email' => 'email|unique:users',
      'age' => 'required',
      'password' => 'required|maxlen:10',
    ]);

    if (!$validate) {
      return redirect('/user/create');
    }

    $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

    $created = create('users', $validate);

    if (!$created) {
      setFlash('message', 'Ocorreu um erro ao cadastrar. Tente novamente em alguns segundos');
      return redirect('/user/create');
    }

    return redirect('/');
  } //? store()
}
