<?php
    include "../connection.php";
    $name = $_POST['name'];
    $whence = "";
    if($_POST['whence1'] != null){
        $whence .= $_POST['whence1'] . "<br/>";
    }
    if($_POST['whence2'] != null){
        $whence .= $_POST['whence2'] . "<br/>";
    }
    if($_POST['whence3'] != null){
        $whence .= $_POST['whence3'] . "<br/>";
    }
    if($_POST['whence4'] != null){
        $whence .= $_POST['whence4'] . "<br/>";
    }
    if($_POST['whence5'] != null){
        $whence .= $_POST['whence5'] . "<br/>";
    }
    if($_POST['whence6'] != null){
        $whence .= $_POST['whence6'] . "<br/>";
    }
    $command = $_POST['command'];

    $sql = "INSERT INTO championship (name, whence, quantity) VALUES ('%s', '%s', '%d')";
    
    $query = sprintf($sql,
       mysqli_real_escape_string($db, $name),
       mysqli_real_escape_string($db, $whence),
       mysqli_real_escape_string($db, $command));
    
    $result = mysqli_query($db, $query);
    if(!$result)
        die(mysqli_error($db));
?>