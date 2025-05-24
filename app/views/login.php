<?php $this->layout('master', ['title' => $title]) ?>
<?php if (!logged()): ?>
  <?= getFlash('message'); ?>
  <h2>Login</h2>

  <form action="/login" method="post" id="box-login">
    <input type="text" name="email" id="email" placeholder="Seu email">

    <input type="password" name="password" id="password" placeholder="Sua senha">
    <button type="submit">Login</button>
  </form>
<?php else: ?>
  <h2>Já está logado</h2>
<?php endif; ?>
