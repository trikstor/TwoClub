<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META name="description" lang="ru" content="Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<title>Все Вопросы | Клуб Двоечников</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; }else{
	require_once 'header1.php';}
?>
<style>
#aa{
	text-decoration:none;
	color:#FFF;
}
button{
	background:#B8B8B8; 
	margin-left:2%;
border-radius:5px;
}
a{text-decoration:none;
color:#5E5E5E;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
.black {
    background: #000;
    padding: 20px 20px 10px 20px;
}
.buttona {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 10px;
    background-color: #666666;    
    box-shadow: 0 5px 5px #313131, 0 9px 0 #393939, 0px 9px 10px rgba(0,0,0,0.4), inset 0px 2px 9px rgba(255,255,255,0.2), inset 0 -2px 9px rgba(0,0,0,0.2);
    position: relative;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    display: inline-block;
    text-shadow: 0px -1px 0px rgba(0,0,0,0.2);
    margin-bottom: 20px;
}

    
.buttona:hover {
    box-shadow: 0 5px 5px #313131, 0 9px 0 #393939, 0px 9px 10px rgba(0,0,0,0.4), inset 0px 2px 15px rgba(255,255,255,0.4), inset 0 -2px 9px rgba(0,0,0,0.2);
}
.rectangular {
    border-radius: 10px / 35px;
}
</style>
</head>
<body>
<div style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div style="background:#999;">
<br/>
<a href="post.php" class="buttona black rectangular">Задать Вопрос</a>
<div align="center">
  <h2  style="color:#FFF;">Все Вопросы </h2>
</div>
</div>
<div align="center">
<form action="glav.php" method="post">
<button value="Математика" name="predmet" onclick="javascript: document.forms[...].submit()">Математика</button>
<button value="Русский язык" name="predmet" onclick="javascript: document.forms[...].submit()">Русский язык</button>
<button value="Литература" name="predmet" onclick="javascript: document.forms[...].submit()">Литература</button>
<button value="География" name="predmet" onclick="javascript: document.forms[...].submit()">География</button>
<button value="Биология" name="predmet" onclick="javascript: document.forms[...].submit()">Биология</button>
<button value="Информатика" name="predmet" onclick="javascript: document.forms[...].submit()">Информатика</button>
<button value="Физика" name="predmet" onclick="javascript: document.forms[...].submit()">Физика</button>
<button value="Ан яз" name="predmet" onclick="javascript: document.forms[...].submit()">Английский язык</button>
<button value="Обществознание" name="predmet" onclick="javascript: document.forms[...].submit()">Обществознание</button>
<button value="Другое" name="predmet" onclick="javascript: document.forms[...].submit()">Другое</button>
</form>
<hr/>
</div>
</div>
<div align="center">
<div>
<h2>Все вопросы без ответа</h2>
<?php
if(isset($_SESSION['admin'])){
$date_time_array = getdate( time() );
$year=$date_time_array['year'];
$mon=$date_time_array['mon'];
$mday=$date_time_array['mday'];
$mday=$mday-8;
if($mday<0){
	$mday=31+$mday;
	$mon=$mon-1;
}
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);

	$query="UPDATE `topics` SET `tupe`='close' WHERE  dt2='$year' AND dt1='$mon' AND datat='$mday'";
    $result = $conn->query($query);
echo 'adm_account'.$mday.'.'.$mon.'.'.$year.'';
}
function yaandex_link_bar($page, $count, $pages_count, $show_link)
{
// $show_link - это количество отображаемых ссылок;

// нагляднее будет, когда это число будет парное
// Если страница всего одна, то вообще ничего не выводим
if ($pages_count == 1) return false;
$sperator = ' '; // Разделитель ссылок; например, вставить "|" между ссылками
// Для придания ссылкам стиля
$style = 'style="color:white; font-size:20px; background:grey; padding:5px; margin:3px; border-radius:3px; text-decoration: none;"';
$begin = $page - intval($show_link / 2);
unset($show_dots); // На всякий случай :)
// Сам постраничный вывод
// Если количество отображ. ссылок больше кол. страниц
if ($pages_count <= $show_link + 1) $show_dots = 'no';
// Вывод ссылки на первую страницу
if (($begin > 2) && ($pages_count - $show_link > 2)) {
echo '<a '.$style.' href='.$_SERVER['php_self'].'?page=1> |< </a> ';
}
for ($j = 0; $j <= $show_link; $j++) // Основный цикл вывода ссылок
{
$i = $begin + $j; // Номер ссылки
// Если страница рядом с началом, то увеличить цикл для того,
// чтобы количество ссылок было постоянным
if ($i < 1) continue;
// Подобное находится в верхнем цикле
if (!isset($show_dots) && $begin > 1) {
echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i-1).'><b>...</b></a> ';
$show_dots = "no";
}
// Номер ссылки перевалил за возможное количество страниц
if ($i > $pages_count) break;
if ($i == $page) {
echo ' <a '.$style.' ><b>'.$i.'</b></a> ';
} else {
echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$i.'>'.$i.'</a> ';
}
// Если номер ссылки не равен кол. страниц и это не последняя ссылка
if (($i != $pages_count) && ($j != $show_link)) echo $sperator;
// Вывод "..." в конце
if (($j == $show_link) && ($i < $pages_count)) {
echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i+1).'><b>...</b></a> ';
}
}
// Вывод ссылки на последнюю страницу
if ($begin + $show_link + 1 < $pages_count) {
echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$pages_count.'> >| </a>';
}
return true;
} // Конец функции

