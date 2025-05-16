<?php
function user()
{
  if (isset($_SESSION[LOGGED])) {
    return $_SESSION[LOGGED];
  }
} // user

function logged()
{
  return isset($_SESSION[LOGGED]);
}
