<h2>Users</h2>

<ul>
  <?php foreach ($users as $user): ?>
    <li>
      <?= $user['firstName'] ?> | <a href="/user/<?= $user['id'] ?>">Ver Detalhes</a>
    </li>
  <?php endforeach; ?>
</ul>
