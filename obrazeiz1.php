<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
 <?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $query  = "SELECT * FROM stat WHERE id='$id'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$di=$row[5];
	$ta=$row[6];
        $ma=$row[4];
  }
  ?>
<META NAME="keywords" CONTENT="Теория, ГДЗ, Школа, ЕГЭ, Математика, язык, Английский, Русский, Клуб Двоечников">
<META NAME="description" CONTENT="<? echo $ma ?>,<? echo $di ?>">
<title><? echo $ta ?></title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste"
    ],
language_url : "js/tinymce/langs/ru.js",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>  
        function show()  
        {  
            $.ajax({  
                url: "ob1_skip.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }   
window.onload = show;
    </script> 
        <script type="text/javascript">
            function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     "alarm.php", 
                    type:     "POST", 
                    dataType: "html", 
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                    document.getElementById(result_id).innerHTML = "Ваш запрос отправлен";
                },
                error: function(response) { 
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
 
   </script>
<script type="text/javascript">
            function AjaxFormRequest(res,form1,url) {
                jQuery.ajax({
                    url:     "<? echo $id ?>.php", 
                    type:     "POST", 
                    dataType: "html", 
                    data: jQuery("#"+form1).serialize(), 
                    success: function(response) { 
                    document.getElementById(res).innerHTML = "Ваш запрос отправлен";
                },
                error: function(response) { 
                document.getElementById(res).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
 
   </script>
<style>
#tt{
overflow: auto;
}
div.spoiler div.text {
display: none;
}
#tp {
color:red; 
background:white; 
border:white 1px sold;
}
pre{
overflow: auto;
}
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; }else{
	require_once 'header1.php';}
?>
 <br/>
<div align='center'>
<?
if(isset($_POST['hig1'])){
$tel=$_POST['hig1'];
$txt1=$_POST['txt1'];
$txt1=strip_tags($txt1, '<p><br><a><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
$usr=$_POST['usr'];
$telp=$tel."<hr/><form action='profile.php' method='post'><button value=".$usr." name='prf' onclick='javascript: document.forms[...].submit()'>".$usr."</button></form><br/>".$txt1;
$db = mysql_connect ("localhost","u0064_twocl","4480338955385") or die (mysql_error());
mysql_select_db ("u0064007_fast",$db) or die (mysql_error());
mysql_query("UPDATE `comments` SET`txt`='$telp' WHERE `txt`='$tel'");
echo"Вы ответили на комментарий";
}
   require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
   if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}
if($_SESSION['admin']==1){
echo"<form action='".$id.".php' method='post'><button value='".$id."' name='pf' onclick='javascript: document.forms[...].submit()'>Удалить статью</button></form>";
}
if(isset($_POST['pf'])){
$query="DELETE FROM stat WHERE id='$id'";
 $result = $conn->query($query);
$query="DELETE FROM top WHERE id='$id'";
 $result = $conn->query($query);
}
   $query = "SELECT * FROM stat WHERE id='$id'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    $qzz=$row[1];
	if($row[0]==$usert){
		$sec=1;
	}
	  }
 if($sec==1){
print '<b>Внести правки</b>';
  print ' <form method="post" action="'.$id.'.php">
  <textarea name="rt" rows="10" cols="45" >'. $qzz .'</textarea> 
<input type="submit"/> 
  </form><br/>';
}
$rt=$_POST['rt'];
  $rt= strip_tags($rt, '<p><a><br><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
if($sec==1 and isset($_POST['rt'])){
 $query="UPDATE stat SET `txt`= '$rt'  WHERE `id`='$id'";
  $result = $conn->query($query);
	  }
$query  = "SELECT * FROM stat WHERE id='$id'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$l1="<img src='images/";
	$l2=" ' />";
$i1="<img src=' ";
	if(isset($row[10])){
	$rowr=$row[10];
	$rowr = unserialize( $rowr );
	}
$lrt=$row[12];
$p1=$row[0];
$p2=$row[7];
$p3=$row[1];
$q1=$row[4];
$q101=$row[4];
$ta=$row[6];
$ro=$row[9];
$di=$row[7];
$rrr=$row[8];
$rrs=$row[9];
$cl=$row[3];
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
	$l3="' id='imgp' />";
	$imgr=$i1.$r2.$l3;
$emeil=$row[7];
  }
if($row[9]!=1){
   if($r1==1){
		 $pos='Главный Куратор';
	 }
	  if($r1==2){
		 $pos='Почётный Двоечник';
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
}else{
$pos='<b style="color:red;">Админ</b>';
}
?>
<div class="prp" >
<?
   require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);

$query = "SELECT * FROM top WHERE id='$id'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$user=$row[0];
	$rrp=$row[1];
$rrd=$row[2];
$pcd=$row[4];
  }
$tricstor=$usert;
  $query = "SELECT * FROM toper WHERE id='$id' and user='$usert'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if(isset($row[0])){
$fill=1;
}
}
if($fill==1){
echo 'Вы уже оценили эту статью';
}
if(isset($_POST['move']) and $fill!=1 and isset($_SESSION['usertwcl'])){
 $query="UPDATE top SET `bi`=bi+1 WHERE `id`='$id'";
  $result = $conn->query($query);	
$query  = "INSERT INTO toper VALUES('$usert', '$id')";
  $result = $conn->query($query);
echo"Ваш голос учтён";
}
if($rrp>10){
$pdd=10;
$ds=$rrp%$pdd;
 $query="UPDATE top SET `bl2`='$ds'  WHERE `id`='$id'";
  $result = $conn->query($query);
$count=$ds-$rrd;
if($count!=0){
 $query="UPDATE users SET `balls`=balls+1 WHERE `user`='$p1'";
  $result = $conn->query($query);
}
if($pcd==0){
$query="UPDATE users SET `posts`=posts+1 WHERE `user`='$p1'";
  $result = $conn->query($query);
  $query="UPDATE top SET `pcd`='1'  WHERE `id`='$id'";
  $result = $conn->query($query);
}
}
if($_POST['mov']==1){
$query  = "SELECT * FROM lux WHERE user= '$usert' AND id='$id'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows==0){
$query  = "INSERT INTO lux VALUES('$usert', '$id', '$ta')";
  $result = $conn->query($query);
}else{
echo "Уже в избранном.";
}
}
if($_POST['mov1']==1){
$query="DELETE  FROM lux WHERE id='$id'";
 $result = $conn->query($query);
}
   ?> 
