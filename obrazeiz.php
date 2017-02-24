<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php
  require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
   if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}
  $query = "SELECT * FROM topics WHERE id='$id'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
  $title=$row[8];
  $desc=$row[7];
	}
?>
<title><? echo $title ?></title>
<META name="description" lang="ru" content="<? echo $desc ?>">
<META name="keywords" lang="ru" content="Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, учебник, решение, докажите, задача, матеметика">
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
<style>
div.spoiler div.text {
display: none;
}
#tt{
overflow: auto;
}
</style>
    <script>  
        function show()  
        {  
            $.ajax({  
                url: "ster.php",  
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
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; }else{
	require_once 'header1.php';}
?>
<br/>
<?php
   require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
   if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}
if($_SESSION['admin']==1){
echo"<form action='".$id.".php' method='post'><button value='".$id."' name='pf' onclick='javascript: document.forms[...].submit()'>Удалить статью</button></form>";
}
if(isset($_POST['pf'])){
$query="DELETE FROM topics WHERE id='$id'";
 $result = $conn->query($query);
}
  $query = "SELECT * FROM topics WHERE id='$id'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    $qzz=$row[2];
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
 $query="UPDATE topics SET `txt`= '$rt'  WHERE `id`='$id'";
  $result = $conn->query($query);
	  }
 $query  = "SELECT * FROM topics WHERE id = '$id' ";
  $result = $conn->query($query);
  if (!$result) die ("Ответов пока нет, станьте первым");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
        $lrt=$row[14];
	$day=$row[3];
	$month=$row[11];
	$year=$row[12];
        $gtdz=$row[10];
	// даты
	$title=$row[8];
	$desc=$row[7];
	$txt=$row[2];
	$tupe=$row[9];
	$gdz=$row[10];
	$subject=$row[6];
	$user=$row[0];
        $beta=$row[13];
	if(isset($row[4])){
	$rown= $row[4];
	$rowr= unserialize( $rown );
	}
  }
 $query  = "SELECT * FROM gdz WHERE otvet='$gtdz'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    $vdt=$row[0];
}
  $query  = "SELECT * FROM users WHERE user='$user'";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$r1=$row[2];
	$r2=$row[3];
	$i1="<img src='";
	$l3="' id='imgp' />";
	$imgr=$i1.$r2.$l3;
$emeil=$row[7];
  }
if($row[9]!=1){
 if($row[2]==1){
		 $pos='Главный Куратор';
	 }
	  if($row[2]==2){
		 $pos='Почётный Двоечник';
	 }
	 if($row[2]==3){
		 $pos='Мастер';
	 }
	  if($row[2]==4){
		 $pos='Хорошист';
	 }
	 if($row[2]==5){
		 $pos='Новичок';
	 }
}else{
$pos='<b style="color:red;">Админ</b>';
}
if($_POST['mov']==1){
$query  = "SELECT * FROM lux WHERE user= '$usert' AND id='$id'";
 $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows==0){
$query  = "INSERT INTO lux VALUES('$usert', '$id', '$title')";
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
<div class="prp" style="border-radius:5px; display:inline-block; ">
<div align="center" style="width:70%; background:#D1D1D1; border-radius:5px;">
<?php
if($tupe=='open'){
	$tip='открытый вопрос';
}else{
	$tip='закрытый вопрос';
}
print("Тип:".$tip." <br/>Предмет:".$subject."<br/>");
print("{ ".$beta." Баллов за лучший }<br/>");
print("<a href='".$gtdz.".php'><b>".$vdt."</b></a><br/>");
print("<div style='background:white; border-radius:5px; width:70%;'>Дата:".$day." | ".$month." | ".$year."</div><br/>");
print(
"<form action='profile.php' method='post'><button value=".$user." name='prf' onclick='javascript: document.forms[...].submit()'>".$user."</button></form>");
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
echo "<img src='images/online.png' width='50px' /><br/>";
}else{
echo "<img src='images/offline.png' width='50px' /><br/>";
}
print("<br/>".$imgr."<br/>".$pos."");
?>
<br/>
</div>
<hr/>
 <br/>
<div align="left" id="tt">
<SCRIPT SRC="jsMath/jsMath.js"></SCRIPT>
 <?php
 print("<h2>".$title."</h2><hr/>".$txt."<br/>");
