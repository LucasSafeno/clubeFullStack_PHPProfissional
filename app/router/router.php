<?php
function routes(): array
{
  return require "routes.php";
} // routes


function exactMathUriInArrayRoutes($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    return [];
  }

  return [];
} // excatMathUri



function router()
{
  // get uri
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  // verifica se a URI está dentro de algum dos indices do retorno da função routes
  $routes = routes();

  $matchedUri = exactMathUriInArrayRoutes($uri, $routes);
}// router
