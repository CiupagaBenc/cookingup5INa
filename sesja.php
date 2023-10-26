<?php
    session_start();
    echo 'Welcome to page #1';
    $_SESSION['favcolor'] = 'blue';
    $_SESSION['animal'] = 'dog';
    $_SESSION['time'] = time();
    echo '<br/><a href="data.php">Page 2</a>'
?>