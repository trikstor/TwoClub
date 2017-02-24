<?session_start()?>
<?php
$best1=$_SESSION['best'];
$id=$_SESSION['id'];
if(isset($_POST['best']) || isset($_POST['tdel'])){
echo"
<h1>Wait Please</h1>
<script>
document.location.replace('//twoclub.ru/".$id.".php');
</script>
";
}
  require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
   if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}
$topicstarter=$_SESSION['ts'];
$type=$_SESSION['tupe'];
  $query  = "SELECT * FROM comments WHERE id_post= '$id' ";
  $result = $conn->query($query);
  if (!$result) die ("<h2>Ответов пока нет, станьте первым</h2>");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if($row[8]=='green'){
$stil="background:#AEBD91; border-radius:5px;";
$tr="<b>(Лучший)</b>";
}else{
if($j & 1){
		$stil="background:#DDD; border-radius:5px;";
			}else
{
$stil="background:#EEEEEE; border-radius:5px;";
}
}
		 $year ='" id="imgp" width="90%"/>';
$formt = '<img src="';
$d = $formt.$row[5].$year;
 $y='<img src="';
	 $i='" style="width:90%;"/>';
	if(isset($row[6])){
	$rowr=$row[6];
$tnm=substr($rowr, 0, 4);
if($tnm=='docs'){
$t="<a href='".$rowr."'>Загруженный файл</a>";
}else{
$t="<a href='".$rowr."'><img src='".$rowr."' /></a>";
}
  }
         if($row[4]=='adm'){
         $pos='<p style="color:red;">Админ</p>';
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
$wet=$row[0];
	if($type!='close' and $topicstarter!=$wet and $topicstarter==$usert){
		 echo"
<form method='post' action='ster.php' id='form1'><input type='hidden' name='nb1' value='".$row[7]."'/><button value='".$row[0]."' name='best' onclick='javascript: document.forms[...].submit()'>ОТМЕТИТЬ КАК ЛУЧШИЙ</button></form>";
	 }
echo $_POST['best'];
	    echo <<<_END
  <pre style="$stil"  >
  <h2 align="center" >$row[1]</h2>
   $tr
  <hr/>
  <div align="left" style='width:95%; word-wrap: break-word;'> $row[2]
  $t
</div>
 <div id="pzkk">
$d
$pos
<b><form action='profile.php' method='post'><button value='$row[0]' name='prf' onclick='javascript: document.forms[...].submit()'>$row[0]</button></form></b>
	 <div/>
  </pre>

_END;
if($row[0]==$usert || $_SESSION['admin']==1){
echo'
<form action="ster.php" method="post">
<input type="hidden" value="'.$row[0].'" name="und"/>
<div style="display:none;">
<input type="hidden" name="tdel" value="'.$row[2].'"/>
</div>
<button onclick="javascript: document.forms[...].submit()">УДАЛИТЬ</button></form>
</form>';
}
}
if(isset($_POST['best'])){
	$best=$_POST['best'];
        $nb1=$_POST['nb1'];
$query="UPDATE comments SET `color`='green'
WHERE `user`='$best' and `id_post`='$nb1'";
  $result = $conn->query($query);
  $query="UPDATE topics SET `tupe`='close'
WHERE `id`='$id'";
  $result = $conn->query($query);
$query  = "SELECT * FROM users WHERE user='$best'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$elize=$row[4];
	$elize1=$row[5];
}
$polonez1=$elize+1;
echo $best;
$polonez2=$elize1+$best1;
$query="UPDATE users SET `balls`='$polonez2'
WHERE `user`='$best'";
  $result = $conn->query($query);
  $query="UPDATE users SET `posts`='$polonez1'
WHERE `user`='$best'";
  $result = $conn->query($query);

  echo 'Вы выбрали лучший ответ';
}
if(isset($_POST['und'])){
$und=$_POST['und'];
$tdel=$_POST['tdel'];
    $query  = "DELETE FROM comments WHERE user='$und' AND txt='$tdel' AND id_post='$id'";
    $result = $conn->query($query);
echo'ответ удалён';
}
?>