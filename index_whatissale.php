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
<title>Магазин Радиостанций Baofeng</title>
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
			 
			 <div id="page_cash">
              <h1 class="footer-pagesale">Как купить?</h1>
			  <p><b> Поскольку наш сайт работает в тестовом режиме, все заказы принимает наш менеджер по телефону ( который указан внизу сайта ).</b></p> 
			  <p><b>Мы каждый день работаем над тем что бы вам было приятней находиться в нашем магазине, в скором времени мы запустим автоматическую покупку, для вашего удобства.</b></p>
			  <p><b>В то же время хотим отметить что все цены указаные на сайте являются актуальными, вам осталось только уточнить наличие товара по телефону и сделать заказ.</b></p>
			  </div>
			 <footer>
             <?php
        include("include/footer.php");
             ?>
       </footer>
		 </div>
	 <!-- Подключение всех скриптов-->
	    <script src="js/jquery-1.4.4.min.js"></script>
        <script src="js/shop-script.js"></script>
        <script src="js/jquery.cookie.min.js"></script>
        <script src="js/gifAnime.js"></script>

	  </body>
</html>