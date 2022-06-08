<?php
session_start();
if(is_null($_SESSION['user'])){
  header('Location: ../soul/index.php?page=login');
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/forms.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<link rel="stylesheet" type="text/css" href="styles/profile.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Авторизація</title>
</head>
<body>
  <!-- Форма авторизації -->
  <section class = "info">
    <div class = "info__container _container">
      <div class = "info__content">
        <h2>Повне ім'я: <?= $_SESSION['user']['full_name'] ?></h2>
        <h2>Емейл: <a class = "email" href = "#"><?= $_SESSION['user']['email'] ?></a></h2>
        <h2>Вийти з акаунту: <a class = "logout" href = "vendor/logout.php">ВИХІД</a></h2>
      </div>
    </div>
  </section>
  <section class = "my_basket">
    <div class = "my_basket__container _container">
      <h2 class = "my_basket__name">Моя  корзина</h2>
    </div>
    <div class = "items">
       <div class = "items__container">
        <div class = "items__content">
          <div class = "items__1 item">
            <div class = "item__container">
              <div class = "item__content">
                <div class = "pic">
                  <a href = "?page=card">
                    <img src="images/Rectangle13.png" alt="">
                  </a>
                </div>
                <div class = "item__footer">
                  <p>Асиметричне боді зі збірками</p>
                  <div class = "iconprice">
                    <p>₴899</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                  </div>
                    </div>
                </div>
              </div>
            </div>
            <div class = "items__2 item">
              <div class = "item__container">
                <div class = "item__content">
                 <div class = "pic">
                    <a href = "?page=card">
                      <img src="images/1.png" alt="">
                    </a>
                  </div>
                  <div class = "item__footer">
                    <p>Бавовняна куртка із гудзиками</p>
                    <div class = "iconprice">
                      <p>₴1699</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "items__3 item">
              <div class = "item__container">
                <div class = "item__content">
                  <div class = "pic">
                    <a href = "?page=card">
                      <img src="images/2.png" alt="">
                    </a>
                  </div>
                  <div class = "item__footer">
                    <p>Сукня із замші зі стразами</p>
                    <div class = "iconprice">
                      <p>₴999</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</body>