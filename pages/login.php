<?php
session_start();
if(isset($_SESSION['user'])){
  header('Location: ../soul/index.php?page=profile');
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/forms.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<link rel="stylesheet" type="text/css" href="styles/autorization.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Авторизація</title>
</head>
<body>
  <!-- Форма авторизації -->
  <div class = "form_container">
    <form action="vendor/singin.php" method = "POST">
      <label>Логін</label>
      <input type = "text" name = "login" placeholder= "Введіть свій логін">
      <label>Пароль</label>
      <input type = "password" name = "password" placeholder= "Введіть свій пароль">
      <button type = "submit">Увійти</button>
      <p>У вас немає акаунту?   —   <a href = "?page=registration">Зареєструйтесь</a></p>
      <?php
        if(isset($_SESSION['message'])){
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
      ?>
    </form>
  </div>
</body>