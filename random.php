<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Случайная | Клуб Двоечников</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Anonymous+Pro&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<style>
body{
font-family: 'Anonymous Pro';
}
</style>
</head>

<body<?php
$val=rand(1,5);
$img_src="images/0".$val.".gif";
echo '   background="'.$img_src.'"';
?>style="background-size:100%;">
<div style="margin-left:2%;">
<h2>Случайный материал</h2><br/>
<b style="background:white;">
<h3>Из статей</h3>
<?php 
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
 $query  = "SELECT * FROM stat ORDER BY RAND() LIMIT 1  ";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo"<a href='".$row[2].".php'>".$row[6]."</a>";
}
?><br/>
<h3>Из вопросов</h3><br/>
<?php 
 $query  = "SELECT * FROM topics ORDER BY RAND() LIMIT 1  ";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo"<a href='".$row[1].".php'>".$row[8]."</a>";
}
?>
</div>
</b>
</body>
</html>