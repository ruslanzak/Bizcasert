<?php
    include("../connection.php");
    session_start();
    if(isset($_GET['num'])){
       $num = $_GET['num'];
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT $num, 10";
    
        $result = mysqli_query($db, $query);
       if(mysqli_num_rows($result) > 0){          
           $a = mysqli_fetch_array($result);          
           do{
              $num++;
            
                print('<div class="news-item-up element-item persent-size grid-item">
                    <div class="news-item">');

                if($_SESSION["level_user"] === 1){
                    print('<a href="../editor/index.php?action=edit&id='.$a["id"].'"><span class="glyphicon glyphicon-pencil newsglyp1"></span></a>
                    <a onclick ="return confirm("Удалить?")" href="index.php?action=delete&id='.$a["id"].'"><span class="glyphicon glyphicon-remove newsglyp2"></span></a>');
                }
                print('
                <a href="post.php?id='.$a["id"].'" class="news-item-text1">'.$a["title"].'</a>
                        <p class="news-item-text2">'.$a["date"].'</p>
                        <img class="news-item-img" src="/editor/'.$a["img"].'" alt="">
                        <p class="news-item-text3">'.$a["hashtag"].'</p>
                        <p class="news-item-text4">');
               
                if(strlen($a["text"]) > 100){
                    print(mb_substr($a["text"],0,100, 'UTF-8'));
                    print("...");
                }
                if(strlen($a["text"]) <= 100 & strlen($a["text"]) != 0){
                    print($a["text"]);
                }
                print('
                        </p>
                        <div class="row">
                            <a class="news-item-button" href="post.php?id='.$a["id"].'">Читать дальше</a>
                        </div>
                    </div>
                </div>');

               
               
            
            }
           while($a = mysqli_fetch_array($result));
            
           sleep(1); //Сделана задержка в 1 секунду чтобы можно проследить выполнение запроса
         }
        else{
            echo 0; //Если записи закончились
        }
    }
?>