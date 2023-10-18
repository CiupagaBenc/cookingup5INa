<?php
    session_start();
    echo "welcome to the page #2<br>";
    echo 'ulubiony kolor: '.$_SESSION['favcolor'];
    echo 'ulubione zwierze '.$_SESSION['animal'];
    echo date('y m d H:i:s', $_SESSION['time']);
    echo $_SESSION['bzdura'];
?>