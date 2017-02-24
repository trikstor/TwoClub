<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Поиск | Клуб Двоечников</title>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		<!--[if IE]>
  		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<style>
body{
font-family: 'PT Sans Narrow', sans-serif;
}
</style>
</head>
<body>
<div align="center">
<img src="images/search.png" width="137" height="130"/>
<h1>Клуб Двоечников.Поиск</h1><br/>
<br/>
<form action="usersearch.php" method="post" >
<input class="input__field input__field--manami" type="text" id="input-32" name="re" />
					<label class="input__label input__label--manami" for="input-32">
					  <span class="input__label-content input__label-content--manami">Поиск</span>
 </label>
  </form>
				</span>
<div class='mal'>
<a href="#st" style="color:#8D8D8D;">Перейти к поиску по статьям</a><br/>
<h2>Поиск по пользователям </h2>
<div style="color:#000; font-size:2em;">
<?php
$db = mysql_connect ("localhost","u0064_twocl","4480338955385") or die (mysql_error());
mysql_select_db ("u0064007_fast",$db) or die (mysql_error());
$search_slovo = $_POST['re'];
$search_slovo = trim($search_slovo);
$search_slovo = stripslashes($search_slovo);
$search_slovo = htmlspecialchars($search_slovo);
if(isset($search_slovo)){
if(empty($search_slovo)) {exit ("Вы не ввели данные");}}

echo " Вы искали: $search_slovo <br/>";

if ((isset($search_slovo))) {
$search_slovo = mb_strtolower($search_slovo);
$search_name= mysql_query("SELECT `user` FROM `users` WHERE upper(`user`) LIKE upper('%".$search_slovo."%')",$db);
if (mysql_num_rows($search_name) != 0) {
while ($row = mysql_fetch_assoc($search_name)) {
echo " 
<form method='post' action='profile.php'>
<button value='".$row[user]."' name='prf' onclick='javascript: document.forms[...].submit()' class='ssl' >".$row[user]."</button>
</form>
";
}
} else {
echo " Ничего не найдено<br/>";
}
} else {
echo "Введен пустой запрос<br/>";
}
?>
</div>
</div>
</body>
</html>