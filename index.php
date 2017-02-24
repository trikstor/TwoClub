<? session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META name="description" lang="ru" content="Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<title>Главная | Ответы, ЕГЭ, Статьи, Обучение | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<style type="text/css">
.pv11 {
	color: #804040;
}
#adstat{
padding:1%;
border:grey 2px solid;
border-radius:5px;
}
i{
color:grey;
}
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<div align="center; style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div class="gp">
<br/>
<?php
  require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);

  $query = "SELECT * FROM stat ";
  $result = $conn->query($query);

  $rows1 = $result->num_rows;

  $query = "SELECT * FROM topics ";
  $result = $conn->query($query);

  $rows2 = $result->num_rows;

  $query = "SELECT * FROM users ";
  $result = $conn->query($query);

  $rows3 = $result->num_rows;
echo "<div id='adstat'><b> <i>".$rows3."</i> пользователей | <i>".$rows2."</i> вопросов | <i>".$rows1."</i> статей </b></div>";
?>
<br/>
<div id="sto">
<div class="coco">
<div style="padding:1%; border:dotted 2px white;">
<h2>Подпишись на обновления!</h2><br/>
И получай каждую неделю дайджест самых интересных материалов КД !<br/>
<?php include("tsbsub/show_form.php"); ?>
</div>
</div>
</div>
<br/>
<div class="coco">
<h2>Статьи</h2><b id="napa" onclick="co1.style.display='none'">🚫</b><b id="napa"><a href="glav1.php">↔</a></b><b id="napa"><a href="post1.php">+</a></b>
</div>
<div id="co1">
<?php
  $query = "SELECT * FROM stat ORDER BY ids DESC limit 10";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if(!empty($row[10])){
$rowr = unserialize( $row[10] );
if($rowr[0]!=""){
$rower="<br/><img src='".$rowr[0]."' width='300px'/><br/>";
}else{
$rower="";
}
}else{
$rower=" ";
}
    echo "<a href='https://twoclub.ru/".$row[2] .".php'><div class='ssl'><b>".$row[6]."</b><br/>".$row[5]."<br/>".$rower."<b>".$row[4]." | ".$row[7].".".$row[8].".".$row[9]."</b></div></a>";
    }
?>
</div>
<br/>
<div class="coco">
<h2>Вопросы</h2><b id="napa" onclick="co2.style.display='none'">🚫</b><b id="napa"><a href="glav.php">↔</a></b><b id="napa"><a href="post.php">+</a></b>
</div>
<div id="co2">
<?php
  require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);

  $query = "SELECT * FROM topics WHERE tupe='open' ORDER BY id desc  limit 10";
  $result = $conn->query($query);
  if($rows==0){
  echo "<h2 style='color:blue;'>Вопросов без ответа сейчас нет, создайте новый вопрос!</h2>";
  }
  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<a href='https://twoclub.ru/".$row[1] .".php'><div class='ssl'><b>".$row[8]."</b><br/>".$row[7]."<br/><b>".$row[6]." | ".$row[3].".".$row[11].".".$row[12]."</b></div></a>";
    }
?>
</div>
<br/>
<div class="mblock">
<div id="sto">
<div class="coco">
<h2>Тесты</h2><b id="napa" onclick="co3.style.display='none'">🚫</b><b id="napa"><a href="">↔</a></b><b id="napa"><a href="">+</a></b>
</div>
<div id="co3">
<a href='https://twoclub.ru/tests/test_geo.php'><div class='ssl'><b>Тест по географии</b><br/><img src='images/testicon.gif' /><br/>Проверьте свои знания по теме</div></a>
<a href='https://twoclub.ru/tests/test_math.php'><div class='ssl'><b>Тест ЕГЭ по математике (профильный уровень)</b><br/><img src='images/testicon.gif' /><br/>По мотивам романа 12 стульев</div></a>
<br/>
</div>
</div>
</div>
<div class="coco">
<h2>Важные вопросы</h2><b id="napa"><a href="glav.php">↔</a></b><b id="napa"><a href="post.php">+</a></b>
</div>
Сделайте ваш вопрос важным, назначьте за него более 10 баллов !
<?php
  require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);

  $query = "SELECT * FROM topics WHERE tupe='open' and bal>10 ORDER BY id desc  limit 10";
  $result = $conn->query($query);
  if($rows==0){
  echo "<h2 style='color:blue;'>Вопросов без ответа сейчас нет, создайте новый вопрос!</h2>";
  }
  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<a href='https://twoclub.ru/".$row[1] .".php'><div class='ssl'><b>".$row[8]."</b><br/>".$row[7]."<br/><b>".$row[6]." | ".$row[3].".".$row[11].".".$row[12]."</b></div></a>";
    }
?>
<div class="coco">
<h2>Облако☁</h2>
</div>
Сделайте ваши файлы в Облаке публичными, чтобы они появились здесь !
<?php
$query = "SELECT * FROM downloads WHERE public=1 ORDER BY id desc  limit 10";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo "<a href='https://twoclub.ru/".$row[3] ."'><div class='ssl'><b>".$row[1]."</b><br/>".$row[2]."<br/><b>Предложил ".$row[0]."</b></div></a>";
}
?>
<br/>
<div class="coco">
<h2>Другое</h2>
</div>
<style>
.block{
margin:30px;
display:inline;
}
.block:hover{
box-shadow: 0px 0px 20px 5px #000000;
}
</style>
<div class="mblock">
<div class="block">
<a href="https://twoclub.ru/formuls.php"><img id="slash" src="https://twoclub.ru/images/u_254.jpg" width="200px"/></a>
</div>
<div class="block">
<a href="https://twoclub.ru/registr.php"><img id="slash" src="https://twoclub.ru/images/u_255.jpg" width="200px"/></a>
</div>
<div class="block">
<a href="https://twoclub.ru/post1.php"><img id="slash" src="https://twoclub.ru/images/u_257.jpg" width="200px"/></a>
</div>
<div class="block">
<a href="https://twoclub.ru/calcs.php"><img id="slash" src="https://twoclub.ru/images/u_253.jpg" width="200px"/></a>
</div>
<div class="block">
<a href="https://twoclub.ru/post.php"><img id="slash" src="https://twoclub.ru/images/u_256.jpg" width="200px"/></a>
</div>
<div class="block">
<a href="http://journal.twoclub.ru/"><img id="slash" src="https://twoclub.ru/images/u_258.jpg" width="200px"/></a>
</div>
</div>
<br/>
</div>
<? require_once 'downer.html'?>
</body>
</html>