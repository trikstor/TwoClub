<LINK href="rss.xml" rel="alternate" type="application/rss+xml" title="Клуб Двоечников">
<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/fnmpchjleheiennfmeahlfkcnapkckhb">
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
<script>
chrome.webstore.install(https://chrome.google.com/webstore/detail/fnmpchjleheiennfmeahlfkcnapkckhb, successCallback, failureCallback);
if (chrome.app.isInstalled) {
  document.getElementById('install-button').style.display = 'none';
}
</script>
<script type="text/javascript" src="//yandex.st/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('#tlt').click(function(){
  $(this).parent().children('div.spoiler_body').toggle('normal');
  return false;
 });
});
jQuery(function ($) {
	$(window).scroll( function (e) {
		var need_height = 1/3 * $('body').height();
		if ($(document).scrollTop() > need_height) {
                    document.getElementById('tp1').style.height = '100%';
		}else{
                    document.getElementById('tp1').style.height = '88%';
}
	});
});
</script>
<script>
var tgs = new Array( 'div','td','tr');
var szs = new Array( 'xx-small','x-small','small','medium','large','x-large','xx-large' );
var startSz = 2;

function ts( trgt,inc ) {
 if (!document.getElementById) return
 var d = document,cEl = null,sz = startSz,i,j,cTags;
 
 sz += inc;
 if ( sz < 0 ) sz = 0;
 if ( sz > 6 ) sz = 6;
 startSz = sz;
 
 if ( !( cEl = d.getElementById( trgt ) ) ) cEl = d.getElementsByTagName( trgt )[ 0 ];

 cEl.style.fontSize = szs[ sz ];

 for ( i = 0 ; i < tgs.length ; i++ ) {
 cTags = cEl.getElementsByTagName( tgs[ i ] );
 for ( j = 0 ; j < cTags.length ; j++ ) cTags[ j ].style.fontSize = szs[ sz ];
 }
}
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.popup .close_window, .overlay').click(function (){
				$('.popup, .overlay').css({'opacity':'0', 'visibility':'hidden'});
			});
			$('a.open_window').click(function (e){
				$('.popup, .overlay').css({'opacity':'1', 'visibility':'visible'});
				e.preventDefault();
			});
		});
$(document).ready(function(){
    $('.splLink').click(function(){ 
        var show = $(this).attr('show'); 
        if(show == 1){ 
            $(this).attr('show', 0);
            $('.splCont').slideUp(300);
        }else{ 
            $(this).attr('show', 1);
            $('.splCont').slideDown(300);
        }
 return false;
    });
});
	</script>

﻿</head>

<body onload="startTimer()">
<html oncontextmenu="return false;">
<header>
<noindex>
<div class="top" style="margin-bottom:50px; width:101%; overflow-x:auto; position:absolute; top:-0.5%; left:-0.5%; right:-0.5%;">
<menu>
<table width="100%" border="0" cellpadding="0.1" style="text-decoration:none;">
  <tr>
    <td><img src="mlogo.png" width="200px" /></td>
    <td><div  id="button"><a href="https://twoclub.ru">Главная</a></div></td>
    <td><div  id="button"><a class="splLink" href="">Написать✎</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/glav.php" >Свежие вопросы</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/glav1.php" >Свежие статьи</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/studybook.php">Учебники</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/gdz.php">Решебники</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/calcs.php"  style="color:#FF8000;">Калькуляторы</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/tests/" style="color:#FF8000;">Тесты</a></div></td>
    <td><div  id="button"><a href="https://twoclub.ru/autorize.php">Войти в систему✎</a></div></td>
  </tr>
