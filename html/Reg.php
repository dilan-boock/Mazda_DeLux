<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autorization</title>
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
    <a class="button_undo" href="Autoriz.php">НАЗАД</a>
       <section class="forma-reg">
            <form action="../php/reg.php" method="post">
                <input type="email" name="email" placeholder="Введите ваш email">
                <input type="text" name="number" placeholder="Введите ваш номер">
                <input type="text" name="fio" placeholder="Введите ваше ФИО">
                <input type="text" name="data" placeholder="Введите вашу дату рождения">
                <input type="password" name="password" placeholder="Введите ваш пароль">
                <button class="but_form">РЕГИСТРАЦИЯ</button></button>
            </form>
       </section>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>