<style>
#enter1{
	width:70px;
	background:#EAEAEA;
	padding:5px;
        font-size:20px;
}
#button{
	background:#FFF;
        width:100%;
}
</style>
<div align="center">
<div id="exit">
</div>
<div id="enter1" align="center">
<b style="color:green;"><? echo $rrp ?></b>
<br/>
<div id="res">
</div>
<form action="" method="post" id="form1">
<input type="hidden" value="1" name="move" />
<div onclick="AjaxFormRequest('res', 'form1', 'form.php')" id="button">+1</div>
</form>
</div>
</div>
<?php
if(isset($_SESSION['usertwcl'])){
$query  = "SELECT * FROM lux WHERE user= '$usert' AND id='$id'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows>0){
echo '<br/><form action="'.$id.'.php" method="post" id="form2"><input type="hidden" value="1" name="mov1" /><div><img src="images/star.gif" width="20px" /><button onclick="javascript: document.forms[...].submit()"><b>Удалить из избранного</b></button></div></form><br/>';
}else{
echo '<br/><form action="'.$id.'.php" method="post" id="form2"><input type="hidden" value="1" name="mov" /><div><img src="images/star.gif" width="20px" /><button onclick="javascript: document.forms[...].submit()"><b>Добавить в избранное</b></button></div></form><br/>';
}
}
?>
<h1><? echo $ta ?></h1>
<hr/>
<div id="q">
<div style='background:#eeeeee; border-radius:5px; display:inline-block;  padding-left:5%; padding-right:5%;'>
<br/><div style='background:white; border-radius:5px; width:70%;'><? echo "Дата: ".$p2." | ".$rrr." | ".$rrs.""; ?></div>
<br/>
<?php 
$query  = "SELECT * FROM userbility WHERE user = '$user' AND lastactive > NOW() - interval 5 minute";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$rtr=$row[0];
}
if(!empty($rtr)){
$rtr="<img src='images/online.png' width='50px' /><br/>";
}else{
$rtr="<img src='images/offline.png' width='50px' /><br/>";
}
echo "<form action='profile.php' method='post'><button value=".$p1." name='prf' onclick='javascript: document.forms[...].submit()'>".$p1."</button></form>
".$rtr."
<br/>$pos<br/>".$imgr."" ?><br/>
<? echo "Предмет:".$q1."<br/>Класс: ".$cl."" ?>
</div>
</div>
<hr/>
<div align="left" id="tt">

<? echo $p3 ?>
<br/>
<?php
$tnm=substr($rowr[0], 0, 4);
if($tnm=='docs'){
echo"<a href='".$value."'>Загруженный файл</a>";
}else{
foreach ($rowr as $value) {
echo"<a href='".$value."'><img src='".$value."' /></a>";
}
}
 ?>
<div>
<script type="text/javascript">
$(document).ready(function(){
$("div.spoiler div.name span").toggle(function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").show();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " -15px 0");
},function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").hide();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " 0 -15px");
});
});
</script>
<div align="center" class= "spoiler">
<div class= "name" ><span style="color:red;">Пожаловаться</span></div>
<div class= "text">
  <div id="result_div_id">
        </div>
        <br/>
        <form method="post" action="" id="form_id">
 Назовите фрагмент не соответствующий с правилами 
  <input type="text" name="nm" >
  <input type="hidden" name="id" value="<? echo $id ?>">
            <input type="button" value="пожаловаться" onclick="AjaxFormRequest('result_div_id', 'form_id', 'form.php')" id="tp"/>
        </form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