</table>
</menu>
</div>
<div class="splCont" style="margin-top:50px; color:white; height:50px; font-size:30px;">
<div align="center"> <a href="https://twoclub.ru/post.php"><b>Вопрос</b></a> | <a href="https://twoclub.ru/post1.php"><b>Статья</b></a> | <a href="https://twoclub.ru/tests.php"><b>Тест</b></a> </div>
</div>
</header>
<div class="top-text" align="center">
<div class="mess">
<br/>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="vkontakte,odnoklassniki,facebook,twitter,google,email"></div>
<script>
  (function() {
    var cx = '010784301857893493925:-fkunfpbc_a';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<div>
<?php
  if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
	echo "Здравствуйте ".$usert." |<a href='usersearch.php'>Искать других пользователей</a><br/><form method='post' action='profile.php'>
<button value=".$usert." name='prf' onclick='javascript: document.forms[...].submit()' class='ssl' >Ваш профиль</button>
<button value='1' name='logout' onclick='javascript: document.forms[...].submit()' style='color:red' class='ssl'>Выйти</button>
</form>";
}else{
echo'<div style="margin:2%;"><a href="registr.php" class="ssl">Регистрация</a><a href="autorize.php" style="margin-left:3%;" class="ssl"  >Вход</a><br/></div>';

}
if($_SESSION['admin']==1){
echo"<a href='aut1.php'><button class='ssl'>Админ панель</button></a>";
}
if($_POST['logout']==1){
session_destroy();
}
?>
</div>
</div>
</div>
</div>
</noindex>
</div>
<script>
</script>
<div id="tp1" class="menu" style="display:inline; float:left;">
<div style="margin:1%;"><img onclick="document.getElementById('tp1').style.display = 'none'" src="https://twoclub.ru/images/pop.gif" width="30px" /><a class="open_window" href="#"><img src="https://twoclub.ru/images/settings.gif" width="30px" /></a></div>
<div class="overlay"></div>
<div class="popup">
<div class="close_window">x</div>
<p>
<a href="http://orphus.ru" id="orphus" target="_blank"><img alt="Система Orphus" src="https://twoclub.ru/orphus.gif" border="0" width="240" height="80" /></a>
<div id="google_translate_element" align="right" style="display: inline-block;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'be,en,kk,pl,uk', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div style="width:250px;">
<a href="javascript:ts('body',1)">+ Увеличить шрифт</a> | <a href="javascript:ts('body',-1)">- Уменьшить шрифт</a><a ONCLICK="varitext()"><img src="https://twoclub.ru/images/print.png" width="20px"/></a></div>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function varitext(text){
text=document
print(text)
}
// End -->
</SCRIPT>
</p>
</div>
<b class="biz">Реклама</b>
<hr/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- twoclub1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-4330538232292733"
     data-ad-slot="3268264407"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div id="install-button">
<img  onclick="chrome.webstore.install()" src="https://twoclub.ru/images/ad102.png" width="100%" />
</div>
<br/>
<div style=" width:100%" align="center">
<b class="biz">Важные разделы</b>
<br/>
<br/>
<a class="button" href="https://twoclub.ru/random.php">Случайная</a><br/><br/>
<a class="button" href="https://twoclub.ru/news.html">Правила сайта</a><br/><br/>
<a class="button" href="https://twoclub.ru/presentation.html">Инструкция</a><br/><br/>
<a class="button" href="https://twoclub.ru/support.php">Помощь</a><br/><br/>
<a class="button" style="color:blue;" href="http://journal.twoclub.ru/src">Journal</a><br/><br/>
<a class="button" href="https://twoclub.ru/formuls.php">Все формулы ЕГЭ</a>
<br/>
<hr/>
<b class="biz">Топ Пользователей</b><br/>
<?
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query = "SELECT posts,user FROM users ORDER BY posts DESC LIMIT 5";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");
   $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
  echo "<b>".$row[1]."</b><br/>";
  }
  ?>
<br/>
<hr/>
<b class="biz">Топ Статей</b><br/>
<a id="tlt" style="color:blue; border:blue 1px solid;"><b>Показать/Скрыть</b></a>
<div class="spoiler_body">
<?php
$query = "SELECT id FROM top ORDER BY bi DESC LIMIT 10";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");
   $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
 $query1 = "SELECT * FROM stat WHERE id='$row[0]'";
  $result1 = $conn->query($query1);
   $rows1 = $result1->num_rows;
  for ($p = 0 ; $p < $rows1 ; ++$p)
  {
    $result1->data_seek($p);
    $row1 = $result1->fetch_array(MYSQLI_NUM);
  echo "<b><a href='".$row1[2]."'.php>".$row1[6]."</a></b><hr/><br/>";
  }
  }
?>
</div>
<br/>
<hr/>
<b class="biz">Топ Вопросов</b><br/>
<a id="tlt" style="color:blue; border:blue 1px solid;"><b>Показать/Скрыть</b></a>
<div class="spoiler_body">
<?php
$query = "SELECT id FROM sous ORDER BY count DESC LIMIT 10";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");
   $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
 $query1 = "SELECT * FROM topics WHERE id='$row[0]'";
  $result1 = $conn->query($query1);
   $rows1 = $result1->num_rows;
  for ($p = 0 ; $p < $rows1 ; ++$p)
  {
    $result1->data_seek($p);
    $row1 = $result1->fetch_array(MYSQLI_NUM);
  echo "<b><a href='".$row1[1]."'.php>".$row1[8]."</a></b><hr/><br/>";
  }
  }
?>
</div>
<br/>
<a href="rss.xml">
<div>
<img src="https://twoclub.ru/images/icoRss.gif" width=10%;/><br/>
<b>Подписывайтесь на наш RSS поток, будьте в курсе событий ! </b>
</div>
</a>
</div>
</div>
</div>
<div id="need" align="center" style="display:inline; float:right; margin-right:7%;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- twoclub -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4330538232292733"
     data-ad-slot="5971509204"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>