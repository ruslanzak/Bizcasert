<?php
    include("../connection.php");

    if($_GET['id'] != 0){
        $id = $_GET['id'];
        $query = "SELECT * FROM news WHERE id=$id";
    
        $result = mysqli_query($db, $query);
        if(!$result)
            die(mysqli_error($db));
        $post = mysqli_fetch_assoc($result);
    }
?>