<?php
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
        <!-- Подключение всех скриптов-->
	    <script src="js/jquery-1.4.4.min.js"></script>
        <script src="js/shop-script.js"></script>
        <script src="js/jquery.cookie.min.js"></script>
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
          <main>
            <div id="pagesale">
              <h1 class="footer-pagesale">Уважаймые покупатели</h1>
               <ul class="personal-pagesale">	
<br><li><h3>По техническим причинам автоматическая покупка в стадии доработки с ув. администрация магазина.</h3> </li>
             <br> <li><h3> Любой товар вы можете заказать по телефонам !!! </li>
	               <li><h3>+38 <b>(098) </b>72-39-182</h3></li>
	               <li><h3>+38 <b>(099) </b>27-40-111</h3></li>
	               <li><h3>+38 <b>(093) </b>59-02-829</h3></li>
                  <li><h3>E-mail:BaofengOfficial@gmail.com</h3></li>
	               <li><h3>Skype: BaofengOfficial</h3></li> 
<br><li><h3>Наш менеджер приймет у вас заказ и профессионально прокосультирует и поможет с выбором товара !!! </h3> </li> 
                 </ul>
</div>
             </main>
             <footer>
             <?php
        include("include/footer.php");
             ?>
       </footer>
	 </div>
	 
	 
	  </body>
</html>