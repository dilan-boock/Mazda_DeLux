<?php
    $link = mysqli_connect('localhost', 'root', '', 'mazda');
    if (!$link) {
        die('Ошибка соединения: ' . mysqli_connect_error());
    }
    //echo 'Успешно соединились';
?>