// Подключение к базе данных
mysql_connect('localhost', 'u0064_twocl', '4480338955385') or die('error! Нет соединения с сервером mysql!');
mysql_select_db('u0064007_fast') or die('error! Нет соединения с базой данных!');

// Подготовка к постраничному выводу
$perpage = 10; // Количество отображаемых данных из БД
if (empty($_GET['page']) || ($_GET['page'] <= 0)) {
$page = 1;
} else {
$page = (int) $_GET['page']; // Считывание текущей страницы
}
// Общее количество информации
$count = mysql_numrows(mysql_query("select * from topics WHERE tupe='open'")) ;
$pages_count = ceil($count / $perpage); // Количество страниц
// Если номер страницы оказался больше количества страниц
if ($page > $pages_count) $page = $pages_count;
$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
// Вызов функции, для вывода ссылок на экран

yaandex_link_bar($page, $count, $pages_count, 10);

// Вывод информации из базы данных
echo '<br/><br/>';
if(!empty($_POST['predmet'])){
$predmet=$_POST['predmet'];
$result = mysql_query("select * from topics WHERE tupe='open' AND pzkk='$predmet' ORDER BY ids DESC limit ".$start_pos.", ".$perpage);
}else{
$result = mysql_query("select * from topics WHERE tupe='open' ORDER BY ids DESC limit ".$start_pos.", ".$perpage);
}
while ($row = mysql_fetch_array($result)) {
if(!empty($row[8])){
if($row[4]!=""){
$rowr = unserialize($row[4]);
if($rowr[0]!=""){
$rower="<br/><img src='".$rowr[0]."' width='300px'/>";
}
}else{
$rower=" ";
}
echo "<a href='".$row[1].".php'><div class='cob'><b>".$row[8]."</b><br/>".$row[7]." ".$rower."<br/><strong>".$row[3].".".$row[11].".".$row[12]."</strong></div></a><br/>";	
}
}
?>
</div>
</div>
<div align="center">
<h2>Все вопросы</h2>
<div>
<?php
mysql_connect('localhost', 'u0064_twocl', '4480338955385') or die('error! Нет соединения с сервером mysql!');
mysql_select_db('u0064007_fast') or die('error! Нет соединения с базой данных!');
if(!empty($_POST['predmet'])){
$predmet=$_POST['predmet'];
$result = mysql_query("select * from topics WHERE pzkk='$predmet' ORDER BY ids DESC limit 10");
}else{
$result = mysql_query("select * from topics ORDER BY ids DESC limit 50");
}
while ($row = mysql_fetch_array($result)) {
if(!empty($row[8])){
if($row[4]!=""){
$rowr = unserialize($row[4]);
if($rowr[0]!=""){
$rower="<br/><img src='".$rowr[0]."' width='300px'/>";
}
}else{
$rower=" ";
}
echo "<a href='".$row[1].".php'><div class='cob'><b>".$row[8]."</b><br/>".$row[7]." ".$rower."<br/><strong>".$row[3].".".$row[11].".".$row[12]."</strong></div></a><br/>";	
}
}
?>
Представлены первые 50 или 10 вопросов.
</div>
</div>
<? require_once 'downer.html'?>
</body>
</html>