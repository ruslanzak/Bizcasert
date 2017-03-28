<?php
    include("../connection.php");
    session_start();

    $query = "SELECT * FROM practices ORDER BY id DESC";
    
    $result = mysqli_query($db, $query);
    if(!$result)
        die(mysqli_error($db));

    $n = mysqli_num_rows($result);

    $practites = array();
    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $practites[] = $row;
    }

    include "practices.php";

    $action = $_GET["action"];
    $id = $_GET["id"];
    if($action === "delete" && $_SESSION["level_user"] === 1){
        $query = "DELETE FROM practices WHERE id=$id";
        $result = mysqli_query($db, $query);

        if(!$result)
            die(mysqli_error($db));
        header("location: /practices");
    }
?>