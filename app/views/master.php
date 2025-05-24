<!doctype html>
<html lang="en">

<head>
  <title><?= $this->e($title) ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
  <div id="header">
    <?= $this->insert('partials/header') ?>
  </div>

  <h2><?= $title ?></h2>

  <div class="container">
    <?= $this->section('content') ?>
  </div>

</body>

</html>
