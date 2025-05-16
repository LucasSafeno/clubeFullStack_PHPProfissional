<h2>Create</h2>

<form action="/user/store" method="post">
  <input type="text" name="firstName" id="firstName" placeholder="First Name">
  <?= getFlash('firstName') ?>
  <br>
  <input type="text" name="lastName" id="lastName" placeholder="Last Name">
  <?= getFlash('lastName') ?>
  <br>
  <input type="email" name="email" id="email" placeholder="Email">
  <?= getFlash('email') ?>
  <br>
  <input type="password" name="password" id="password" placeholder="Password">
  <?= getFlash('password') ?>
  <br>

  <button type="submit">Create</button>
</form>
