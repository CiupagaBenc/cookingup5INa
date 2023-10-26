<?php
echo "<table border>";
$napoje = array("Sok" =>"6", "Cola"=>"8","Herbata"=>"5");
foreach($napoje as $napoj=>$cena){
    echo "<tr><td>$napoj, </td><td>cena: $cena zł"."</td></tr>";
}
echo "</table>";
?>