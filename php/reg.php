<?php
include('connect.php');
session_start();

    $email = $_POST['email'];
    $number = $_POST['number'];
    $fio = $_POST['fio'];
    $data = $_POST['data'];
    $password = $_POST['password'];
    $date = date('Y-m-d', strtotime(str_replace('-', '/', $data)));

    $sql ="INSERT INTO users VALUES('$email', '$number', '$fio', '$date', '$password', '1')"; //Добавление данных в уже существующую таблицу бд
    // INSERT INTO users(email,number,fio,data,password) VALUES('dik@gmail.com','+8792387295','dligheg','2023-03-06','erqegeqg')
    $result = mysqli_query($link, $sql);
    
    if ($result == false) {
        /*echo $email;
        echo $number;
        echo $fio;
        echo $data;
        echo $password;
        echo $date;*/
        $_SESSION['stat_autoriz'] = "1"; 
        header("Location: ../html/Reg.php");
    }
    else{
        $_SESSION['sess_name'] = "autoriz_session";
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $number;
        $_SESSION['fio'] = $fio;
        $_SESSION['data'] = $data;
        $_SESSION['root'] = '1';
        header("Location: ../index.php");
    }
?>