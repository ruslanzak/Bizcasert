<?php
    $ACTIVE_MENU = "practices";
    $ACTIVE_PAGE_TITLE= "Редактор";
?>
<?php
    include("../connection.php");
    session_start();
?>
<?php
    $action = $_GET["action"];
    $id = $_GET["id"];
    $submit = $_POST["submit"]; 

    if($action === "add"){
        if(isset($submit)){  
            $title = $_POST['title'];
            $url = $_POST['url'];
            if($_FILES['fileToUpload']['name'] != null){
                $uploaddir = 'img/';
                $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
            }

            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile);

            $sql = "INSERT INTO practices (title, url, img) VALUES ('%s', '%s', '%s')";

            $query = sprintf($sql,
               mysqli_real_escape_string($db, $title),
               mysqli_real_escape_string($db, $url),
               mysqli_real_escape_string($db, $uploadfile));


            $result = mysqli_query($db, $query);

            if(!$result)
                die(mysqli_error($db));
        }
    }
    if($action === "edit"){
        $query = "SELECT * FROM practices WHERE id=$id";
        $result = mysqli_query($db, $query);
        if(!$result)
            die(mysqli_error($db));
        $item = mysqli_fetch_assoc($result);
        
        if(isset($submit))  
        {  
            $title = $_POST['title'];
            $url = $_POST['url'];
            if($_FILES['fileToUpload']['name'] != null){
                $uploaddir = 'img/news/';
                $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile);
            }
            else{
                $uploadfile = $item['img'];
            }

            $sql = "UPDATE practices SET title='$title', url='$url', img='$uploadfile' WHERE id=$id";

            $result = mysqli_query($db, $sql);
            if(!$result)
                die(mysqli_error($db));
        }
    }
?>
<?php
    if($_SESSION["level_user"] === 1){
        include("editor_practices.php");
    }
?>