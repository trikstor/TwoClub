<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, Профиль пользователя">
<title>Профиль | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
<style>
/* TABS */
.accordion-tabs {
	*zoom: 1;
	width: 100%;
	border: 1px solid #dddddd;
	border-radius: 0.1875em;
	margin-bottom: 1.5em; 
	margin-left:0;
	padding-left:0;
}
    .accordion-tabs:before, 
	.accordion-tabs:after {
		content: " ";
		display: table;
	}
    .accordion-tabs:after {
		clear: both; 
	}
		.accordion-tabs li{
			list-style:none;
		}
			.accordion-tabs li.tab-head-cont:first-child a {
				border-top-left-radius: 0.1875em;
				border-top-right-radius: 0.1875em;
				border-top: 0;
			}
			.accordion-tabs li.tab-head-cont:last-child a {
				border-bottom-left-radius: 0.1875em;
				border-bottom-right-radius: 0.1875em; 
			}
			.accordion-tabs li.tab-head-cont a {
				text-decoration:none;
				border-top: 1px solid #dddddd;
				color: #888888;
				display: block;
				padding: 0.75em 0.809em;
			}
			.accordion-tabs li.tab-head-cont a:hover {
				color: #000000;
			}
			.accordion-tabs li.tab-head-cont a:focus {
				outline: none;
			}
			.accordion-tabs li.tab-head-cont a.is-active {
				background-color: #f7f7f7;
				border-bottom: 0; 
				color:#333333;
			}
		.accordion-tabs li.tab-head-cont section {
			padding: 1.5em 1.618em;
			background: #f7f7f7;
			display: none;
			overflow: hidden;
			width: 100%; 
		}

/* RESPONSIVE */
@media screen and (min-width: 40em) {
	.accordion-tabs {
		border: none;
		position: relative; 
	}
		.accordion-tabs li.tab-head-cont {
			display: inline; 
		}
			.accordion-tabs li.tab-head-cont:last-child a {
				border-bottom-left-radius: 0;
				border-bottom-right-radius: 0;
			} 
			.accordion-tabs li.tab-head-cont a {
				display: inline-block;
				vertical-align: baseline;
				zoom: 1;
				*display: inline;
				*vertical-align: auto;
				border-top: 0;
				border-top-right-radius: 0.1875em;
				border-top-left-radius: 0.1875em; 
			} 
			.accordion-tabs li.tab-head-cont a.is-active {
				background-color: #f7f7f7;
				border: 1px solid #dddddd;
				border-bottom: 1px solid #f7f7f7;
				margin-bottom: -1px; 
			}
			.accordion-tabs li.tab-head-cont section {
				border-bottom-left-radius: 0.1875em;
				border-bottom-right-radius: 0.1875em;
				border: 1px solid #dddddd;
				float: left;
				left: 0;
				padding: 0.75em 0.809em;
			}
				.accordion-tabs li.tab-head-cont section p {
					-webkit-columns: 2;
					-moz-columns: 2;
					columns: 2;
				}
}
.s1{
	border-radius:5px;
	border:3px #1854AD solid;
	padding:1%;
box-shadow: -5px -5px 20px -5px #000000;
display: inline-block;
}
.s2{
	border-top:	3px #1854AD solid;
}
</style>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
function security($search_slovo){
$search_slovo = trim($search_slovo);
$search_slovo = stripslashes($search_slovo);
$search_slovo = htmlspecialchars($search_slovo);
return $search_slovo;
}
if(isset($_POST['prf'])){
$user=$_POST['prf'];
}else{
$user=$_SESSION['usertwcl'];
}
if(isset($_POST['rt'])){
if($_POST['rt']==1){
    $query  = "DELETE FROM counter WHERE id='$user'";
    $result = $conn->query($query);
}else{
 $query  = "INSERT INTO counter VALUES('$user')";
  $result = $conn->query($query);
}
$emc=1;
}
if(isset($_POST['lastpass']) and isset($_POST['pass'])){
$lastpass=$_POST['lastpass'];
$pass=$_POST['pass'];
$pass=security($pass);
$lastpass=security($lastpass);
$query  = "SELECT * FROM users WHERE user = '$user' AND pass ='$lastpass'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows!=0){
$query="UPDATE users SET `pass`='$pass'
WHERE `user`='$user'";
  $result = $conn->query($query);
$emc=1;
}
}
 $query  = "SELECT * FROM users WHERE user = '$user' ";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$titul=$row[2];
