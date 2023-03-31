<?php
    include('connect.php');
    session_start();
    $email = $_SESSION['email'];
    echo $email;
    //$sql = "SELECT*FROM applicatiom WHERE email= '$email'"; //Чтение логинов, паролей из таблицы бд
    $sql = " SELECT * FROM application WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    $_SESSION['result']=$result;
    while ($row = mysqli_fetch_array($result)) //Преобразование результата в понятный коду тип данных
    {
        $rows['id'] = $row['id'];
        $rows['model'] = $row['model'];
        $rows['color'] = $row['color'];
        $rows['complect'] = $row['complect'];
        /*echo $rows['id'] = $row['id'];
        echo $rows['model'].'<br>';
        echo $rows['color'].'<br>';
        echo $rows['complect'].'<br>';*/
        echo'
            <div class="cards_plus">
                <dl class="cards-plus-list">
                    <form action="Delete.php" method="get">
                        <dt class="cards-plus-item">id заявки</dt>
                        <dd class="cards-plus-utem"><input type="text" name="id_model" class="input_id" readonly value="'.$rows['id'].'"></dd>
                        <dt class="cards-plus-item">Модель</dt>
                        <dd class="cards-plus-utem">'.$rows['model'].'</dd>
                        <dt class="cards-plus-item">Модификация</dt>
                        <dd class="cards-plus-utem">'.$rows['complect'].'</dd>
                        <dt class="cards-plus-item">Цена</dt>
                        <dd class="cards-plus-utem">5 000 000р</dd>
                        <dt class="cards-plus-item">Статус</dt>
                        <dd class="cards-plus-utem">'.$rows['stat_app'].'</dd>
                        <button class="cards-plus-but">Отозвать заявку</button>
                    </form>
                </dl>
            </div>';
    }
?>