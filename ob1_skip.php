<?php 
session_start();
$id=$_SESSION['id'];
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $query  = "SELECT * FROM comments WHERE id_post= '$id' ";
  $result = $conn->query($query);
  if (!$result) die ("<h3>Комментариев нет, станьте первым!</h3>");

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
$formt = '<img src="';
$d = $formt.$row[5].$year;
 $y='<img src="';
	 $i='"/>';
if(isset($row[6])){
	$rowr=$row[6];
$tnm=substr($rowr, 0, 4);
if($tnm=='docs'){
$t="<a href='".$rowr."'>Загруженный файл</a>";
}else{
$t="<a href='".$rowr."'><img src='".$rowr."' /></a>";
}
  }
if($_SESSION['admin']!=1){
	 if($row[4]==1){
		 $pos='Главный Куратор';
	 }
	  if($row[4]==2){
		 $pos='Почётный Двоечник';
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
}else{
$pos='<b style="color:red;">Админ</b>';
}
	    echo <<<_END
  <pre style="$stil"  >
  <h2 align="center" id="txt">$row[1]</h2>
  <hr/>
  <div align='left' style='width:95%; word-wrap: break-word;'> $row[2] <br/>
  $t
</div>
 <div id="pzkk">
$d
$pos
<form action="profile.php" method="post">
<button value="$row[0]" name='prf' onclick='javascript: document.forms[...].submit()'>$row[0]</button>
</form>
</div>
_END;
Echo '
  </pre>';
if($row[0]==$usert || $_SESSION['admin']==1){
echo'
<form action="'.$id.'.php" method="post">
<input type="hidden" value="'.$row[0].'" name="und"/>
<button value="'.$row[1].'" name="tdel" onclick="javascript: document.forms[...].submit()">Удалить комментарий</button>
</form>';
}
}
?>