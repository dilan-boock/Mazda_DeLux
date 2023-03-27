<?php
    echo $_GET['id_model'];
    global $otvet;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DELETED</title>
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <header>
        <section class="margin-header">
            <img class="logo" src="/source/image/" alt="Logotype">
            <h1 class="tittle_header">Mazda De`Lux</h1>
        </section>
    </header>
    <main>
       <p>Вы точно хотите удалить данную заявку?</p>
        <a class="but_input" href="../php/delet.php">ДА</a>
        <a class="but_input" href="Profile.php">НЕТ</a>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>