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
    <form action="vendor/singup.php" method = "POST">
      <label>ПІП</label>
      <input type = "text" name = "full_name" placeholder= "Введіть своє повне ім'я">
      <label>Логін</label>
      <input type = "text" name = "login" placeholder= "Вигадайте логін">
      <label>Пошта</label>
      <input type = "email" name = "email" placeholder= "ВВедіть адресу своєї пошти">
      <label>Пароль</label>
      <input type = "password" name = "password" placeholder= "Вигадайте пароль">
      <label>Підтвердження паролю</label>
      <input type = "password" name = "password_confirm" placeholder= "Підтвердіть пароль">
      <button type = "submit">Увійти</button>
      <p>У вас вже є акаунт?   —   <a href = "?page=login">Авторизуйтесь</a></p>
      
      <?php
        if(isset($_SESSION['message'])){
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
      ?>
    </form>
  </div>
</body>