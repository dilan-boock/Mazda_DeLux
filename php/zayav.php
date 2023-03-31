<?php
    include('connect.php');
    session_start();
    $model = $_POST['model'];
    $color = $_POST['select_color'];
    $complect = $_POST['select_complect'];
    $fio = $_SESSION['fio'];
    $number = $_SESSION['number'];
    $email = $_SESSION['email'];

    /*echo $model.'<br>';
    echo $color.'<br>';
    echo $complect.'<br>';
    echo $fio.'<br>';
    echo $number.'<br>';
    echo $email.'<br>';*/

    $sql ="INSERT INTO application(model,color,complect,fio,number,email)  VALUES('$model', '$color', '$complect', '$fio', '$number', '$email')"; //Добавление данных в уже существующую таблицу бд
    // INSERT INTO users(email,number,fio,data,password) VALUES('dik@gmail.com','+8792387295','dligheg','2023-03-06','erqegeqg')
    $result = mysqli_query($link, $sql);
    
    if ($result == false) {
        $_SESSION['stat_zayav'] = "1"; 
        header("Location: ../index.php");
    }
    else{
        header("Location: ../html/Profile.php");
    }
?>