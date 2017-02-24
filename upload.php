<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<title>TwoCloud | Работа с файлами</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="jquery.glide.js"></script>
<style>
#tel {
    background-image: url(../images/bg_sky.jpg);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:white;
}
</style>
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $usert=$_SESSION['usertwcl'];
     if(isset($_SESSION['usertwcl']) and isset($_FILES['uploadfile']) and isset($_POST['a']) and $stop!=1){
	$blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
  foreach ($blacklist as $item)
    if(preg_match("/$item\$/i", $_FILES['uploadfile']['name'])) exit;
  $type = $_FILES['uploadfile']['type'];
  $size = $_FILES['uploadfile']['size'];
if ($size > 10000000) {
exit;
echo"<h2 style='color:blue;'>Ваш файл не соответствует требованиям нашего сервиса.</h3>";
}
// Каталог, в который мы будем принимать файл:
$uploaddir = 'downloads/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
echo "<br/><br/><br/><div align='center'>";
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
echo"</div>";
$cloud = $_POST['a'];
$cloud = trim($cloud);
$cloud = stripslashes($cloud);
$cloud = htmlspecialchars($cloud);
$type=$_FILES['uploadfile']['type'];
  $query = "INSERT INTO downloads VALUES('$usert', '$cloud', '$type', '$uploadfile', 0, ' ')";
  $result = $conn->query($query);
	 }
?>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<body>
<div style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div align="center">
<div id="tel">
<br/>
<img src="images/uploadlogo.gif" width="300px" />
<br/>
<h2 style="width:300px;">
TwoCloud -Облако для образовательных целей, храните ваши презентации, доклады, картинки в системе и они будут доступны вам в любом месте в любое время! Ограничение на загрузку файла - 1 Мбайт.
</h2>
<form action='upload.php' method='post' enctype='multipart/form-data'>
<input type="text" maxlength='30' name='a' placeholder="Заголовок"  /><br/><br/>
<input type='file' name='uploadfile'>
<input type='submit' value='Загрузить'></form>
<br/>
<?php
$query = "SELECT * FROM downloads WHERE user='$usert'";
  $result = $conn->query($query);

  $rows = $result->num_rows;
if($rows>5){
$stop=1;
echo"<h2 style='color:blue;'>Вы превысили лимит на загрузку файлов.</h3>";
}
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo"Внешняя ссылка: 'https://twoclub.ru/".$row[3]."'<br/><a href='".$row[3]."'><div  class='cob'>".$row[1]." | ".$row[2]."<form action='upload.php' method='post'><button value='".$row[3]."' name='delete' onclick='javascript: document.forms[...].submit()'>Удалить</button><button value='".$row[3]."'  name='public' onclick='javascript: document.forms[...].submit()'>Опубликовать на главной</button></form></div></a>";
}
if(isset($_POST['delete'])){
$dlink=$_POST['delete'];
$query="DELETE FROM downloads WHERE link='$dlink'";
 $result = $conn->query($query);
unlink($dlink);
echo "<h2>Вы удалили файл.</h2>";
}
if(isset($_SESSION['usertwcl'])){
}else{
echo"<h2 style='color:blue;'>Войдите в систему для использования облака.</h3>";
}
if(isset($_POST['public'])){
$link=$_POST['public'];
$query="UPDATE `downloads` SET `public`=1 WHERE link='$link'";
$result = $conn->query($query);
}
?>
<br/>
</div>
</div>
</div>
<? require_once 'downer.html'?>
</body>
</html>