<!-- Підключення до бд -->
<?php

$connect = mysqli_connect('localhost:3307', 'root', '', 'test');
if(!$connect){
  die('Error connect DataBase');
}


?>