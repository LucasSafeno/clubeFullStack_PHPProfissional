<?php $this->layout('master', ['title' => $title]) ?>

<h2>Users</h2>

<ul id="users-home">
  <?php foreach ($users as $user): ?>
    <li>
      <?= $user->firstName ?> | <a href="/user/<?= $user->id ?>">Ver Detalhes</a>
    </li>
  <?php endforeach; ?>
</ul>

<?php $this->start('scripts') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.9.0/axios.min.js" integrity="sha512-FPlUpimug7gt7Hn7swE8N2pHw/+oQMq/+R/hH/2hZ43VOQ+Kjh25rQzuLyPz7aUWKlRpI7wXbY6+U3oFPGjPOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  axios.defaults.headers = {
    "Content-Type": "application/json",
    HTTP_X_REQUESTED_WITH: "XMLHttpRequest",
  }
  async function loadUsers() {
    try {
      const {
        data
      } = await axios.get("/users");

      console.log(data);
    } catch (error) {
      console.log(error)
    }
  }
  loadUsers();
</script>

<?php $this->stop() ?>
