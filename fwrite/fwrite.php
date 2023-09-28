<?php
$myfile = fopen("newfile.txt","w")
    or die("Unable to open file!");
$tekst = "john już tu nie mieszka";
fwrite($myfile, $tekst);
fclose($myfile);
?>