<?php
    $name = $_POST["name"];
    $email = $_POST["email"];


    $sql="INSERT INTO MyGuests (firstname, email) Values ('$name', '$email');";


    if(mysqli_query($conn, $sql)) {
        echo "New Record created successfully";
    } else {
        echo "Error: ". $sql . "<br>" .mysqli_error($conn);
    }
?>
