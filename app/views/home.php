<?php $this->layout('master', ['title' => $title]) ?>

<h2>Users</h2>

<ul id="users-home">
  <div x-data="users()" x-init="loadUsers()">
    <ul>
      <template x-for="user in data">
        <li x-text="user.firstName"></li>
      </template>
    </ul>
  </div>


  <?php foreach ($users as $user): ?>
    <li>
      <?= $user->firstName ?> | <a href="/user/<?= $user->id ?>">Ver Detalhes</a>
    </li>
  <?php endforeach; ?>
</ul>
