<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META name="description" lang="ru" content="Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<title>Создать решебник | Клуб Двоечников</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<style>
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

/* DEMO */
*,
*:before,
*:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.container-tab{
	margin:auto;
	max-width:100%;
	padding:0 20px;
}
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
</style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; }else{
	require_once 'header1.php';}
?>
<div align="center" class="ad">
Добавить: <a id="sde" href="">Вопрос</a> <a id="sde" href="">Статью</a> <a id="sde" href="">Решебник</a> <a id="sde" href="">Тест</a>
</div>
<br/>
<div class="container-tab">

	<ul class="accordion-tabs">
		<li class="tab-head-cont">
			<a href="#" class="is-active">Создать Решебник</a>
			<section>
<h2>Добавить решебник</h2>
<div style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div align="center" style="background:#BBB; width:95%;  border-radius:5px;">
<form action="ery.php" method="post" ENCTYPE="multipart/form-data">
<table width="95%" style="border-collapse:collapse;" cellpadding="0.1">
  <tr>
    <td>Название учебника|Авторы|Класс</td>
    <td><input type="text" name="title"/></td>
  </tr>
  <tr>
    <td>Описание</td>
    <td><textarea name="desc"></textarea></td>
  </tr>
  <tr>
    <td>Фото учебника</td>
    <td><input type="file" name="userfile" /></td>
  </tr><br/>
  <tr>
    <td>Предмет</td>
    <td><select name="ppz">
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
</select></td>
  </tr><br/>
</table>
<div id="elm">
</div>
<script>
function second_passed() {
var elm = document.getElementById('elm');
elm.innerHTML = "<input type='submit' value='Создать' />";
}
setTimeout(second_passed, 3000)
</script>
</form>
</div>
<?php
if(isset($_SESSION['usertwcl'])){
	
}else{
	echo "<h2 align='center'>Вы не вошли в систему</h2><br/>";
}
  if(isset($_POST['title']) and isset($_POST['desc']) and $_FILES['userfile']['error']==0 and !empty($_FILES['userfile']['tmp_name']) and isset($_SESSION['usertwcl'])){
$uploaddir = 'images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=11512000)) 
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
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 1512Кб";
} 
	 function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
	$des= $_POST['desc'];
	$des= mysql_fix_string($conn, $des);
	$title= $_POST['title'];
	$title= mysql_fix_string($conn, $title);
	 $key= $_POST['ppz'];
	 $key= mysql_fix_string($conn, $key);
	$iable =$_SESSION['usertwcl'];
	$warr=rand(1000, 9000);
        $ct='t';
	$warriable=$ct.$warr.$iable; 
	$usert=$_SESSION['usertwcl'];
	   $dz=1;
$ppz=$_POST['ppz'];
	 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
	   $query  = "INSERT INTO gdz VALUES('$title', '$uploadfile','$des','$warriable','$dz','$ppz', ' ')";
  $result = $conn->query($query);
echo "Решебник создан, спасибо!";
  }
?>
Указание недостоверных данных карается санкциями в соответствии с правилами.
</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Создать Учебник</a>
			<section>
<h2>Добавить Учебник</h2>
<div align="center" style="background:#BBB; width:95%;  border-radius:5px;">
<form action="ery.php" method="post" ENCTYPE="multipart/form-data">
<table width="95%" style="border-collapse:collapse;" cellpadding="0.1">
  <tr>
    <td>Название учебника|Класс</td>
    <td><input type="text" name="title1"/></td>
  </tr>
  <tr>
    <td>Описание</td>
    <td><textarea name="desc1"></textarea></td>
  </tr>
  <tr>
    <td>Фото учебника</td>
    <td><input type="file" name="userfile" /></td>
  </tr><br/>
  <tr>
    <td>Предмет</td>
    <td><select name="ppz1">
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
</select></td>
  </tr><br/>
</table>
<div id="elt">
</div>
<script>
function second_passed() {
var elt = document.getElementById('elt');
elt.innerHTML = "<input type='submit' value='Создать' />";
}
setTimeout(second_passed, 3000)
</script>
</form>
</div>
<?php
if(isset($_SESSION['usertwcl'])){
	
}else{
	echo "<h2 align='center'>Вы не вошли в систему</h2><br/>";
}
  if(isset($_POST['title1']) and isset($_POST['desc1']) and $_FILES['userfile']['error']==0 and !empty($_FILES['userfile']['tmp_name']) and isset($_SESSION['usertwcl'])){
$uploaddir = 'images/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.jpg'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=11512000)) 
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
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 1512Кб";
} 
	 function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
	$des= $_POST['desc1'];
	$des= mysql_fix_string($conn, $des);
	$title= $_POST['title1'];
	$title= mysql_fix_string($conn, $title);
	 $key= $_POST['ppz1'];
	 $key= mysql_fix_string($conn, $key);
	$iable =$_SESSION['usertwcl'];
	$warr=rand(1000, 9000);
        $ct='b';
	$warriable=$ct.$warr.$iable; 
	$usert=$_SESSION['usertwcl'];
	   $dz=1;
$ppz=$_POST['ppz1'];
	 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
	   $query  = "INSERT INTO studybook VALUES('$title', '$uploadfile','$des','$warriable','$dz','$ppz', ' ')";
  $result = $conn->query($query);
echo "Учебник создан, спасибо!";
  }
?>
			</section>
		</li>
	</ul>
	
</div>

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
</div>
<? require_once 'downer.html'?>
</body>
</html>