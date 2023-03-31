<?php 
  session_start();
  include('../php/care-plus.php');
  if($_SESSION['root']==1){
      $root_autor=1;
      $fio = $_SESSION['fio'];
      $data = $_SESSION['data'];
    }
    else{
      $root_autor=0;
      $fio = $_SESSION['fio'];
    }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <header>
      <section class="margin-header">
        <img class="logo" src="/source/image/" alt="Logotype">
        <h1 class="tittle_header">Mazda De`Lux</h1>
        <a class="but_login" href="../php/exit.php">ВЫХОД</a>
      </section>
      <section class="bottom-header">
        <ul class="menu">
          <li class="menu-item"><a href="../index.php">Каталог</a></li>
          <li class="menu-item"><a href="Profile.php">Мои заявки</a></li>
        </ul>
      </section>
    </header>
    <main>
        <header class="info-profile">
          <?php
            if($root_autor==1){
              echo'
                <span class="fio">'.$fio.'</span>
                <p class="data">'.date("d.m.Y", strtotime($data)).'</p>';
            }
            else{
              echo'
                <span class="fio">'.$fio.'</span>
                <p class="data">Кабинет менеджера</p>';
            }
          ?>
        </header>
        <section class="list-plus">
          <?php
              if($root_autor==1){
                echo'<h1>Мои заявки</h1>
                  <form action="../php/app_care.php">
                    <button>Загрузить заявки</button>
                  </form>';
                  include('../php/app_care.php'); //Данный рекурсивный блок кода печатается там же где и генерируется
              }
              else{
                echo'<h1>Поданные заявки</h1>
                <div class="cards_plus">
                  <dl class="cards-plus-list">
                    <form action="Closed.php" method="get">
                      <dt class="cards-plus-item">id заявки</dt>
                      <dd class="cards-plus-utem"><input type="text" name="id_model" class="input_id" readonly value="12345"></dd>
                      <dt class="cards-plus-item">Данные заказчика</dt>
                      <dd class="cards-plus-utem">Зенченко Лидия Богдановна, +79309445412</dd>
                      <dt class="cards-plus-item">Данные заказа</dt>
                      <dd class="cards-plus-utem">Mazda6, Золотая комплектация, 5 000 000р</dd>
                      <dt class="cards-plus-item">Цена</dt>
                      <button class="cards-plus-but">Закрыть заявку</button>
                    </form>
                  </dl>
                </div>';
              }
          ?>
        </section>
    </main>
    <footer>
      <p>Работа выполнена Dilan 2023</p>
    </footer>
  </body>
</html>