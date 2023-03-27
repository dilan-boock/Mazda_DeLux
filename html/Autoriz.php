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
            <a class="button_undo" href="../index.php">НАЗАД</a>
        </section>
    </header>
    <main>
       <section class="forma-autoriz">
            <form action="../php/autoriz.php" method="post">
                <input type="text" name="login" placeholder="Введите ваш логин">
                <input type="password" name="password" placeholder="Введите ваш пароль">
                <button class="but_form">ВХОД</button>
            </form>
            <a class="but_reg" href="../html/Reg.php">Зарегистрироваться</a>
       </section>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>