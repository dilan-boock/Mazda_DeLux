<?php 
  session_start();
  session_start();
    if(isset($_SESSION['sess_name'])){ // Если есть данные в 'blablabla', то...
        $stat_autoriz=0; // Выполняем что-либо
        $a_href = 'html/Profile.php';
    }
    else{ // Если данных в сессии нет, то...
        $stat_autoriz=1;
        $a_href = 'html/Autoriz.php';
    }
    echo $stat_autoriz;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Care</title>
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
            echo'<a class="but_login" href="Autoriz.php">ВОЙТИ</a>';
          }
          else{
            echo'<a class="but_login" href="../php/exit.php">ВЫХОД</a>';
          }
        ?>
      </section>
      <section class="bottom-header">
        <ul class="menu">
          <li class="menu-item"><a href="../index.html">Каталог</a></li>
          <li class="menu-item"><?php echo '<a href="'.$a_href.'">Мои заявки</a>'?></li>
        </ul>
      </section>
    </header>
    <main>
      <a class="undo" href="../index.php">Назад</a>
        <form action="Plus.php" class="model" method="post">
            <img class="intro" src="../css/" alt="Фото машины слайдшоу по цветам">
            <input class="model-h1" name="model" readonly value="Модель машины">
            <section class="info">
                <h2 class="info_text">Описание</h2>
                <p class="info_text_2">Собственно само описание</p>
            </section>
            <section class="table">
                <h2 class="info_text">Технические характеристики</h2>
                <dl class="table-list">
                    <dt class="table-items">Объем бака</dt>
                    <dd class="table-utems">10 000л</dd>
                    <dt class="table-items">Максимальная скорость</dt>
                    <dd class="table-utems">120км/ч</dd>
                    <dt class="table-items">Цвет</dt>
                    <dd class="table-utems"><input class="color_model" name="color_model" readonly value="Серый, Красный, Черный"></dd>
                </dl>
            </section>
            <section class="option">
                <section class="option1">
                    <h3>Медная комплектация</h3>
                    <p>В базовую комплектацию входит: </p>
                    <ul class="option-list">
                        <li class="option-item">Машина</li>
                        <li class="option-item">Наклейка на капот</li>
                    </ul>
                </section>
                <section class="option2">
                    <h3>Серебрянная комплектация</h3>
                    <p>В серебрянную комплектацию входит: </p>
                    <ul class="option-list">
                        <li class="option-item">Машина</li>
                        <li class="option-item">Наклейка на капот</li>
                        <li class="option-item">Коврики</li>
                        <li class="option-item">Подсветка</li>
                    </ul>
                    <p>+ 50 000p</p>
                </section>
                <section class="option3">
                    <h3>Золотая комплектация</h3>
                    <p>В золотую комплектацию входит: </p>
                    <ul class="option-list">
                        <li class="option-item">Машина</li>
                        <li class="option-item">Наклейка на капот</li>
                        <li class="option-item">Коврики</li>
                        <li class="option-item">Подсветка</li>
                        <li class="option-item">ИИ дисплей</li>
                        <li class="option-item">Двойные стекла (внутренние с тонировкой, управляются отдельной нопкой)</li>
                    </ul>
                    <p>+ 500 000p</p>
                </section>
            </section>
            <?php
              if($stat_autoriz==1){
                echo'<a class="open" href="Autoriz.php">Оставить заявку</a>';
              }
              else{
                echo'<button class="open">Оставить заявку</button>';
              }
            ?>
        </form>
    </main>
    <footer>
      <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>