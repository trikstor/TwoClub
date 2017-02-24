<?php session_start(); ?>
<!--twoclub.ru software 2016 | all rights reserved-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
div{
	font-family:Arial, Helvetica, sans-serif;
}
.button{
	background:#787878;
	border-radius:5px;
	padding:10px;
	color:#FFF;
		font-size:24px;
}
.button1{
        border:black 2px solid;
	border-radius:5px;
	padding:10px;
	color:black;
		font-size:24px;
}
.button:hover{
	color:#2C0000;
}
.post{
	margin-bottom:20px;
	margin:5px;
	font-size:20px;
	border-bottom:#787878 2px solid;
}
a{
color:black;
}
#nn{
text-decoration:none;
}
.ssl{
	background:#D3D3D3;
	border-radius:3px;
	margin:2px;
	padding:3px;
        font-size:24px;
	border:#606060 2px solid;
        text-decoration:none;
}
.ssl:hover{
	-webkit-transition: background 0.5s ease;
-moz-transition: background 0.5s ease;
transition: background 0.5s ease;
background:#FFF;
}
</style>
<div>
<?php
if(isset($_SESSION['usertwcl'])){
$user=$_SESSION['usertwcl'];
$spl=$user;
}else{
$spl="<a href='insert.html'>Войти в систему</a>";
}
?>
<div align="center" class="button1">
<?php echo $spl; ?>
</div>
<?php
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
if(isset($_SESSION['usertwcl'])){
$user=$_SESSION['usertwcl'];
echo "<div class='button'>Ваши вопросы</div>";
$query="select * from topics where user='$user' ORDER BY ids DESC limit 3";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	if(!empty($row[8])){
if($row[4]!=""){
$rowr = unserialize($row[4]);
if($rowr[0]!=""){
$rower="<br/><img src='https://twoclub.ru/".$rowr[0]."' width='300px'/>";
}
}else{
$rower=" ";
}
$query  = "SELECT * FROM answershare WHERE id_post = '$row[1]'";
  $result2 = $conn->query($query);
  $rows2 = $result2->num_rows;
if($rows2>0){
$tyr="<b style='color:red;'>(новое)</b>";
}else{
$tyr="";
}
$query  = "SELECT 'id_post' FROM comments WHERE id_post = '$row[1]' ";
  $result1 = $conn->query($query);
  $rows1 = $result1->num_rows;
echo "<a id='nn' href='https://twoclub.ru/".$row[1].".php'><div class='post'><b>".$row[8]."</b><b id='ppl'>".$rows1." ответили  </b>".$tyr."<br/>".$row[7]." ".$rower."<br/><strong>".$row[3].".".$row[11].".".$row[12]."</strong></div></a><br/>";	
}	
}
echo "<div class='button'>Ваши статьи</div><br/>";
$query="select * from stat where user='$user' ORDER BY ids DESC limit 3";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	if(!empty($row[10])){
$rowr = unserialize($row[10]);
if($rowr[0]!=""){
$rower="<br/><img src='https://twoclub.ru/".$rowr[0]."' width='300px'/>";
}else{
$rower="";
}
}else{
$rower=" ";
}
echo "<a id='nn' href='https://twoclub.ru/".$row[2].".php'><div class='post'><b>".$row[6]."</b><br/>".$row[5]." ".$rower."<br/><strong>".$row[7].".".$row[8].".".$row[9]."</strong></div></a><br/>";		
}
echo "<div class='button'>Ваши сообщения</div><br/>";
$query  = "SELECT * FROM soob WHERE l1 = '$user' or  l2 = '$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$row[0]=strtolower ($row[0]);
$row[1]=strtolower ($row[1]);
if($row[0]!=$_SESSION['usertwcl']){
$rown=$row[0];
}else{
$rown=$row[1];
}
$query1  = "SELECT * FROM soobsh WHERE become=0 AND name!='$user' AND nomer='$row[2]'";
  $result1 = $conn->query($query1);
  $rows1 = $result1->num_rows;
if($rows1!=0){
$nc="  (".$rows1." новых сообщений)";
}
echo "<form action='https://twoclub.ru/soobsh.php' method='post'><input type='hidden' name='pre' value='".$row[2]."' /><input
class='ssl' type='submit' value='Переписка с ".$rown."".$nc."'/></form>";
}	
}else{
echo "<a href='https://twoclub.ru/registr.php'>Или Зарегистрируйтесь</a>";
}	
?>