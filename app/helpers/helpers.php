<?php
function isArrayAssociative(array $arr)
{
  return array_keys($arr) !== range(0, count($arr) - 1);
} //? arrayIsAssociative()

function isAjax()
{
  return isset($_SERVER['HTTP_HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}//? isAjax()
