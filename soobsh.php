<? session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Переписка</title>
<script type="text/javascript" src="js/ajaxreader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>  
        function show()  
        {  
            $.ajax({  
                url: "//twoclub.ru/strit.php",  
                cache: false,  
                success: function(html){  
                    $("#chat-area").html(html);  
                }  
            });  
        }  
      
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        });  
    </script>  
<script type="text/javascript">
function updateChat(){
	
}
function SendForm() {
	//отправка файла на сервер
	$$f({
		formid:'test_form',//id формы
		url:'//twoclub.ru/comment2.php',//адрес на серверный скрипт, такой же как и в форме
		onstart:function () {//действие при начале отправки
			$$('result','начинаю отправку');//в элемент с id="result" выводим результат
		},
		onsend:function () {//действие по окончании отправки
			$$('result',$$('result').innerHTML+'<br />комментарий успешно отправлен');//в элемент с id="result" выводим результат
		}
	});
document.getElementById('test_form').submit();
$('#test_form').find('input[type=text], textarea').val('');
}
</script>
<style>
body{
        font-size:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
.searchfield{
width:90%;
border-radius:3px;
}
.searchform {
        width:80%;
	background:#D1D1D1;
	opacity:0.7;
	border-radius:3px;
	box-shadow:#747474 1px 1px 1px 0px;
}
.searchform input {
	font: normal 12px/100% Arial, Helvetica, sans-serif;
}

.searchform .searchbutton {
	color: #fff;
	border: solid 1px #494949;
	font-size: 21px;
	height: 10%;
	width: 40%;
        padding:1%;
        *display: inline;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	background: #5f5f5f;
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
<body background="system/vc.gif">
<div  align="center">
<a href="http://twoclub.ru/index.php" class="button"/>Вернуться на главную</a><br/><br/><br/>
<div class="searchform" align="center">
<form id="test_form" action="comment2.php" method="post">
<input type="hidden" value="<? echo $rr ?>" name="name"/><br/>
<textarea class="searchfield" name="comment" placeholder="Введите сообщение"></textarea>
</form>
<br/>
<div class="searchbutton" onclick="SendForm();" />Отправить</div>
<br/>
</div>
<div id="result">Введите текст</div><br /><br />
<hr/>
<?php
$wet=$_POST['pre'];
$_SESSION['pre']=$wet;
$user=$_SESSION['usertwcl'];
//if($_SESSION['nepra']=='none'
//$_SESSION['nepra']=$user;
//if($_SESSION['nepra']!=$user and $_SESSION['nepra']!='none'){
//$_SESSION['nepra']='none';
//}
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query="UPDATE soobsh SET become=1 WHERE name != '$user' AND nomer='$wet' AND become=0";
  $result = $conn->query($query);
?>
<div id="chat-area">
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