<?php
    include "connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO subscribers (name, email, phone) VALUES ('%s', '%s', '%s')";
    
    $query = sprintf($sql,
       mysqli_real_escape_string($db, $name),
       mysqli_real_escape_string($db, $email),
       mysqli_real_escape_string($db, $tel));
    
    $result = mysqli_query($db, $query);
    if(!$result)
        die(mysqli_error($db));
?>