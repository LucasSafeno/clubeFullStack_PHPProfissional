<?php
function routes(): array
{
  return require "routes.php";
} // routes


function exactMathUriInArrayRoutes($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    return [$uri => $routes[$uri]];
  }

  return [];
} // excatMathUri


function regularExpressionMatchArrayRoutes($uri, $routes)
{
  return  array_filter(
    $routes,
    function ($value) use ($uri) {
      $regex = str_replace('/', '\/', $value);
      return preg_match("/^$regex$/", $uri);
      var_dump($regex);
    },
    ARRAY_FILTER_USE_KEY
  );
} // regularExpressionMatchArrayRoutes

function params($uri, $matchedUri)
{
  if (!empty($matchedUri)) {
    $machtedGetParams = array_keys($matchedUri[0]);
    return array_diff(
      explode('/', ltrim($uri, '/')),
      explode('/', ltrim($machtedGetParams, '/')),
    );
  }
  return [];
} // params


function router()
{
  // get uri
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  // verifica se a URI está dentro de algum dos indices do retorno da função routes
  $routes = routes();

  $arr1 = [
    'user',
    '1',
    'name',
    'Lucas'
  ];

  $arr2 = [
    'user',
    '[0-9]+',
    'name',
    '[a-z]+'
  ];

  var_dump(array_diff($arr1, $arr2));
  die();

  $matchedUri = exactMathUriInArrayRoutes($uri, $routes);

  if (empty($matchedUri)) {
    $matchedUri = regularExpressionMatchArrayRoutes($uri, $routes);
    if (!empty($matchedUri)) {
      $params = params($uri, $matchedUri);
      var_dump($params);
      die();
    }
  }
}// router
