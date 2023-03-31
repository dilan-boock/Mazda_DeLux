<?php 
    session_start();
    if(isset($_SESSION['sess_name'])){ // Если есть данные в 'blablabla', то...
        $stat_autoriz=0; // Выполняем что-либо
        $a_href = 'html/Profile.php';
        if($_SESSION['root']==0){
            $root_autor=0; // 0 в рут это админ, 0 стат - это авторизованный
        }
        else{
            $root_autor=1;
            if(isset($_SESSION['stat_zayav'])){ // Если есть данные в 'blablabla', то...
                echo "<script>alert('Упс! Что-то пошло не так')</script>";
            }
        }
    }
    else{ // Если данных в сессии нет, то...
        $stat_autoriz=1;
        $root_autor=1;
        $a_href = 'html/Autoriz.php';
    }
?>
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
                    echo'<a class="but_login" href="php/exit.php">ВЫХОД</a>';
                }
            ?>
        </section>
        <section class="bottom-header">
            <ul class="menu">
                <li class="menu-item"><a href="index.html">Каталог</?a></li>
                <li class="menu-item"><?php echo '<a href="'.$a_href.'">Мои заявки</a>'?></li>
            </ul>
        </section>
    </header>
    <main>
        <?php 
            if($root_autor==0)
            {
                echo'<a class="but_catalog_admin" href="html/Care-Plus.php">ДОБАВИТЬ ТОВАР</a>';
            }
            else {
                echo '<h1>КАТАЛОГ</h1>';
            }
        ?>
        <section class="cards">
            <img src="/source/image/" alt="Фото машины">
            <p class="visualy-hidden">12345</p>
            <h3 class="model">Модель машины</h3>
            <p class="price">oт <span class="red">3 000 000</span></p>
            <a class="next" href="html/Care.php">Читать далее</a>
        </section>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>