$way=$row[3];
$desc=$row[6];
$oput=$row[4];
$adm=$row[9];
if($_SESSION['usertwcl']==$user){
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result   = $conn->query($query);
$stats="Баллы:".$row[5]."";
}else{
if(isset($_SESSION['usertwcl'])){
$query  = "SELECT * FROM soob WHERE l1='$user' OR l2='$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
    $result->data_seek(0);
    $row = $result->fetch_array(MYSQLI_NUM);
if($rows==0){
$stats="<form action='profile.php' method='post'>
<input type='hidden' value='".$user."' name='pre'/><button  onclick='javascript: document.forms[...].submit()' class='ssl' >Начать беседу</button></form>";
}else{
$stats="<form action='soobsh.php' method='post'><input type='hidden' name='pre' value='".$row[2]."' /><button onclick='javascript: document.forms[...].submit()' class='ssl'>Отправить сообщение</button></form>";
}
}else{
echo "<b><a href='autorize.php'>Войдите, чтобы написать этому пользователю.</a></b>";
}
}
}
if(isset($_POST['pre'])and isset($_SESSION['usertwcl'])){
$rand=rand(1000,9999);
$pre=$_POST['pre'];
$use=$_SESSION['usertwcl'];
$query="INSERT INTO soob VALUES ('$pre', '$use', '$rand')";
 $result = $conn->query($query);
echo "Беседа добавлена, смотрите профиль.";
}
if($adm!=1){
 if($titul==1){
		 $titul='Главный Куратор';
	 }
	  if($titul==2){
		 $titul='Почётный Двоечник';
	 }
	 if($titul==3){
		 $titul='Мастер';
	 }
	  if($titul==4){
		 $titul='Хорошист';
	 }
	 if($titul==5){
		 $titul='Новичок';
	 }
}else{
$titul='<b style="color:red;">Админ</b>';
}
include("tabgeo_country_v4.php");
$ip = $_SERVER['REMOTE_ADDR'];
$country_code = tabgeo_country_v4($ip);
$query  = "SELECT * FROM counter WHERE `id`='$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows!=0){
$isl='<label for="rt">Отправлять уведомления на электропочту</label>
<input type="checkbox" value="1" name="rt" id="rt" /><br/>';
}else{
$isl='<label for="rt">Не отправлять уведомления на электропочту</label>
<input type="checkbox" value="2" name="rt" id="rt" /><br/>';
}
?>
<div class="container-tab">

	<ul class="accordion-tabs">
		<li class="tab-head-cont">
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
$rtr="<img src='images/online.png' width='50px' />";
}else{
$rtr="<img src='images/offline.png' width='50px' />";
}
 echo '
			<a href="#" class="is-active">'.$user.'</a>
			<section>
<div class="s1" align="center">
<b>'.$user.'</b><br/>
'.$rtr.'
<div class="s2">
<img src="'.$way.'" width="160px;" style="border-radius:5px;" />
</div>
<div class="s2">
<b>
'.$desc.'
<hr/>
'.$titul.'<br/>
Опыт: '.$oput.'<br/>
Страна: '.$country_code.'<br/>
'.$stats.'
</b>
';
?>
</div>
</div>
<br/>
<br/>
<b><img src='images/star.gif' width='20px' />Избранное:</b><br/>
<?php
if(isset($_POST['epost'])){
$ava1=$_POST['epost'];
$ava1=security($ava1);
$query="UPDATE users SET `epost`='$ava1'
WHERE `user`='$user'";
  $result = $conn->query($query);
$emc=1;
}
if(!empty($_POST['description'])){
$ava2=$_POST['description'];
$ava2=security($ava2);
$query="UPDATE users SET `opisanie`='$ava2'
WHERE `user`='$user'";
  $result = $conn->query($query);
$emc=1;
}
$query  = "SELECT * FROM lux WHERE user = '$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo "<a href='".$row[1].".php'><div class='cob'><b>".$row[2]."</b></a></div>";
}
?>
			</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Вопросы</a>
			<section>
