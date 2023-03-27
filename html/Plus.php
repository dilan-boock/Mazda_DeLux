<?php $stat_autoriz=0?>
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
        </section>
        <section class="bottom-header">
            <ul class="menu">
                <li class="menu-item"><a href="index.php">Каталог</a></li>
                <li class="menu-item"><a href="/html/Profile.php">Мои заявки</a></li>
            </ul>
        </section>
    </header>
    <main>
      <a class="button_undo" href="../index.php">НАЗАД</a>
        <?php 
          $model = $_POST['model'];
          $color_model = $_POST['color_model'];
          $color = explode(", ", $color_model);
        ?>
        <form class="form-plus" action="../php/zayav.php" method="post">
            <input type="text" name="model" readonly value="<?php echo $model?>">
            <select name="select_color">
              <option selected value="<?php echo $color[0]?>"><?php echo $color[0]?></option>
              <option value="<?php echo $color[1]?>"><?php echo $color[1]?></option>
              <option value="<?php echo $color[2]?>"><?php echo $color[2]?></option>
            </select>
            <select name="select_complect">
              <option selected value="Медная комплектация">Медная комплектация</option>
              <option value="Серебрянная комплектация">Серебрянная комплектация</option>
              <option value="Золотая комплектация">Золотая комплектация</option>
            </select>
            <button class="but-form-plus">Отправить заявку</button>
        </form>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>