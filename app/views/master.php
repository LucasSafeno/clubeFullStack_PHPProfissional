<!doctype html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
  <h2><?= $title ?></h2>

  <div class="container">
    <?php
    require $view;
    ?>
  </div>

</body>

</html>
