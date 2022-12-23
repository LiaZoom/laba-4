<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<header class="header">                             <!-- семантический тег для верхнего меню -->
        <!-- ссылка на лого -->

<span style="font-size:30px;cursor:pointer" onclick="openNav()"><a href="#" class="header_logo"></a></span>
<nav class="header_nav">                        <!-- семантический тег навигации -->
<ul class="header_list">                    <!-- список для эл-ов верхнего меню -->
    <li class="header_item"><a class="header_link" href="index.php">Главная</a></li>
    <li class="header_item"><a class="header_link" href="main.php">Личный кабинет</a></li>   
</ul>
</nav>
</header>


<div class="page">

    <p class="stb">Завершенные соревнования</p>
    <div class="maim_image">
        <img class="main_img1" src="материалы/б1.png">
    </div>
  
</div>

</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="page.html">Фотографии</a>
    <a href="page.html">Видео</a>
    <a href="page.html">Музыка</a>
    <a href="page.html">Игры</a>
    <a href="page.html">Книги</a>
    <a href="page.html">Рисунки</a>
  </div>
  



  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }
  </script>








    

    <div class="container">
        <?php

        

        foreach ($xml->item as $item) {
        ?>
    
        <div class="form-inner">
            
            
                
                <?php 
                  if ($item['id'] == 1) { ?>
                  <h3>Заявка на мероприятие</h3>
                    <a href="create.php?id=<?= $item['id']?>"><input type="submit" value="Добавить"></a>
                  <?php }
                  else {?>
                  <span class="task-card-name"><input type="text" placeholder="<?= $item->name ?>"></span>
                <span class="task-card-city"><input type="text" placeholder="<?= $item->city ?>"></span>
                <span class="task-card-city"><input type="text" placeholder="<?= $item['deadline'] ?>"></span>
                <!-- <span class="task-card-deadline"><textarea placeholder="<?= $item->comment ?>" rows="3"></textarea></span> -->
                    <a href="delete.php?id=<?= $item['id']?>"><input type="submit" value="Удалить"></a>
                    <a href="update.php?id=<?= $item['id']?>"><input type="submit" value="Изменить"></a>
                  <?php
                  }?>
            </div>




            
            
        <?php
        }

        ?>
       
    </div>





    <div class="copy-right">
    <p style="text-align: center; color: rgb(150, 125, 125)">@apex</a></p>
</div>






</body>

</html>