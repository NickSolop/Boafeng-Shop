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
             <!-- подключение центральной странице со слайдером-->
             <div id="block_registration">
         <h2 class="h2-title">Регистрация</h2>
<form method="post" id="form_reg" action="/reg/handler_reg.php">
<p id="reg_message"></p>
<div id="block-form-registration">
<ul id="form-registration">

<li>
<label>Логин</label>
<span class="star" >*</span>
<input type="text" name="reg_login" id="reg_login" />
</li>

<li>
<label>Пароль</label>
<span class="star" >*</span>
<input type="password" name="reg_pass" id="reg_pass" />
</li>
<li>
<label>Фамилия</label>
<span class="star" >*</span>
<input type="text" name="reg_surname" id="reg_surname" />
</li>
<li>
<label>Имя</label>
<span class="star" >*</span>
<input type="text" name="reg_name" id="reg_name" />
</li>
<li>
<label>E-mail</label>
<span class="star" >*</span>
<input type="text" name="reg_email" id="reg_email" />
</li>
<li>
<label>Мобильный телефон</label>
<span class="star" >*</span>
<input type="text" name="reg_phone" id="reg_phone" />
</li>
<li>
<div id="block-captcha">
<img src="/reg/reg_captcha.php" />
<input type="text" name="reg_captcha" id="reg_captcha" />
<p id="reloadcaptcha">Обновить</p>
</div>
</li>
</ul>
</div>
<p><input type="submit" name="reg_submit" id="form_submit" value="Регистрация" /></p>

</form>
</div>
              <!-- Подключение подвала с контактной информацией-->
               <footer>
             <?php
        include("include/footer.php");
             ?>
       </footer>
	 </div>
	   <script src="js/jquery-1.4.4.min.js"></script>
        <script src="js/shop-script.js"></script>
        <script src="js/jquery.cookie.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/registration_form_2.js"> </script>
         <script src="js/gifAnime.js"></script>
	  </body>
</html>