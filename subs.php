<?php
    $ACTIVE_MENU = "home";
    $ACTIVE_PAGE_TITLE= "Подписчики";
    
    include("connection.php");
    session_start();
    if($_SESSION["level_user"] != 1){
        header("location: /");
    }
    $query = "SELECT * FROM subscribers ORDER BY id DESC";
    
    $result = mysqli_query($db, $query);
    if(!$result)
        die(mysqli_error($db));

    $n = mysqli_num_rows($result);

    $subs = array();
    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $subs[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "blocks/head.php";
    ?>
</head>
<body>
    <?php
        include "blocks/menu.php";
    ?>
    <?php
        include "blocks/logo.php";
    ?>
    <div class="subs">
        <div class="container">
            <table border="1" class="subs-table">
                <tr>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Номер телефона</th>
                </tr>
                <?php foreach ($subs as $a): ?>
                    <tr><td><?=$a['name']?></td><td><?=$a['email']?></td><td><?=$a['phone']?></td></tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <?php
        include "blocks/footer.php";
    ?>
</body>
</html>