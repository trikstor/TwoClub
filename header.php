<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script>
$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});
</script>
<script src="//yandex.st/jquery/1.7.2/jquery.min.js" ></script>
<style>
#page-preloader {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: #FFF;
    z-index: 100500;
}

#page-preloader .spinner {
    width: 32px;
    height: 32px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -16px 0 0 -16px;
}
</style>
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

    <style>
input.gsc-input {
 background: #fff !important; 
 *background: #fff !important; 
 }
        .spoiler_title{
            font-size: 16px;
            cursor: pointer;
        }
        .spoiler_block{
            display: none;
        }

body{
font-family: 'PT Sans Narrow', sans-serif;
}
@keyframes rotate{ 
	from { 
	
		transform:  rotate(0);

	}	
	to {
		transform: rotate(360deg);
	}

} 
@-moz-keyframes rotate{from {-moz-transform:  rotate(0);}	to {-moz-transform: rotate(360deg);}} 

@-webkit-keyframes rotate{from {-webkit-transform:  rotate(0);}	to {-webkit-transform: rotate(360deg);}} 
	

#op {
	padding-right: 13px;

	animation: rotate 5s infinite linear; 
	-moz-animation: rotate 5s infinite linear;
	-webkit-animation: rotate 5s infinite linear;
}
.hh{background: #CDCDCD;
position:fixed;
left:0%;
top:0%;
width:100%;
z-index:2;
}
div.spoiler div.text {
display: none;
}
div.spoiler div.name { width:100%;} 
div.spoiler div.text { width:100%; background: #E8E8E8;}
.text a{ text-decoration:none; color:#5C5C5C;}
.text a:hover{color:#2C0000;}
.cc{
	width:100%;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
input{border-radius:4px;
background: #E8E8E8;
}
#q1{ vertical-align:top;
margin-top:21px;
}
.round {
    width:50px;
    border-radius: 100px; /* Радиус скругления */
    border: 3px solid black; /* Параметры рамки */
    box-shadow: 0 0 7px black; /* Параметры тени */
   }
.button12{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:solid 1px #e2ecf0; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:26px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#f7ffff; 
 background-color:#94a1a6; 
 background-image: -moz-linear-gradient(top, #94a1a6 0%, #c9d1d4 100%); 
 background-image: -webkit-linear-gradient(top, #94a1a6 0%, #c9d1d4 100%); 
 background-image: -o-linear-gradient(top, #94a1a6 0%, #c9d1d4 100%); 
 background-image: -ms-linear-gradient(top, #94a1a6 0% ,#c9d1d4 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c9d1d4', endColorstr='#c9d1d4',GradientType=0 ); 
 background-image: linear-gradient(top, #94a1a6 0% ,#c9d1d4 100%);   
 -webkit-box-shadow:3px 2px 2px #c9c1c1, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 3px 2px 2px #c9c1c1,  inset 0px 0px 1px #ffffff;  
 box-shadow:3px 2px 2px #c9c1c1, inset 0px 0px 1px #ffffff;  
 opacity:0.7; 
 -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70); 
 filter: alpha(opacity=70); 
 text-shadow: 2px 1px 3px #8f8888; 
 filter: dropshadow(color=#8f8888, offx=2, offy=1); }
a{
color:black; 
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $('.spoiler_title').click(function(){ 
        var show = $(this).attr('show'); 
        if(show == 1){ // если отображен, то прячем
            $(this).attr('show', 0);
            $('.spoiler_block').slideUp(300);
        }else{ // если спрятан, то показываем
            $(this).attr('show', 1);
            $('.spoiler_block').slideDown(300);
        }
    });
});
</script>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
 if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
        $ava=$_SESSION['avatar'];
	$rport= "<div style='float:center; display:inline-block; width:150px; margin:3%; vertical-align:top;' ><img class='round' src='".$ava."' /><b> ".$usert."</b></div>";
}
?>
<a name="top"></a>
<noindex>
<div id="page-preloader"><span class="spinner"><img src="images/477.gif" alt="Preloader" width="200px" /></span></div>
<div class="spoiler_block" style="position:fixed; width:100%; height:100%; overflow-y:scroll; z-index:2;" > 
<div align="center">
<div style="background:#E5E5E5;">
<br/>
<ul type="none" style="font-size:24px;">
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
<li><a href="index.php">Главная</a></li>
<hr/>
<li><a href="gdz.php">Решебники</a></li>
<hr/>
<li><a href="studybook.php">Учебники</a></li>
<hr/>
<li><a href="glav1.php">Теория</a></li>
<hr/>
<li><a href="glav.php">Новые Вопросы</a></li>
<hr/>
<li><a href="post.php">Добавить вопрос</a></li>
<hr/>
<li><a href="calcs.php">Калькуляторы</a></li>
<hr/>
<li><a style="color:blue;" href="http://math.twoclub.ru">Формулы и теория по математике</a></li>
<hr/>
<li><a style="color:blue;" href="http://journal.twoclub.ru/src">Journal</a></li>
<hr/>
<li><a href="https://twoclub.ru/upload.php" style="color:blue;">Облако☁</a></il>
</ul>
<br/>
<img src="images/ad102.png" width="100%" />
<br/>
♛ ЕГЭ
<br/>
<a class="button" href="https://twoclub.ru/formuls.php">ЕГЭ по математике</a><br/><br/>
<a class="button" href="https://twoclub.ru/338.php">ЕГЭ по информатике</a><br/><br/>
<a class="button" href="https://twoclub.ru/340.php">ЕГЭ по географии</a><br/><br/>
♛ Важные разделы
<br/>
<a class="button" href="news.html">Правила сайта</a><br/><br/>
<a class="button" href="presentation.html">Инструкция</a><br/><br/>
<a class="button" href="support.php">Помощь</a><br/><br/>
<a class="button" href="random.php">Случайная статья</a>
<hr/>
♛ Топ Пользователей<br/>
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
♛ Топ Статей<br/>
﻿<?php
$query = "SELECT id FROM top ORDER BY bi DESC LIMIT 10";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");
   $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
 $quer = "SELECT * FROM stat WHERE id='$row[0]'";
  $resul = $conn->query($quer);
   $rowa = $resul->num_rows;
  for ($p = 0 ; $p < $rowa ; ++$p)
  {
    $result->data_seek($p);
    $rowt = $resul->fetch_array(MYSQLI_NUM);
  echo "<b><a href='".$row[2]."'.php>".$rowt[6]."</a></b><hr/><br/>";
  }
  }
?>
<br/>
<hr/>
♛ Топ Вопросов<br/>
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
<br/>
</div>
<div style="background:#E5E5E5;">
<img src="images/icoRss.gif" width="10%"/>
<a href="rss.xml" style=" color:#FF7F00;">Подписывайтесь на наш  RSS поток, будьте в курсе событий.</a>
</div>
</div>
  </div>
<div class="cc">
<div style="position:fixed; left:1%; top:1%; z-index:2;"><span><div class="spoiler_title"><img src="images/minilogo.gif" /></div></span>
<?php echo $rport; ?>
</div>
</div>
</div>
<br/>
<br/>
<div align="center"><img id="op" src="images/logo1.png"><br/><br/><br/>
<br/>
<b>Клуб Двоечников-Из двоечника в отличника!</b><br/>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,google,email,print"></div>
<br/>
<a class="open_window" href="#"><img src="images/settings.gif" width="30px" /></a>
<div class="overlay"></div>
<div class="popup">
<div class="close_window">x</div>
<p>
<a href="http://orphus.ru" id="orphus" target="_blank"><img alt="Система Orphus" src="orphus.gif" border="0" width="240" height="80" /></a>
<div id="google_translate_element" align="right" style="display: inline-block;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'be,en,kk,pl,uk', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div style="width:250px;">
<a href="javascript:ts('body',1)">+ Увеличить шрифт</a> | <a href="javascript:ts('body',-1)">- Уменьшить шрифт</a><a ONCLICK="varitext()"><img src="images/print.png" width="20px"/></a></div>
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
<br/>
<hr/>
<?php
  if(isset($_SESSION['usertwcl'])){
$usert=$_SESSION['usertwcl'];
echo "<a href='usersearch.php'>Искать других пользователей</a><br/><form method='post' action='profile.php'>
<button value=".$usert." name='prf' onclick='javascript: document.forms[...].submit()' class='ssl' >Ваш профиль</button>
<button value='1' name='logout' onclick='javascript: document.forms[...].submit()' style='color:red' class='ssl'>Выйти</button>
</form>";
}else{
echo'<div style="margin:2%;"><a href="registr.php" class="ssl">Регистрация</a><a href="autorize.php" style="margin-left:3%;" class="ssl">Вход</a><br/></div>';

}
if($_SESSION['admin']==1){
echo"<a href='aut1.php'><button class='ssl'>Админ панель</button></a>";
}
if($_POST['logout']==1){
session_destroy();
}
?>
</div>
</noindex>
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