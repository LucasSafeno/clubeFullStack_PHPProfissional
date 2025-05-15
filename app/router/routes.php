<?php
return [
  'POST' => [
    '/login' => 'Login@store',
  ],
  'GET' => [
    '/' => 'Home@index',
    '/user/create' => 'User@create',
    '/user/[a-z0-9]+' => 'User@show',
    '/user/[a-z0-9]+/name/[a-z]+' => 'User@create',
    '/login' => 'Login@index',
  ],
];