if(!empty($rown)){
$tnm=substr($rowr[0], 0, 5);
if($tnm=='image'){
foreach ($rowr as $value) {
echo"<a href='".$value."'><img src='".$value."' /></a>";
}
}else{
echo"<a href='".$rown."'>Загруженный файл</a>";
}
}
 ?>
</div>
<br/>
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
<SCRIPT>
jsMath.Process(document);
</SCRIPT>
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
<br/>
<?php 
  $_SESSION['best']=$beta;
  $_SESSION['id']=$id;
  $_SESSION['tupe']=$tupe;
  $_SESSION['ts']=$user;
  ?>
<div id="content">
</div>
обновите страницу если нет ответов
<div align="center"><a onclick="show()"><img src="images/udapte.gif" width="50px" /></a></div>
<?php
 function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
  if(isset($_SESSION['usertwcl'])){
if(isset($_POST['title']) and isset($_POST['txt'])){
if($_FILES['userfile']['error']==0 && !empty($_FILES['userfile']['tmp_name'])){
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=15120000 and $_FILES['userfile']['size']!=420)){
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
     if ($size[0] < 100000 && $size[1]<300000) 
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
if(($_FILES['userfile']['type'] == 'application/msword' || $_FILES['userfile']['type'] == 'application/pdf'  || $_FILES['userfile']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=11512000)) {
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
  $usert=$_SESSION['usertwcl'];
	$title=get_post($conn, 'title');
        $title=htmlspecialchars($title);
	$txt=get_post($conn, 'txt');
   $txt= strip_tags($txt, '<p><a><br><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
	$ava=$_SESSION['avatar'];
if(isset($_SESSION['admin'])){
$count='adm';
}else{
	$count=$_SESSION['titul'];
}
	$id_post=$id;
	$otvet=0;
	$query  = "INSERT INTO comments VALUES('$usert', '$title', '$txt', '$otvet' ,'$count','$ava','$uploadfile', '$id_post','0')";
  $result = $conn->query($query);
$query  = "INSERT INTO answershare VALUES('$id','$user')";
 $result = $conn->query($query);
 $query  = "SELECT * FROM counter WHERE id='$usert'";
  $result = $conn->query($query);
  if (!$result) die ("?????? ???? ??????.");

  $rows = $result->num_rows;
  if($rows==0){
$message="".$p1.".Вам  было оставлен ответ, twoclub.ru/".$id.".php  ";
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
 $query  = "SELECT * FROM sous WHERE id='$id'";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");

  $rows = $result->num_rows;
    $result->data_seek(1);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<div align='center' style='width:200px; border-radius:5px; border:2px grey solid; padding:2px;'> просмотров ".$row[0]."</div>";
  $query  = "UPDATE sous SET count=count+1 WHERE id='$id'";
  $result = $conn->query($query);
$query  = "SELECT * FROM topics WHERE ids>'$lrt' LIMIT 1";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$t_link=$row[1];
}
	?>
<br/>
<form action="<? echo $id ?>.php" ENCTYPE="multipart/form-data" method="post">
 <div align="center" style="background:#CCC; border-radius:5px;">
 <br/>
        Заголовок:<br/>
<input type="text" name="title"><br/>

<textarea type="text" name="txt"  size="100" rows="20"></textarea><br/>
 Текстовый файл или изображение<br/>
 <input type="file" name="userfile"><br/>

<input type="submit" name="submit" class="button" >

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
$query  = "SELECT `id`, `title`, `desc` FROM topics WHERE pzkk='$subject'";
  $result = $conn->query($query);
$rows = $result->num_rows;
$rrd=rand(0,$rows);
		$query  = "SELECT `id`, `title`, `desc` FROM topics WHERE pzkk='$subject' LIMIT ".$rrd.",3";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<div><b><a href='".$row[0].".php' id='bright'>".$row[1]."|".$row[2]."</a></b></div><hr/><br/>";
  }
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result   = $conn->query($query);
if($_SESSION['usertwcl']==$user){
$query="DELETE FROM answershare WHERE id_post='$id'";
    $result   = $conn->query($query);
}
?>
 </div>
</div>
<br/>
<? require_once 'downer.html'?>
</body>
</html>