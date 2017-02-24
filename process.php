<? session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Документ без названия</title>
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script type="text/javascript">
function updateChat(){
	
}
function SendForm() {
	//отправка файла на сервер
	$$f({
		formid:'test_form',//id формы
		url:'comment.php',//адрес на серверный скрипт, такой же как и в форме
		onstart:function () {//действие при начале отправки
			$$('result','начинаю отправку');//в элемент с id="result" выводим результат
		},
		onsend:function () {//действие по окончании отправки
			$$('result',$$('result').innerHTML+'<br />комментарий успешно отправлен');//в элемент с id="result" выводим результат
		}
	});

document.getElementById('test_form').submit();

}
</script>
<style>
body{
        font-size:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
.searchform {
	display: inline-block;
	zoom: 1; /* ie7 hack for display:inline-block */
	*display: inline;
	border: solid 1px #d2d2d2;
        padding:1%;
	
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;

	-webkit-box-shadow: 0 1px 0px rgba(0,0,0,.1);
	-moz-box-shadow: 0 1px 0px rgba(0,0,0,.1);
	box-shadow: 0 1px 0px rgba(0,0,0,.1);

	background: #f1f1f1;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
	background: -moz-linear-gradient(top,  #fff,  #ededed);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed'); /* ie7 */
	-ms-filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed'); /* ie8 */
}
.searchform input {
	font: normal 12px/100% Arial, Helvetica, sans-serif;
}
.searchform .searchfield {
	background: #fff;
	width: 400px;
	border: solid 1px #bcbbbb;
	outline: none;

	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;

	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
}
.searchform .searchbutton {
	color: #fff;
	border: solid 1px #494949;
	font-size: 21px;
	height: 30px;
	width: 100px;
	text-shadow: 0 1px 1px rgba(0,0,0,.6);
        padding:10px;
        *display: inline;
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;

	background: #5f5f5f;
	background: -webkit-gradient(linear, left top, left bottom, from(#9e9e9e), to(#454545));
	background: -moz-linear-gradient(top,  #9e9e9e,  #454545);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#9e9e9e', endColorstr='#454545'); /* ie7 */
	-ms-filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#9e9e9e', endColorstr='#454545'); /* ie8 */
}
#test_form{
width:100%;
}
.cc{background:#E3E3E3;
margin:1%;
width:70%;
}
.bb{
width:70%;
margin:1%;
}
b{
	font-size:24px;
}
.zx {
	color: #FF8000;
}
.vv{
	border: #323232 solid 2px;
}
.button{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:18px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#d2d7d9; 
 background-image: -moz-linear-gradient(top, #d2d7d9 0%, #555a5c 100%); 
 background-image: -webkit-linear-gradient(top, #d2d7d9 0%, #555a5c 100%); 
 background-image: -o-linear-gradient(top, #d2d7d9 0%, #555a5c 100%); 
 background-image: -ms-linear-gradient(top, #d2d7d9 0% ,#555a5c 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#555a5c', endColorstr='#555a5c',GradientType=0 ); 
 background-image: linear-gradient(top, #d2d7d9 0% ,#555a5c 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
</style>
</head>
<body background="vc.png">
<div  align="center">
<a href="http://twoclub.ru/index.php" class="button"/>Вернуться на главную</a><br/><br/><br/>
<div class="searchform" >
<form id="test_form" action="comment.php" method="post">
<input style="opacity:0" value="<? echo $rr ?>" name="name"/><br/>
<textarea class="searchfield" name="comment"></textarea>
</form>
<br/>
<div class="searchbutton" onclick="SendForm();">Отправить</div>
</div>
<div id="result">Введите текст</div><br /><br />
<hr/>
<div id="chat-area">
<?php
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
 $query  = "SELECT * FROM sell ORDER BY id DESC";
$result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
  if($j & 1){
	  $uno='cc';
  }else{
$uno='bb';
}
echo "<div class='".$uno."'><div class='vv'>".$row[1]."</div><br/>".$row[2]."</div><br/>";
}
?>
</div>
</div>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div align="center" style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#7A7A7A;">
<div style=" background:#F2F2F2;">Клуб Двоечников - Образовательный портал<div class="pluso" data-background="#ebebeb" data-options="small,square,line,horizontal,nocounter,theme=03" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div></div>
<div style="background:#E8E8E8;"><a href="support.php" style=" text-decoration:none; font-size:18px;">Обратная связь</a></div>
<div style="background:#E8E8E8;"><a href="" style=" text-decoration:none; font-size:18px;">Мировой чат</a></div>
<div style=" background:#D1D1D1;">TwoClub.ru Копирование разрешено только при размещении активной гиперссылки на источник.</div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29175980 = new Ya.Metrika({id:29175980,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
</body>
</html>