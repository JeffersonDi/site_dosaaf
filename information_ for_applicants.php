<!DOCTYPE html>
<html lang='ru'>
  <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <meta http-equiv="X-UA_Compatible" content='ie=edge'>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/fontello.css">
      <link rel="stylesheet" href="css/style.css">
      <title>Добро пожаловать!</title>
  </head>
  <body>
    <?php 
      require "blocks/header.php"
    ?>
    <div class="container mt-5">
      <h3>Контактная информация</h3>
      <form action="check.php" method="POST">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите Ваше сообщение"></textarea><br>
        <button class="btn btn-success" type="submit" name="send">Отправить</button>
      </form>
    </div>
  <div class="container">
      <?php 
        require "blocks/footer.php"
      ?>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>