<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
		span {cursor:pointer; }
		.number{
			margin:100px 30%;
		}
		.minus, .plus{
			width:10px;
			height:10px;
			background:#f2f2f2;
			border-radius:4px;
			padding:3px 5px 3px 5px;
			border:1px solid #ddd;
		}
		.number input{
			height:24px;
			border:1px solid #ddd;
			border-radius:4px;
			padding:0 2px;
		}
	</style>
	<script type="text/javascript" >
		$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
	</script>
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
<title>Добавить вопрос | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<style>
body {
    background-image: url(../images/bg1.png);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:#464646;
}
@media only screen and (max-width: 767px) {
    body {
        background-image: url(../images/bg2.png);
    }
}
select 
{
border-radius:5px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&amp;0.65+0,0+100;Neutral+Density */
background: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(135deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

        
        @extend %inline-block;
    @include gradient(#fff, #ececec, $toogler_img_url);
        @include experimental('appearance', none, webkit, moz, not o, not ms, not khtml);

        position: relative;
      overflow: hidden;
      white-space: nowrap;
        margin: 0;
        outline: none;
        background-repeat: no-repeat;
        background-position: 100% 50%;
    padding: 6px;
    padding-right: 24px;

        &::-ms-expand { display: none; } /*ie fix*/

        /*firefox fix*/
        text-indent: 0.01px;
    text-overflow: '';
    /*end of firefox fix*/
  
    /*custom*/
    @include transition(border 0.2s ease-in);
    @include text-shadow(0 1px 0 #fff);
    @include border-radius(2px);
    @include box-shadow(inset 0 1px 2px rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.4));
    cursor: pointer;
    font: normal 14px/22px Arial,sans-serif;
    border: 1px solid #ccc;
    &:hover { border-color: darken(#ccc, 20%); }
        &:focus { border-color: #0061a7; }
    /*end of custom*/
}
#ppz input {
border-radius:5px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&amp;0.65+0,0+100;Neutral+Density */
background: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(135deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#abb{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:solid 3px #bfcacf; 
 -webkit-border-radius:10px 4px 10px 4px; 	 				 border-radius: 10px 4px 10px 4px; 					-moz-border-radius-topleft:10px; 					-moz-border-radius-topright:4px; 					-moz-border-radius-bottomleft:4px; 					-moz-border-radius-bottomright:10px;  
 font:24px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#f4fcfc; 
 background-color:#7e8e94; 
 background-image: -moz-linear-gradient(top, #7e8e94 0%, #c8d1d4 100%); 
 background-image: -webkit-linear-gradient(top, #7e8e94 0%, #c8d1d4 100%); 
 background-image: -o-linear-gradient(top, #7e8e94 0%, #c8d1d4 100%); 
 background-image: -ms-linear-gradient(top, #7e8e94 0% ,#c8d1d4 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c8d1d4', endColorstr='#c8d1d4',GradientType=0 ); 
 background-image: linear-gradient(top, #7e8e94 0% ,#c8d1d4 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
#ppz{
padding:1%;
margin-bottom:1%;
display:inline-block;
background:#E8E8E8;
border-radius:5px;
}
#prt{
padding:1%;
margin-bottom:1%;
display:inline-block;
background:#E8E8E8;
border-radius:5px;
}
body {
font-family: 'PT Sans Narrow', sans-serif;
    background-image: url(../images/bg1.png);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:#464646;
}
@media only screen and (max-width: 767px) {
    body {
        background-image: url(../images/bg2.png);
    }
}
#sve{
color:white;
font-size:20px;
}
#sde{
color:white;
text-decoration:none;	
margin:10px;
}
#sde:hover{
	background:#1B1B1B;	
}
.ad{
	display:inline-block;
	font-size:24px;
	background:#A7A7A7;
	opacity:0.7;
}
</style>
<script>
function changeStyleDiv(){
              document.getElementById('prt').style.width = '100%';
              document.getElementById('prt').style.height = '150%';
           }
</script>
</head>
<body>
<div align="center" >
<div class="ad">
Добавить: <a id="sde" href="">Вопрос</a> <a id="sde" href="">Статью</a> <a id="sde" href="">Решебник</a> <a id="sde" href="">Тест</a>
</div>
<br/>
<h1>Добавить вопрос</h1>
<div class="wrapper">
<form action="post.php" method="post" ENCTYPE="multipart/form-data">
<div class="number">
<b>Назначьте баллы за лучший ответ<br/></b>
	<span class="minus">-</span>
	<input type="text" name="bal" value="1" size="5" />
	<span class="plus">+</span>
</div>
<p>
<div id="ppz">
<label>Выберите предмет</label>
<select name="ppz">
<option value="Математика">Математика</option>
<option value="Русский язык">Рус яз</option>
<option value="Литература">Лит ра</option>
<option value="География">География</option>
<option value="Биология">Биология</option>
<option value="Информатика">Информатика</option>
<option value="Физика">Физика</option>
<option value="Англ яз">Ан яз</option>
<option value="Обществознание">Обществознание</option>
<option value="Экономика">Экономика</option>
<option value="Другое">Другое</option>
</select>
</p>
</div>
<br/>
<div id="ppz">
<p>
<label>Выберите решебник</label>
    <select name="gdz">
    <?
	require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
	  echo "<option value='nmn'>Нет решебника</option>";
	$query  = "SELECT * FROM gdz ";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");
   $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
  echo"<option value='".$row[3]."'>".$row[0]."</option>";
  }
  ?>
</select>
если вы не нашли решебника в списке, то создайте его<br/>
</p>
</div>
<br/>
<div id="ppz">
<p>
<label>Заголовок</label>
<input type="text" name="title" />
</p>
</div>
<br/>
<div id="prt">
<label>Текст</label>
<textarea name="tp" rows="15" cols="80"> </textarea>
<a href="#" onclick='changeStyleDiv()'>Развернуть на весь экрн</a>
</p>
<p>
<label>Текстовый файл или несколько изображений</label>
<input type="file" name="userfile[]" multiple/>
</p>
</div>
<br/>
<p>
<label>&nbsp;</label>
<div id="elm">
</div>
<script>
function second_passed() {
var elm = document.getElementById('elm');
elm.innerHTML = "<input type='submit' value='Отправить' id='abb' /><br/>";
}
setTimeout(second_passed, 3000)
</script>
 <p style="color:#FDFDFD;">После нажатия на кнопку у вас списывается баллы, намеренное указание недостоверной информации карается санкциями, обозначенными в правилах.</p>
</p>
</form>
</div>
</div>
</div>
<div id='swe'>
<?
  function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $kyky=$_SESSION['usertwcl'];
if(isset($_POST['tp'])){
$query  = "SELECT * FROM users WHERE user='$kyky'";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка базы данных.");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$around=$row[5];
  }
$pzk=0;
if($around<1){
$pzk=1;
echo'<br/><h2>На вашем счету недостаточно баллов, ответьте на чей - нибудь вопрос.</h2><br/>';
}else{
$ball=$_POST['bal'];
$assd=$around-$ball;
if($assd<0){
echo'<br/><h2>На вашем счету недостаточно баллов, ответьте на чей - нибудь вопрос.</h2><br/>';
}else{
$query ="UPDATE users SET balls='$assd' WHERE user='$kyky'";
  $result = $conn->query($query);
}
}
}
 function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
if(isset($_POST['tp']) and isset($_SESSION['usertwcl']) and isset($_POST['title']) and $around>0){
	$titler=get_post($conn, 'title');
$titler=mysql_fix_string($conn, $titler);
	$txt=get_post($conn, 'tp');
$txt= strip_tags($txt, '<p><a><br><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
	$username=$_SESSION['usertwcl'];
	$warr=rand(1000, 9000);
        $q='q';
$ball=$_POST['bal'];
	$warriable=$q.$warr;
$date_time_array = getdate( time() );
$dt=$date_time_array['mday'];
$dt1=$date_time_array['mon'];
$dt2=$date_time_array['year'];
$pzkk=$_POST['ppz'];
$taxt= strip_tags ($txt);
$desc=mb_substr($taxt,0,20,'UTF-8');
$titles=get_post($conn, 'title');
$tupe='open';
if($_POST['gdz']=='nmn'){
	echo "<script>document.location.href = 'ery.php'</script>"; 
}else{
	if($pzk==0){
$gdz=$_POST['gdz'];
if($_FILES['userfile']['error'][0]==0 && !empty($_FILES['userfile']['tmp_name'][0])){
if(($_FILES['userfile']['type'][0] == 'image/gif' || $_FILES['userfile']['type'][0] == 'image/jpeg' || $_FILES['userfile']['type'][0] == 'image/png') && ($_FILES['userfile']['size'][0] != 0 and $_FILES['userfile']['size'][0]<=111512000)){
  foreach ($_FILES['userfile']['name'] as $k=>$v)
  {
	  $pic_weight = 30000;
$pic_height = 30000;
    //директория загрузки
    $uploaddir = "images/";
    //новое имя изображения
    $apend=date('YmdHis').rand(100,1000).'.png';
    //путь к новому изображению
    $uploadfile = "$uploaddir$apend";
    $upload[$k]=$uploadfile;
    //Проверка расширений загружаемых изображений
    if($_FILES['userfile']['type'][$k] == "image/gif" || $_FILES['userfile']['type'][$k] == "image/png" ||
    $_FILES['userfile']['type'][$k] == "image/jpg" || $_FILES['userfile']['type'][$k] == "image/jpeg")
    {
      //черный список типов файлов
      $blacklist = array(".php", ".phtml", ".php3", ".php4");
      foreach ($blacklist as $item)
      {
        if(preg_match("/$item\$/i", $_FILES['userfile']['name'][$k]))
        {
          echo "Нельзя загружать скрипты.";
          exit;
        }
      }
 
      //перемещаем файл из временного хранилища
      if (move_uploaded_file($_FILES['userfile']['tmp_name'][$k], $uploadfile))
      {
        //получаем размеры файла
        $size = getimagesize($uploadfile);
        //проверяем размеры файла, если они нам подходят, то оставляем файл
        if ($size[0] < $pic_weight && $size[1] < $pic_height)
        {
          //.....код
          //я обычно заношу пути к изображениям в бд
          //.....код
 
          echo "<center><br>Файл ($uploadfile) загружен.</center>";
        }
        //если размеры файла нам не подходят, то удаляем файл unlink($uploadfile);
        else
        {
          echo "<center><br>Размер пикселей превышает допустимые нормы.</center>";
          unlink($uploadfile);
        }
      }
      else
        echo "<center><br>Файл не загружен, вернитесь и попробуйте еще раз.</center>";
    }
    else
      echo "<center><br>Можно загружать только изображения в форматах jpg, jpeg, gif и png.</center>";
  }
}
}
if(($_FILES['userfile']['type'][0] == 'application/msword' || $_FILES['userfile']['type'][0] == 'application/pdf'  || $_FILES['userfile']['type'][0] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && ($_FILES['userfile']['size'][0] != 0 and $_FILES['userfile']['size'][0] != 0 and $_FILES['userfile']['size'][0]<=111512000)) {
$security1=1;
$uploaddir = 'docs/';
$namefile=$_FILES['userfile']['name'][0];
// это папка, в которую будет загружаться картинка
$apend=rand(100,1000).$namefile;
// это имя, которое будет присвоено изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения
// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if($security1==1)
{ 
  move_uploaded_file($_FILES['userfile']['tmp_name'][0], $uploadfile);
 echo "<center><br>Файл ($uploadfile) загружен.</center>";
}
}
if($ball>0 and $assd>0){
if(!empty($upload[0])){
	$string = serialize( $upload );
}else{
$string = $uploadfile;
}
	   $query  = "INSERT INTO topics VALUES('$username', '$warriable', '$txt', '$dt', '$string', '$rtyuuu', '$pzkk', '$desc', '$titles', '$tupe', '$gdz', '$dt1', '$dt2', '$ball', 'ids')";
  $result = $conn->query($query);
 $query  = "INSERT INTO sous VALUES(0, '$warriable')";
  $result = $conn->query($query);
echo"<h2 style='color:red;'>Пост создан</h2>";  
}else{
echo"<h2 style='color:red;'>Обманывать нехорошо!</h2>";  
}
}
	}
  }
?>
<br/>
<div style="border-radius:10px; background:background: rgba(255,255,255,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );">
<h2 style=" margin:3px; color:#4B4B4B; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; text-shadow:#D2D2D2 1px 1px 1px;"><a href="index.php" style="text-decoration:none; color:black;">Главная страница</a><div align="right" style="display:inline-block; width:65%;"></div>Клуб Двоечников</h2>
</div>
</div>
</body>
</html>