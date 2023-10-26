<div class="lewy1">
    <h3>Ryby zamieszkujące rzeki</h3>
    <ol id="lista">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="restauracja";

$conn = mysqli_connect($servername, $username, $password, $database );
if(!$conn){
    die("connection failed: ".mysql_connect_error());
}
$data     =$_POST["date"];
$liczba   =$_POST["liczba"];
$telefon  =$_POST["telefon"];
?>
