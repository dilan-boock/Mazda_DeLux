<?php $stat_autoriz=1?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog</title>
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <header>
        <section class="margin-header">
            <img class="logo" src="/source/image/" alt="Logotype">
            <h1 class="tittle_header">Mazda De`Lux</h1>
            <?php
                if($stat_autoriz == 1)
                {
                    echo'<a class="but_login" href="html/Autoriz.php">ВОЙТИ</a>';
                }
                else{
                    echo'<a class="but_login" href="php/nolog.php">ВЫХОД</a>';
                }
            ?>
        </section>
        <section class="bottom-header">
            <ul class="menu">
                <li class="menu-item"><a href="index.php">Каталог</a></li>
                <li class="menu-item"><a href="/html/Profile.php">Мои заявки</a></li>
            </ul>
        </section>
    </header>
    <main>
        <?php 
            if($stat_autoriz==0)
            {
                echo'<a class="but_catalog_admin" href="html/Care-Plus.php">ДОБАВИТЬ ТОВАР</a>';
            }
        ?>
        <section class="cards">
            <img src="/source/image/" alt="Фото машины">
            <p class="visualy-hidden">12345</p>
            <h3 class="model">Модель машины</h3>
            <p class="price">oт <span class="red">3 000 000</span></p>
            <a class="next" href="/html/Care.php">Читать далее</a>
        </section>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>

