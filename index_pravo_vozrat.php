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
             <div id="page_pravo">
              <h1 class="footer-pagesale">ГАРАНТИЯ, СЕРВИС И ПРАВО НА ВОЗВРАТ</h1>

				 <h3>Гарантия на товар.</h3>

<p>
На товары в нашем магазине предоставляется гарантия, подтверждающая обязательства по отсутствию в товаре заводских дефектов. Гарантия предоставляется на срок 2 месяца и вступает в силу через два дня после передачи заказа в курьерскую службу( при интернет продажах) или с момента покупки в магазине . Пожалуйста, проверьте комплектность и отсутствие дефектов в товаре при его получении (комплектность определяется описанием изделия или руководством по его эксплуатации).
</p>
                      <h3>Не гарантийные товары.</h3>

<p>В соответствии с ЗУ «О защите прав потребителей»:</p>
		 
         <p><br><b>* ГАРНИТУРЫ</b>
         <br><b>* АКСЕССУАРЫ (некоторые виды)</b></p>

<p>Гарантийные обязательства не распространяются на следующие неисправности:</p>
<p>
<br><b>* Повреждения, вызванные использованием товара не по назначению или с нарушением правил эксплуатации;</b>
<br><b>* Случайные повреждения, причиненные клиентом или повреждения, возникшие вследствие небрежного отношения или использования (воздействие жидкости, запыленности и т. п.);</b>
<br><b>* Повреждения в результате стихийных бедствий (природных явлений);</b>
<br><b>* Повреждения, вызванные использованием ненадлежащих элементов питания или неправильным подключением к электросети.</b></p>

                                    <h3>Возврат/обмен товара.</h3>

<p>Вы можете вернуть/обменять товар в течение 14 дней с момента покупки. Это право гарантирует вам «Закон о защите прав потребителя». Возврат/Обмен товара производится путем возврата нам приобретенного товара с последующим возмещением денежных средств покупателю. </p>
	<p>Чтобы использовать эту возможность, пожалуйста, убедитесь, что:</p>
<p><br><b> * Товар, не был в употреблении и не имеет следов использования: царапин, сколов, потёртостей, не подвергался изменениям и т. п.;</b>
<br><b> * Товар полностью укомплектован и не нарушена целостность упаковки;</b>
<br><b> * Сохранены все ярлыки и заводская маркировка.</b>

<p>Мы вернем денежные средства уплаченные за Ваш заказ после получения возвращаемого товара к нам на склад и рассмотрения поданного заявления на возврат/обмен товара, но не позднее 7 дней с момента поступления нам данного товара и заявления на возврат/обмен товара. </p>
<p>Возврат/обмен осуществляется курьерской службой, "Новой почты".</p>
<p>В каких случаях может быть отказано в обмене/возврате товара?</p>

<p>Отказ в обмене/возврате товара может быть по следующим причинам:</p>
<p><br><b>* Нарушена целостность и сохранность гарантийных пломб, фирменной упаковки и т.п.;</b>
<br><b>* Есть механические или иные повреждения, которые возникли вследствие умышленных или неосторожных действий покупателя или третьих лиц;</b>
<br><b>* Было произведено несанкционированное вскрытие, ремонт или изменены внутренние коммуникации и компоненты товара, изменена конструкция или схемы товара;</b></p>

<h3>Получить подробную информацию об обмене/возврате товара в нашем интернет-магазине можно обратившись к нашему менеджеру по телефонам указаным на сайте.
</h3>
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