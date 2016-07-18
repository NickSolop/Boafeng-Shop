<?php
            include("include/db_connect.php");
            session_start();
?>
   <html>
    <head>
	    <meta charset="utf-8">
        <link rel="stylesheet" href="csss/style.css">
         <link rel="stylesheet" href="csss/buttonSale.css">
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
    <header>
	   <div id="header"> </div>
        </header>
        <!-- Подключение навигации -->
        <nav>
         <?php
        include("include/navigation.php");
             ?>
             </nav>
             <!-- подключение центральной странице со слайдером-->
             <main>
            <ul id="block_tovaru">
            <?php
$result = mysql_query("SELECT * FROM table_products WHERE type_tovara='accessories'",$link);

if (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
  
do
{
    if ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
    $img_path = './uploads_images/'.$row["image"];
    $max_width = 200;
    $max_height = 300;
    list($width, $height) = getimagesize($img_path);
    $ratioh = $max_height/$height;
    $ratiow = $max_width/$width;
    $ratio = min($ratioh, $ratiow);
    $width = intval ($ratio*$width);
    $height = intval ($ratio*$height);
    } else 
{
    $img_path = "/images/no-image.png";
    $width = 200;
    $height = 300;
}
    echo'
  <li>
  <div class="block-images">
  <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" >
  </div>
  <p class="style-title"><a href="">'.$row["title"].'</a></p>
  <p class="price"><strong>'.$row["price"].'</strong> грн.</p>
    <a class="button" href="index_salepage.php">
          <svg width="100" height="30">
              <line class="top-left" x1="-50" y1="0" x2="50" y2="0" />
              <line class="top-right" x1="50" y1="0" x2="150" y2="0" />
              <line class="left-top" x1="0" y1="-15" x2="0" y2="15" />
              <line class="left-bottom" x1="0" y1="15" x2="0" y2="50" />
              <line class="bottom-left" x1="-50" y1="30" x2="50" y2="30" />
              <line class="bottom-right" x1="50" y1="30" x2="150" y2="30" />
              <line class="right-top" x1="100" y1="-15" x2="100" y2="15" />
              <line class="right-bottom" x1="100" y1="15" x2="100" y2="45" />
          </svg>
          <p>В КОРЗИНУ<p>
      </a>
  </li>
    ';
}
while($row = mysql_fetch_array($result));

}
?>
             </ul>
              </main>
         
              <!-- Подключение подвала с контактной информацией-->
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
        <script src="js/pass.js"></script>
      
	  </body>
</html>