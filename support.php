﻿﻿﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Обратная связь | Клуб Двоечников</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" 
	src="js/tiny_mce/jquery.tinymce.js"></script>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
}
input, textarea{
	border:#353535 2px solid;
}
#button{
	width:300px;
	background:#BEBEBE;
}
#button:hover{
	background:#FFF;
}
.pop{
	width:70%;
	border-radius:5px;
	background:grey;
	box-shadow:#999 #666666;
}

</style>
</head>
<body>
<div align="center">
<div><img src="images/logo.png" /></div><br/>
<b>
Обратная связь | Support<br/>
</b>
Все ваши претензии и просьбы просим указывать здесь.
<br/>
<div class="pop" align="center" >
<style>
#submit {
font-family: sans-serif;
color: #ffffff;
font-size: 18px;
padding: 0px;
text-decoration: none;
box-shadow: 0px 1px 3px #666666;
-webkit-box-shadow: 0px 1px 3px #666666;
-moz-box-shadow: 0px 1px 3px #666666;
text-shadow: 1px 1px 3px #666666;
background: -webkit-gradient(linear, 0 0, 0 100%, from(#ce1515), to(#8b0d0d));
background: -moz-linear-gradient(top, #ce1515, #8b0d0d);
}
 
#submit:hover {
 background: -webkit-gradient(linear, 0 0, 0 100%, from(#8b0d0d), to(#ce1515));
 background: -moz-linear-gradient(top, #8b0d0d, #ce1515)
}
#respond input[type=text], textarea {
 -webkit-transition: all 0.30s ease-in-out;
 -moz-transition: all 0.30s ease-in-out;
 -ms-transition: all 0.30s ease-in-out;
 -o-transition: all 0.30s ease-in-out;
 outline: none;
 padding: 3px 0px 3px 3px;
 margin: 5px 1px 3px 0px;
 border: 1px solid #DDDDDD;
}
#respond input[type=text]:focus, textarea:focus {
 box-shadow: 0 0 5px rgba(81, 203, 238, 1);
 margin: 5px 1px 3px 0px;
 border: 1px solid rgba(81, 203, 238, 1);
}
</style>
<meta charset="UTF-8" />
 
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($sub) && isset($body)){
$address = "admin@twoclub.ru";
$mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
function triptwocl($search_slovo){
$search_slovo = trim($search_slovo);
$search_slovo = stripslashes($search_slovo);
$search_slovo = htmlspecialchars($search_slovo);
return $search_slovo;
}
$email=triptwocl($email);
if ($send == 'true')
{echo "Сообщение отправлено успешно.";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполнили все поля!!!";
}
?>
<hr/>
<form name="MyForm" action="support.php" method="post">
<p><input class="input" name="name" type="text" style="width:15%" /> Ваше имя*</p>
<p><input class="input" name="email" type="text" style="width:15%" /> Электронная почта*</p>
<p><input class="input" name="sub" type="text" style="width:15%" /> Тема сообщения</p>
<p>Текст сообщения:<br /><textarea name="body" cols="1" rows="5" style="width:30%" /></textarea></p>
<p><input id="submit" value="Отправить" type="submit" /></p>
</form>
<h3>Или оставляйте ваши сообщения на <i>admin@twoclub.ru</i></h3>
</div>
</body>
</html>