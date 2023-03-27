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
            <a class="but_login" href="php/nolog.php">ВЫХОД</a>
        </section>
        <section class="bottom-header">
            <ul class="menu">
                <li class="menu-item"><a href="index.php">Каталог</a></li>
                <li class="menu-item"><a href="/html/Profile.php">Мои заявки</a></li>
            </ul>
        </section>
    </header>
    <main>
        <section class="care-plus">
            <form action="../php/care-plus.php" enctype="multipart/form-data" method="post">
                <input class="in-care-plus" type="text" name="model" placeholder="Введите модель машины">
                <input class="in-care-plus in-info" type="text" name="info" placeholder="Введите описание модели">
                <p>Объем бака, максимальная скорость, цвета в наличии</p>
                <input class="in-care-plus in-techinfo" type="text" name="techinfo" placeholder="Введите технические характеристики модели">
                <label from="foto">Прикрепите фото модели (по одному на каждый цвет)</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input class="in-care-plus-file" type="file" id="foto" name="foto" accept="image/png, image/gif, image/jpeg">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input class="in-care-plus-file" type="file" id="foto1" name="foto1" accept="image/png, image/gif, image/jpeg">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input class="in-care-plus-file" type="file" id="foto2" name="foto2" accept="image/png, image/gif, image/jpeg">
                <button class="but-care-plus">ДОБАВИТЬ</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>