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
			 
			 <div id="page_whois">
              <h1 class="footer-pagesale">Кто мы?</h1>
				 <p>Наши Контакты</p>
              <p><b>Украина, Запорожье, Хортицкое Шоссе 44А (Никопольский Рынок) Бокс 265</b></p>
              <ul class="personal-pagesale">
	               <li><h3>+38 <b>(098) </b>72-39-182</h3></li>
	               <li><h3>+38 <b>(099) </b>27-40-111</h3></li>
	               <li><h3>+38 <b>(093) </b>59-02-829</h3></li>
                  <li><h3>E-mail:BaofengOfficial@gmail.com</h3></li>
	               <li><h3>Skype: BaofengOfficial</h3></li> 
                 </ul>
                 <div class="maps">
                <iframe class="idmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d171352.4257247196!2d35.05502570920683!3d47.851571397359805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc673dfa85bb03%3A0x7e675cd9074d3f4a!2z0JfQsNC_0L7RgNC-0LbRjNC1LCDQl9Cw0L_QvtGA0L7QttGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQo9C60YDQsNC40L3QsA!5e0!3m2!1sru!2sru!4v1460548753732"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
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