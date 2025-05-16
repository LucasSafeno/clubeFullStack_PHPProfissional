<h2>Login</h2>

<?= getFlash('message'); ?>

<form action="/login" method="post" id="box-login">
  <input type="text" name="email" id="email" placeholder="Seu email">

  <input type="password" name="password" id="password" placeholder="Sua senha">
  <button type="submit">Login</button>
</form>
