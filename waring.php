<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Важное | Клуб Двоечников</title>
<style>
body{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
a{
	text-decoration:none;
}
div{
	margin-bottom:1%
}
button{
	background:#8B8B8B;
	border-radius:0px;
}
</style>
﻿</head>

<body>
<div align="center">
<div style="background:#BAD0DC; height:30%;">
  <h2><a href="index.php" style=" color:#000; vertical-align:central;">Главная</a></h2>
 </div>
<div style="background:#E5E5E5;">
♛ Важные разделы
<br/>
<style>.asd{color:#2A3F00; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;}</style>
<a class="asd" href="news.html">Правила сайта</a><br/>
<a class="asd" href="presentation.html">Инструкция</a><br/>
<a class="asd" href="support.php">Помощь</a>
<a class="asd" href="random.php">Случайная статья</a>
<hr/>
♛ Новости
<br/>
20.07.15<b>Добавлена функция случайной статьи</b>
<br/>
25.07.15<b>Добавлена система подбора похожих материалов</b>
<br/>
01.08.15<b>Добавлена кнопка "пожаловаться"</b>
<br/>
03.08.15<b>Проведены выборочные изменения в дизайне</b>
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
  echo "<b><a href='".$row[2]."'.php>".$rowt[6]."</a></b><br/>";
  }
  }
?>
<br/>
<hr/>
♛ Топ Вопросов<br/>
Пока претендентов не найдено :(
<br/>
<hr/>
<b>Определите самое слабое место сайта:</b>
<form action="thankyou.php" method="post">
<button value="q1" name="q1" onclick="javascript: document.forms[...].submit()">Дизайн</button><br/>
<button value="q2" name="q1" onclick="javascript: document.forms[...].submit()">Работа системы</button><br/>
<button value="q3" name="q1" onclick="javascript: document.forms[...].submit()">Логика сайта</button><br/>
</form>
</div>
<div style="background:#E5E5E5;">
<img src="icoRss.png" width="10%"/>
<a href="rss.xml" style=" color:#FF7F00;">Подписывайтесь на наш  RSS поток, будьте в курсе событий.</a>
</div>
</div>
</html>