<?php
    $_COOKIE_name="promocja";
    $_COOKIE_value="wycieczka";
    setcookie($_COOKIE_name,$_COOKIE_value,
    time()+(24*60*60));
    $cookie_name = "promocja";
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set! <br>";
} else {
    echo "Coookie: '".$cookie_name."' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
};
setcookie("promocja", "wycieczka", time() - 7200);
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set!";
}
?>