<?php

namespace App\Controllers;

class Login
{
  public function index()
  {
    return [
      'view' => 'login',
      'data' => ['title' => 'Login'],
    ];
  } //? index()

  public function store()
  {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (empty($email) || empty($password)) {
      return setMessageAndRedirect('message', 'Usuario ou senha inválidos', '/login');
    }

    $user = findBy('users', 'email', $email);

    if (!$user) {
      return setMessageAndRedirect('message', 'Usuario ou senha inválidos', '/login');
    };

    if (!password_verify($password, $user->password)) {
      return setMessageAndRedirect('message', 'Usuario ou senha inválidos', '/login');
    }

    $_SESSION[LOGGED] = $user;

    return redirect("/");
  } //? store()

  public function destroy()
  {
    unset($_SESSION[LOGGED]);
    return redirect("/");
  } //? destroy()
}
