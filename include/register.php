<?php
            include("include/db_connect.php");

            session_start();
?>

       <script type="javascript" src="/js/pass.js"></script>
       <script type="javascript" src="/js/shop-script.js"></script>
         <div class="regist">
          <?php

if ($_SESSION['auth'] == 'yes_auth')
{
 
 echo '<div class="enter-start"><p id="auth-user-info">Добрый день, '.$_SESSION['auth_name'].' </p></div>';
    
}else{
 
  echo '<div id="submitenter"><a>Вход</a></div>
          <div><a id="submitreg" href="index_registration.php">Регистрация</a></div>';
    
}	
?>
      </div>


         <div id="block-top-auth">
        <form method="POST">
            <ul id="input-email-pass">
               <h3>Вход</h3>
               <div class="message-auth">Неверный Логин и(или) Пароль</div>
                <li><input type="text" id="auth_login" placeholder="Login или e-mail"></li>
                <li><input type="password" id="auth_pass" placeholder="Пароль"></li>
                <ul id="list-auth">
                 <li><input type="checkbox" name="rememberme" id="rememberme"><label for="rememberme">Запомнить меня</label></li>
                <li><a id="remindpass" href="#block-remind">Забыли пароль?</a></li>
                </ul>
                <input type="submit" id="button-auth" value="Вход">
            </ul>
            
        </form>
    </div>
    
    <div id="block-remind">
<h3>Восстановление<br /> пароля</h3>
<p id="message-remind" class="message-remind-success"></p>
<input type="text" id="remind-email" placeholder="Введите ваш E-mail" />
<button type="button" class="button-remind">Готово</button>
<p align="right" class="auth-loading" ><img src="/images/loading.gif"/></p>
</div>
