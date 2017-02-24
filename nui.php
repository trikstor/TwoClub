<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Новое в Новом году | Клуб Двоечников</title>
<META NAME="description" CONTENT="Нововведения в 2016 году.">
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
<style>
body {
    background-image: url(../images/new_nov.gif);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:white;
}

.werop {
	color: #F00;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
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
            border-bottom: #000000 dashed 1px;
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
$(document).ready(function(){
$("div.spoiler div.name span").toggle(function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").show();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " -15px 0");
$(this).parent("div.name").parent("div.spoiler").toggleClass('big');
},function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").hide();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " 0 -15px");
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
<div class="cc">
<div class="hh" style="opacity:0.8;">
<div class= "spoiler" >
<div class= "name" id="sa" ><span><img id="pp" src="images/minilogo.gif" /></span>
<?php echo $rport; ?>
<div style="float:right; display:inline-block;"><label class="spoiler_title"><img src='images/aut.gif'/></label></div>
</div>
<div style="overflow-y: scroll; height:300px;" class= "text" align="center">
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
<li><a style="color:blue;" href="http://journal.twoclub.ru/src">Journal</a></li>
</ul>
</div>
</div>
</div>
<br/>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<b>
<h1 align="center">Клуб Двоечников В Новом году 2016</h1>
<h3>Что будет добавлено:</h3>
<p>1. <img src="images/star.gif" width="30px" />Закладки у пользователей в профиле.</p>
<p>2. Система генерации тестов различного вида.</p>
<p>3. Сортировка топиков в учебниках и решебниках, их перемещение по списку.</p>
<p>4. Можно будет загружать разные типы файлов.</p>
<p>5. Вы сможете рисовать рисунки к ответам.</p>
<p>6. Возможность подписываться на других пользователей.</p>
<h3>Что будет изменено:</h3>
<p>1. Обновлен дизайн как основной, так и мобильной версии.</p>
<p>2. Система чатов и профиль будут значительно изменены.</p>
<p>3. Перезагрузок страниц станет меньше.</p>
<p>4. Авторизация в проекте Journal будет доработана.</p>
<p>5. Доработка системы оповещений</p>
<h4>  И другое...</h4>
<p align="center">Если вы еще не зарегистрированы, то <a href="https://twoclub.ru/registr.php" class="werop">сделайте</a> это.</p>
<h3 align="center">Удачи в новом году</h3>
<p align="center">&nbsp;</p>
<hr/>
Образовательный портал twoclub.ru 2015-2016 
</b>
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
</body>
</html>
