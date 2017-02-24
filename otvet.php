﻿<?
$query  = "SELECT * FROM topics WHERE id=$id";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$l1="<img src='images/";
	$l2=" ' />";
	$rower=$l1.$row[2].$l2;
$p1=$row[0];
$p2=$row[3];
$p3=$row[1];
$p4=$rower;
  }
$result->close;
$query  = "SELECT * FROM users WHERE user=$p1";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$r1=$row[2];
	$r2=$row[3];
	$imgr=$l1.$r2.$l2;
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
<h1>Заголовок</h1>
<hr/>
<div id="q">

<br/><? echo "дата: $p2" ?>
<br/>
<? echo "Автор вопроса: <b>$p1</b><br/>$pos<br/>$imgr" ?>
</div>
<div id="tt">

<? echo $p3 ?>
<br/>
<? echo $p4 ?>
</div>
</div>