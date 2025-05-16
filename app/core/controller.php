<?php


function controller($machtedUri, $params)
{
  //lists
  [$controller, $method] = explode('@', array_values($machtedUri)[0]);
  $controllerWithNameSpace = CONTROLLER_PATH . $controller;

  if (!class_exists($controllerWithNameSpace)) {
    throw new Exception("Controller $controller not found");
  }

  $controllerInstance = new $controllerWithNameSpace;

  if (!method_exists($controllerInstance, $method)) {
    throw new Exception("Method $method not found in controller $controller");
  }
  $controller =  $controllerInstance->$method($params);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    die();
  }

  return $controller;
} // controller
