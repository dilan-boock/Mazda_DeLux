<?php
    $link = mysqli_connect('localhost', 'root', '');
    if (!$link) {
        die('Ошибка соединения: ' . mysqli_connect_error());
    }
    echo 'Успешно соединились';
?>