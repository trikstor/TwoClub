<br/>
<?
   require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
   if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}
$query  = "SELECT * FROM topics WHERE id='$id'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$l1="<img src='images/";
	$l2=" ' />";
	if(isset($row[4])){
	$rower=$l1.$row[4].$l2;
	}
	if(isset($row[5])){
	$rower2=$l1.$row[5].$l2;
	}
$p1=$row[0];
$p2=$row[3];
$p3=$row[2];
$q1=$row[6];
$p4=$rower;
$p5=$rower2;
$ta=$row[8];
if($p1==$usert){
	$panel=1;
  }
  }
$result->close;
$query  = "SELECT * FROM users WHERE user='$p1'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$r1=$row[2];
	$r2=$row[3];
	$l3="' size='100' />";
	$imgr=$l1.$r2.$l3;
  }
   if($r1==1){
		 $pos='Главный Куратор';
	 }
	  if($r1==2){
		 $pos='Почетный Двоечник';
	 }
	 if($r1==3){
		 $pos='Мастер';
	 }
	  if($r1==4){
		 $pos='Хорошист';
	 }
	 if($r1==5){
		 $pos='Новичок';
	 }
?>
<div class="prp" >
<h1><? echo $ta ?></h1>
<hr/>
<div id="q">

<br/><? echo "дата: ".$p2.""; ?>
<br/>
<? echo "Автор вопроса: <b>".$p1."</b><br/>$pos<br/>".$imgr."" ?>
<? echo "Предмет:".$q1."" ?>
</div>
<div id="tt">

<? echo $p3 ?>
<br/>
<? echo $p4;
   echo $p5;
 ?>
</div>
</div>
<?php 
  $query  = "SELECT * FROM comments WHERE id_post= '$id' ";
  $result = $conn->query($query);
  if (!$result) die ("Ответов пока нет, станьте первым");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if($j & 1){
		$stil="background:#DDD; border-radius:5px;";
			}else
{
$stil="background:#EEEEEE; border-radius:5px;";
}
		 $year ='" id="imgp"/>';
$formt = '<img src="avatars/';
$d = $formt.$row[5].$year;
 $y='<img src="';
	 $i='"/>';
	 if(isset($row[5])){
	 $t=$y.$row[6].$i;
	 }
	 if($row[4]==1){
		 $pos='Главный Куратор';
	 }
	  if($row[4]==2){
		 $pos='Почетный Двоечник';
	 }
	 if($row[4]==3){
		 $pos='Мастер';
	 }
	  if($row[4]==4){
		 $pos='Хорошист';
	 }
	 if($row[4]==5){
		 $pos='Новичок';
	 }
	 if($panel==1){
		 echo"<form method='post' action='".$id."'><button value='".$row[0]."' name='best' onclick='javascript: document.forms[...].submit()'>ОТМЕТИТЬ КАК ЛУЧШИЙ</button></form>";
	 }
	    echo <<<_END
  <pre style="$stil"  >
  <h2 align="center" id="txt">$row[1]</h2>
  <hr/>
  <div id="mat"><b>Текст:</b> $row[2]
  $t
</div>
 <div id="pzkk">
$d
$pos
<b>Автор:</b> $row[0]
	 <div/>
  </pre>

_END;
}
if(isset($_POST['best'])){
	$best=$_POST['best'];
$query  = "SELECT * FROM users WHERE user='$best'";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$polonez1=$row[4]+1;
	$polonez2=$row[5]+1;
}
$query="UPDATE users SET `balls`='$polonez2', `posts`='$polonez1'
WHERE `user`='$best'";
  $result = $conn->query($query);
  $query="UPDATE topics SET `balls`='$polonez2', `posts`='$polonez1'
WHERE `tupe`='close'";
  $result = $conn->query($query);
  echo 'Вы выбрали лучший ответ';
}
?>
<?php
  function fix_string($string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
  }
  if(isset($_SESSION['usertwcl'])){
if(isset($_POST['title']) and isset($_POST['txt'])){
	if($_POST['rd']==1){
$uploaddir = 'images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 501 && $size[1]<1501) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 512Кб";
} 
  }
  $title1=$_POST['title'];
	$txt1=$_POST['txt'];
	$title=fix_string($title1);
	$txt=fix_string($txt1);
	$ava=$_SESSION['avatar'];
	$count=$_SESSION['titul'];
	$id_post=$id;
	$query  = "INSERT INTO comments VALUES('$usert', '$title', '$txt', '$otvet' ,'$count','$ava','$uploadfile', '$id_post')";
  $result = $conn->query($query);

  }
  }
?>
<br/>