$_SESSION['id']=$id;
?>
обновите страницу если нет ответов
<div align="center"><a onclick="show()"><img src="images/udapte.gif" width="50px" /></a></div>
<div id="content">
</div>
<br/>
 <?php
 $query  = "SELECT * FROM sous WHERE id='$id'";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");

  $rows = $result->num_rows;
    $result->data_seek(1);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<div align='center' style='width:200px; border-radius:5px; border:2px grey solid; padding:2px;'> просмотров ".$row[0]."</div>";
  $query  = "UPDATE sous SET count=count+1 WHERE id='$id'";
  $result = $conn->query($query);
	?>
<br/>
<?php
if(isset($_POST['und'])){
$und=$_POST['und'];
$tdel=$_POST['tdel'];
    $query  = "DELETE FROM comments WHERE user='$und' AND title='$tdel'";
    $result = $conn->query($query);
echo'Комментарий удалён';
}
 function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
  if(isset($_SESSION['usertwcl'])){
if(isset($_POST['title']) and isset($_POST['txt'])){
if($_FILES['userfile']['error']==0 && !empty($_FILES['userfile']['tmp_name'])){
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=1512000 and $_FILES['userfile']['size']!=420)){
$security1=1;
$uploaddir = 'images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if($security1==1)
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 1000 && $size[1]<3000) 
     { 
     // если размер изображения не более 1000 пикселей по ширине и не более 3000 по  высоте 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 1000; высота не более 3000)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 1512Кб";
}
}else{
if(($_FILES['userfile']['type'] == 'application/msword' || $_FILES['userfile']['type'] == 'application/pdf' || $_FILES['userfile']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=11512000)) {
$security1=1;
$uploaddir = 'docs/';
$namefile=$_FILES['userfile']['name'];
// это папка, в которую будет загружаться картинка
$apend=rand(100,1000).$namefile;
// это имя, которое будет присвоено изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if($security1==1)
{ 
  move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
}
}
}
}
 function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
  $usert=$_SESSION['usertwcl'];
	$title=get_post($conn, 'title');
$title= mysql_fix_string($conn, $title);
   $title=htmlspecialchars($title);
	$txt=get_post($conn, 'txt');
$txt= strip_tags($txt, '<p><a><br><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
   $title=htmlspecialchars($title);
	$ava=$_SESSION['avatar'];
	$count=$_SESSION['titul'];
	$id_post=$id;
	$otvet=0;
	$query  = "INSERT INTO comments VALUES('$usert', '$title', '$txt', '$otvet' ,'$count','$ava','$uploadfile', '$id_post', '0')";
  $result = $conn->query($query);
echo "<h2>Комментарий добавлен</h2>";
 $query  = "SELECT * FROM counter WHERE id='$usert'";
  $result = $conn->query($query);
  if (!$result) die ("?????? ???? ??????.");

  $rows = $result->num_rows;
  if($rows==0){
$message="".$p1.".Вам  было оставлен комментарий, twoclub.ru/".$id.".php  ";
# /* Для отправки HTML-почты вы можете установить шапку Content-type. */ 
 $headers= "MIME-Version: 1.0\r\n"; 
 $headers .= "Content-type: text/html; charset=utf-8 \r\n"; 
# 
# /* дополнительные шапки */ 

$headers .= "From:twoclub.ru <info@twoclub.ru>\r\n"; 
mail($emeil, 'Оповещение | Клуб Двоечников', $message, $headers);
}
  }
  }
?>
<br/>
<?php
if(empty($_SESSION['usertwcl'])){
echo"<h3>Вы должны войти в систему чтобы написать комментарий</h3><br/>";
}
$query  = "SELECT * FROM stat WHERE ids>'$lrt' LIMIT 1";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$t_link=$row[2];
}
?>
<form action="" ENCTYPE="multipart/form-data" method="post" >
 <div style="background:#CCC; border-radius:5px;">
 <br/>
    Заголовок:<br/>
     <input type="text" name="title"><br/>
<textarea type="text" name="txt"  size="100" rows="20"></textarea><br/>
Текстовый файл или изображение<br/>
   <input type="file" name="userfile"><br/>
<input type="submit" value="Отправить" class="button"  />
</form>
</div>
<br/>
<div class="admit">
<?php
if(!empty($t_link)){
echo '<a href="'.$t_link.'.php"><b>СЛЕДУЮЩАЯ →</b></a>';
}
?>
</div>
<br/>
<div class="zx-pz">
  <div align="center">
    <h2>Может пригодиться</h2>
  </div><br/>
  <div class="column">
<?php
$query  = "SELECT `id`, `title`, `desc` FROM stat WHERE class='$cl' AND predmet='$q101'   ";
  $result = $conn->query($query);
$rows = $result->num_rows;
$rrd=rand(0,$rows);
		$query  = "SELECT `id`, `title`, `desc` FROM stat WHERE class='$cl' AND predmet='$q101'   LIMIT ".$rrd.",3";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<div><b><a href='".$row[0].".php' id='bright'>".$row[1]."|".$row[2]."</a></b><hr/></div>";
  }
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result = $conn->query($query);
?>
 </div>
</div>
<br/>
<? require_once 'downer.html'?>
</body>
</html>