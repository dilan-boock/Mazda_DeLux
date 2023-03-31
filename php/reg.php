<?php
include('connect.php');
session_start();

    $email = $_POST['email'];
    $number = $_POST['number'];
    $fio = $_POST['fio'];
    $data = $_POST['data'];
    $pssword = $_POST['password'];

    $sql ="INSERT INTO user VALUES('$login', '$password', '100')"; //Добавление данных в уже существующую таблицу бд
    $result = mysqli_query($conn, $sql);
    
    if ($result == false) {
        print("Данная учетная запись существует");
        header("Location: ../html/aut.html");
    }
    else{
        session_start();
        $_SESSION['log']=$login;
        header("Location: ../html/iaut.html");
    }
?>