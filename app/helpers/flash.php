<?php
function setFlash($index, $message)
{
  if (!isset($_SESSION['flash'][$index])) {
    $_SESSION['flash'][$index] = $message;
  }
} // setFlash

function getFlash($index, $style = "color:red")
{
  if (isset($_SESSION['flash'][$index])) {

    $flash = $_SESSION['flash'][$index];
    unset($_SESSION['flash'][$index]);

    return "<p style='{$style}'>{$flash}</p>";
  }
} // getFlash
