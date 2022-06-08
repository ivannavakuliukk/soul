<?php
  session_start();
  require_once 'connect.php';

  $full_name = $_POST['full_name'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  if ($password === $password_confirm){
    //continue

    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES ('', '$full_name', '$login', '$email', '$password')");

    $_SESSION['message'] = 'Реєстрація пройшла успішно!';
    header('Location: ../index.php?page=login');
  }
  else{
    $_SESSION['message'] = 'Паролі не співпадають';
    header('Location: ../index.php?page=registration');
  }

?>