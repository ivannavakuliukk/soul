<?php require 'pages/header.php'; ?>
<?php

if (isset($_GET['page']))
  switch($_GET['page'])
  {
    case "catalog":
      require 'pages/catalog.php';
      break;
    case "card":
      require 'pages/product_card.php';
      break;
    case "login":
      require 'pages/login.php';
      break;
    case "registration":
      // if(isset($_SESSION['user'])){
      //   require 'pages/profile.php';
      // }
      require 'pages/registration.php';
      break;
    case "profile":
      require 'pages/profile.php';
      break;
  }
else require 'pages/main_page.php'
?>
<?php require 'pages/footer.php'; ?>