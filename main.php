<!DOCTYPE html>


<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex</title>
    <link rel="normalize" href="normalize.css">                 <!-- подключили нормализацию отступов -->
    <link rel="stylesheet" href="style.css">                    <!-- подключили scc -->
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
        <section>                                           <!-- семантический тег для секции блока быстрого доступа -->
            <div class="container">
                <div class="main">
                    <div class="main_image">                <!-- левый блок с картинкой -->
                        <img class="main_img1" src="материалы/Rectangle 75 (1).png">
                    </div>
                    <div class="main_text">                 <!-- правый блок с контактами и именем -->
                        <h1 class="main_title">Иван Крутой</h1>
                        <div class="line"></div>

                        <div class="main_textcont">
                            <p class="main_desc">Олег</p>
                            <p class="main_desc">Таня</p>
                            <p class="main_desc">Лида</p>
                            <p class="main_desc">Костя</p>
                        </div>

                        <div class="main_allcont">
                            <a class="main_imgcontact" href="#"><img class="main_img" src="материалы/Контакт1.png" alt="face"></a>
                            <a class="main_imgcontact" href="#"><img class="main_img" src="материалы/Контакт2.png" alt="face"></a>
                            <a class="main_imgcontact" href="#"><img class="main_img" src="материалы/Контакт3.png" alt="face"></a>
                            <a class="main_imgcontact" href="#"><img class="main_img" src="материалы/Контакт4.png" alt="face"></a>
                        </div>

                        <!-- <ul>
                            <li class="main_item"><span class="main_span">52</span>Публикации</li>
                            <li class="main_item"><span class="main_span">52</span>Подписчики</li>
                            <li class="main_item"><span class="main_span">52</span>Подписки</li>
                            <li class="main_item"><span class="main_span">52</span>Конкурсы</li>
                        </ul> -->
                    </div>
                    
                </div>    
            </div>
        </section>

        <section>
            <div class="add">
                <div class="add_button"><button class="a_b">ДОБАВИТЬ ПУБЛИКАЦИЮ</button></div> 
                <div class="line"></div>  
            </div>
            
        </section>

        <section>
        
            <div class="responsive">

                <div class="gallery">
                  
                    <img src="материалы/фото1.jpg">
                  
                  
                </div>
              </div>
              
              
              <div class="responsive">
                <div class="gallery">
                  
                    <img src="материалы/фото2.jpg">
                  
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  
                    <img src="материалы/фото3.jpg" alt="Northern Lights" width="600" height="400">
                  
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  
                    <img src="материалы/фото4.jpg" alt="Mountains" width="600" height="400">
                  
                </div>
              </div>

              <div class="responsive">
                <div class="gallery">
                  
                    <img src="материалы/фото5.jpg" alt="Mountains" width="600" height="400">
                  
                </div>
                
              </div>


              <div class="responsive">
                <div class="gallery">
                  
                    <img src="материалы/фото6.jpg" alt="Mountains" width="600" height="400">
                  
                </div>
              </div>
              
              <div class="clearfix"></div>
              
              
        </section>

    </div>

    <div class="copy-right">
        <p style="text-align: center;">@apex</a></p>
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
      


</body>


</html>