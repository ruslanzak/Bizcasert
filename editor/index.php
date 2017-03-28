<?php
    $ACTIVE_MENU = "news";
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
        if(isset($submit))  
        {  
            $title = $_POST['title'];
            $pretext = $_POST['pretext'];
            $hashtag = $_POST['hashtag'];
            $text = $_POST['txt'];
            if($_FILES['fileToUpload']['name'] != null){
                $uploaddir = 'img/news/';
                $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
            }

            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile);

            $form_date = new DateTime();
            $form_date = mysqli_real_escape_string($db, $form_date->format('Y-m-d'));

            $sql = "INSERT INTO news (title, hashtag, text, img, date) VALUES ('%s', '%s', '%s', '%s', '%s')";

            $query = sprintf($sql,
               mysqli_real_escape_string($db, $title),
               mysqli_real_escape_string($db, $hashtag),
               mysqli_real_escape_string($db, $text),
               mysqli_real_escape_string($db, $uploadfile),
               mysqli_real_escape_string($db, $form_date));


            $result = mysqli_query($db, $query);

            if(!$result)
                die(mysqli_error($db));
        }
    }
    if($action === "edit"){
        $query = "SELECT * FROM news WHERE id=$id";
        $result = mysqli_query($db, $query);
        if(!$result)
            die(mysqli_error($db));
        $item = mysqli_fetch_assoc($result);
        
        if(isset($submit))  
        {  
            $title = $_POST['title'];
            $hashtag = $_POST['hashtag'];
            $text = $_POST['txt'];
            if($_FILES['fileToUpload']['name'] != null){
                $uploaddir = 'img/news/';
                $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile);
            }
            else{
                $uploadfile = $item['img'];
            }

            $form_date = $item['date'];

            $sql = "UPDATE news SET title='$title', hashtag='$hashtag', text='$text', img='$uploadfile', date='$form_date' WHERE id=$id";

            $result = mysqli_query($db, $sql);
            if(!$result)
                die(mysqli_error($db));
        }
    }
?>
<?php
    if($_SESSION["level_user"] === 1){
        include("editor_news.php");
    }
    else{
        header("location: ../".$where);
    }
?>
