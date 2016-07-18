<?php
   define('myeshop', true);
   include("include/db_connect.php");
   session_start();
?>

<html>
    <head>
	    <meta charset="utf-8">
        <link rel="stylesheet" href="csss/style.css">  
        
        <meta name="keywords" content="рации Baofeng">
        <meta name="description" content="">
        <meta name="author" land="ru" content="Солоп Николай">
    </head>
<title>Baofeng Official</title>
	 <body>
	 <div id="page">
	 <!-- Подключение верхней строчки-->
<div>
    <?php
        include("include/register.php");
        ?>
</div>
   <!-- Подключение шапки сайта-->
    <header id="header">
        </header>
        <!-- Подключение навигации -->
        <nav>
         <?php
        include("include/navigation.php");
             ?>
             </nav>
             <!-- подключение центральной странице со слайдером-->
          <div>
            <div id="main">   
               <div id="container">
		<div id="example">
			<img src="images/new-ribbon.png" width="112" height="112"  id="ribbon">
			<div id="slides">
				<div class="slides_container">
					<div>
						<img src="images/slide/slide1.png" >
					</div>
					<div>
						<img src="images/slide/slide2.png">
					</div>
					<div>
						<img src="images/slide/slide3.png">
					</div>
					<div>
						<img src="images/slide/slide4.png">	
					</div>
					<div>
						<img src="images/slide/slide5.png">
					</div>
					<div>
						<img src="images/slide/slide6.png">
					</div>
					<div>
						<img src="images/slide/slide7.png">
                        </div>
                        <div>
						<img src="images/slide/slide8.png">
						</div>
					</div>
				</div>	
	</div>
                
            </div>
	        
	
	        <img class="info-logo" src="images/ikonki11.png">
	       <p class="side-text">Это стремительно развивающеяся компания по производству Радиоаппаратуы и комплектующих, которая уже успела себя зарекомендовать как качесвенный и надежный производитель радиостанци. по всему миру. Она берет свои технологи от одного из лидеров радиоаппратуры мира марки KENWOOD который по праву входит в тройку лидеров. География и обьемы продаж компании говорят сами за себя, это мильоны  изделий в месяц и сотни городов продаж. В нашем интренет магазине вы найдете бессцелеры продаж от компании BAOFENG POFUNG это лучший изделия которые были проверенны уже временем, так же мы предоставляем своим покупателям множество вариаций улучшения и защиты своих радиостанций. А если интересующих вас коплектуюющих вы не нашли у нас вы можете написать нам на наш почтовый ящык который находить в подвале сайта , и мы для вас в кротчайшие сроки доставим интересующую вас деталь по самым лучшым ценам в Украине.   
	           
	       </p>
           <div class="hit-sale">
              <h1>Хиты Продаж</h1>
               <img src="/uploads_images/img1.jpg">
               <img src="/uploads_images/img8.jpg">
               <img src="/uploads_images/img29.jpg">
               <img src="/uploads_images/img25.jpg">
           </div>
            </div>                   
              </div>
              <!-- Подключение подвала с контактной информацией-->
              <footer>
             <?php
        include("include/footer.php");
             ?>
       </footer>
		 </div>
	 <!-- Подключение всех скриптов-->
        <script src="js/gifAnime.js"></script>
	    <script src="js/jquery-1.4.4.min.js"></script>
	    <script src="js/slides.min.jquery.js"></script>
        <script src="js/slide.js"></script>
        <script src="js/shop-script.js"></script>
        <script src="js/jquery.cookie.min.js"></script>
        <script src="js/pass.js"></script>
        <script src="js/pass.js"></script>
	  </body>
</html>