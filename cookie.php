<?php
    $_COOKIE_name="user";
    $_COOKIE_value="Jhon doe";
    setcookie($_COOKIE_name,$_COOKIE_value,
    time()+(24*60*60));

    $cookie_name = "user";


if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set!";
} else {
    echo "Coookie: '".$cookie_name."' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
};

?>