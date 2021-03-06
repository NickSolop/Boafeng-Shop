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
              <h1 class="footer-pagesale">ДОСТАВКА И ОПЛАТА</h1>
              <div class="zp_style">
              <h3>Способы доставки</h3>

				 <h4>Курьером по Запорожью</h4>
<img src="/images/zp1.gif">
<p>Доставка по Запорожью является бесплатной.</p>
<p>Доставка товаров осуществляется:</p>  
<p>    
<br><b>* В этот день при заказе до 12-00 часов дня.
<br>* На следующий день если оформления заказа после 12-00 часов дня.</b>
<br>Оплата: Наличными курьеру при получении заказа</p>
		 </div>
		 <div class="ua_style">
		 <h4>Доставка по всей Украине:</h4>
			 <p>Просим обратить Ваше внимание:</p>
			 <a href="https://novaposhta.ua/ru"><img src="/images/ukraine.gif"></a>
<p><b>* Отправка товара только после предоплаты, которая ровна сумме стоимости перевозки.
<br>* Перевозчику Вы оплачиваете только стоимость доставки товара (приусловии 100% предоплаты).
<br>* Наложенный платеж (Новой Почтой по всей Украине). Оплата по заказу осуществляется наличными после проверки товара в отделении Новой Почты. Стоимость доставки согласно тарифам Новой Почты . Бесплатно при заказе от 1500 грн.</b></p> 			 
			<p>	Доставка по территории Украины осуществляется только "Новой почтой".</p>

<p><b>С помощью доставки "Новой почтой" вы можете получить товар даже в самых отдаленных уголках нашей страны.
В среднем доставка занимает 1-3 дня, во время заказа наши менеджеры согласуют с вами дату отправки товара.
Услуги доставки товаров "Новой почтой" оплачивается покупателем при получении, согласно тарифам перевозчика.</b></p>
		 </div>
			<div class="zp_style">
			<h4>Оплата</h4> 
<p><b>* Оплата наличными.</b> Осуществляется при «Самовывозе», или же при курьерской доставке.</p>  
<p><b>* Наложенный платеж.</b> В данном случае вы оплачиваете свой заказ в отделении Новой Почты, непосредственно после получения груза.</p>   
<p><b>* Предоплата.</b> Выбрав подобный способ оплаты, вы значительно экономите на доставке. Все номера счетов предоставляются после оформления заказа и выбора способа оплаты. </p> 
				
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