<?php
mysql_connect('localhost', 'u0064_twocl', '4480338955385') or die('error! Нет соединения с сервером mysql!');
mysql_select_db('u0064007_fast') or die('error! Нет соединения с базой данных!');
$result = mysql_query("select * from topics where user='$user' ORDER BY ids DESC limit 30");
while ($row = mysql_fetch_array($result)) {
	if(!empty($row[8])){
if(!empty($row[4])){
$rowr = unserialize($row[4]);
$rower="<br/><img src='".$rowr[0]."' width='300px'/>";
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
echo "<a href='".$row[1].".php'><div class='cob'><b>".$row[8]."</b><b id='ppl'>".$rows1." ответили  </b>".$tyr."<br/>".$row[7]." ".$rower."<br/><strong>".$row[3].".".$row[11].".".$row[12]."</strong></div></a><br/>";	
}	
}
?>
		</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Статьи</a>
			<section>
<?php
$result = mysql_query("select * from stat where user='$user' ORDER BY ids DESC limit 30");
while ($row = mysql_fetch_array($result)) {
	if(!empty($row[10])){
$rowr = unserialize($row[10]);
$rower="<br/><img src='".$rowr[0]."' width='300px'/>";
}else{
$rower=" ";
}
echo "<a href='".$row[2].".php'><div class='cob'><b>".$row[6]."</b><br/>".$row[5]." ".$rower."<br/><strong>".$row[7].".".$row[8].".".$row[9]."</strong></div></a><br/>";		
}

?>
			</section>
		</li>
<li class="tab-head-cont">
<?php
if($_SESSION['usertwcl']==$user){
echo '
			<a href="#">Сообщения</a>
';
}
			echo '<section>';
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
echo "<form action='soobsh.php' method='post'><input type='hidden' name='pre' value='".$row[2]."' /><input
class='ssl' type='submit' value='Переписка с ".$rown."".$nc."'/></form>";
}				
?>
</section>
		</li>

		<li class="tab-head-cont">
<?php
if($_SESSION['usertwcl']==$user){
echo '
			<a href="#">Настройки</a>
			<section>
			<h2>Изменить:</h2>
<form action="profile.php" method="post" ENCTYPE="multipart/form-data">
<label>Описание</label>
<input type="text" name="description" /><br/>
<label>Электропочта</label>
<input type="email" name="epost" /><br/>
<label>Аватар</label>
<input type="file" name="userfile" /><br/>
<hr/>
<label>Пароль</label><br/>
<input type="password" name="lastpass" placeholder="Действующий пароль" /><br/>
<input type="password" name="pass" placeholder="Новый пароль" /><br/>
<hr/>
<label style="color:red;">Заблокировать пользователя</label><br/>
<input style="color:red;" type="text" name="ban" placeholder="Имя пользователя" /><br/>
'.$isl.'
<input type="submit" value="Отправить" class="ssl" />
					';
}
echo "<br/><b>Бан-лист</b><br/>При нажатии на имя пользователя, он будет удален из бан-листа.<br/>";
$query  = "SELECT * FROM banned WHERE user = '$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo "<button name='unban' value='".$row[1]."' onclick='javascript: document.forms[...].submit()' >".$row[1]."</button><br/>";
}
echo "</form></section>";
?>
		</li>
	</ul>
</div>
<?php
if($_FILES['userfile']['size']>0){
$uploaddir = 'images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0) and ($_FILES['userfile']['size']<=11512000)) 
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 1501 && $size[1]<11501) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
     echo "  Файл загружен. Путь к файлу: <a href='https:/twoclub.ru/".$uploadfile."'>ссылка</a>"; 
	     $query="UPDATE users SET avatar='$uploadfile' WHERE user='$user'";
    $result=$conn->query($query);
     } else {
     echo "  Загружаемое изображение превышает допустимые нормы (ширина не более - 1500; высота не более 11500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "  Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "  Размер файла не должен превышать 1512Кб";
} 
if($emc==1){
echo '<h1>Изменения внесены успешно</h1>';
}
}
if(isset($_POST['ban'])){
$ban=security($_POST['ban']);
$query  = "SELECT * FROM users WHERE user = '$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows!=0){
$query="INSERT INTO banned VALUES('$usert', '$ban')";
  $result = $conn->query($query);
}else{
echo "Такого пользователя не существует.";
}
}
if(isset($_POST['unban'])){
$unban=$_POST['unban'];
$query="DELETE FROM `banned` WHERE banned='$unban' and user='$user'";
 $result = $conn->query($query);
echo "Пользователь разбанен.";
}
?>
<script>
	$(document).ready(function () {
		$('.accordion-tabs').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
		$('.accordion-tabs').on('click', 'li > a', function(event) {
			if (!$(this).hasClass('is-active')) {
				event.preventDefault();
				$('.accordion-tabs .is-open').removeClass('is-open').hide();
				$(this).next().toggleClass('is-open').toggle();
				$('.accordion-tabs').find('.is-active').removeClass('is-active');
				$(this).addClass('is-active');
			} else {
				event.preventDefault();
			}
		});
	});
</script>
        <br/>
<? require_once 'downer.html'?>