<?php
    include('connect.php');
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = 'SELECT*FROM `users`'; //Чтение логинов, паролей из таблицы бд
    $result = mysqli_query($link, $sql); //Запись результата

    while ($row = mysqli_fetch_array($result)) //Преобразование результата в понятный коду тип данных
    {
        if ($login == $row['email'] && $password == $row['password'])
        {
            $_SESSION['sess_name'] = "autoriz_session";
            $_SESSION['email'] = $row['email'];
            $_SESSION['number'] = $row['number'];
            $_SESSION['fio'] = $row['fio'];
            $_SESSION['data'] = $row['data'];
            $_SESSION['root'] = $row['root'];

            header("Location: ../html/Profile.php"); 
        }
        else 
        {
            //header("Location: autoriz.php");
        }
    }
    

?>