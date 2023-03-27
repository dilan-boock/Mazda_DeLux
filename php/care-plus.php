<?php
    echo 'Ваша модель: '.$_POST['model'];
    echo 'Инфо о модели: '.$_POST['info'];
    echo 'Технические характеристики: '.$_POST['techinfo'];
    echo 'Прикрепленные фотография1: '.$_FILES['foto']['name'];
    echo 'Прикрепленные фотография2: '.$_FILES['foto1']['name'];
    echo 'Прикрепленные фотография3: '.$_FILES['foto2']['name'];
?>