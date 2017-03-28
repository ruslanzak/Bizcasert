<?php
    include("../connection.php");
    $query = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
    
    $result = mysqli_query($db, $query);
    if(!$result)
        die(mysqli_error($db));

    $n = mysqli_num_rows($result);

    $news = array();
    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $news[] = $row;
    }

    if($_GET['action'] === "delete" && $_SESSION["level_user"] === 1){
        $id = $_GET['id'];
        $query = "DELETE FROM news WHERE id=$id";
        $result = mysqli_query($db, $query);

        if(!$result)
            die(mysqli_error($db));
        header("location: /news");
    }

    
?>