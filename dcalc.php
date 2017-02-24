<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Решить тригонометрическое уравнение онлайн. Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, косинус, синус, найти, вычислить, калькулятор, тригонометрия, sin, cos, tg, ctg, уравнение">
<title>Решить тригонометрическое уравнение | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="jquery.glide.js"></script>
<style type="text/css">
.bbz{
background:#BEBEBE;
margin:1%;
}
.bbz:hover{
border:2px #BEBEBE solid;
background:white;
}
.bbz:hover a{
color#BEBEBE;
}
a {
color:#000;
}
input{
background:grey;
}
</style>

<!-- HEAD START HERE -->

<script language="javascript">
// Входные данные рассчитываются по трём формулам
function alg() { 
	a = document.quest.aindex.value;
	b = document.quest.bindex.value;
	c = document.quest.cindex.value;
	as = Math.pow(a,2);
	bs = Math.pow(b,2);
	cs = Math.pow(c,2);
	aspbs = as + bs;
	dx = aspbs - cs;
	d = Math.sqrt(dx);
	bd = b * d;
	ad = a * d;
	ac = a * c;
	bc = b * c;
	ch1 = ac + bd;
	ch2 = ac - bd;
	ch3 = bc + ad;
	ch4 = bc - ad;
	sin1 = ch1 / aspbs;
	sin2 = ch2 / aspbs;
	cos1 = ch3 / aspbs;
	cos2 = ch4 / aspbs;
	if (aspbs < cs) { 
		window.alert("Это невозможно");
		}
	document.otv.sin1o.value = sin1;
	document.otv.sin2o.value = sin2;
	document.otv.cos1o.value = cos2;
	document.otv.cos2o.value = cos1;
	p = Math.PI;
	rad1 = Math.asin(sin1);
	rad2 = Math.asin(sin2);
	document.otv_rad.x1rad.value = rad1;
	document.otv_rad.x2rad.value = rad2;
	grad1 = rad1 * 180;
	grad1 /= p;
	grad1 = Math.abs(grad1);
	grad1 = Math.round(grad1)
	grad2 = rad2 * 180;
	grad2 /= p;
	grad2 = Math.abs(grad2);	
	grad2 = Math.round(grad2);
	document.otv_grad.x1grad.value = grad1;
	document.otv_grad.x2grad.value = grad2;
	}
// Значения также переводятся из градусной меры в радианную и наоборот
// А также вычисляются основные тригонометрические функции
// Четыре функции задают активность соответствующих полей
function get_alg1() { 
	grad1 = document.otv_grad.x1grad.value;
	p = Math.PI;
	grad1 *= p;
	grad1 /= 180;
	sin1 = Math.sin(grad1);
	cos1 = Math.cos(grad1);
	grad1 = Math.asin(sin1);
	document.otv_rad.x1rad.value = grad1
	document.otv.sin1o.value = sin1;
	document.otv.cos1o.value = cos1;
	}
function get_alg2() { 
	grad2 = document.otv_grad.x2grad.value;
	p = Math.PI;
	grad2 *= p;
	grad2 /= 180;
	sin2 = Math.sin(grad2);
	cos2 = Math.cos(grad2);
	grad2 = Math.asin(sin2);
	document.otv_rad.x2rad.value = grad2;
	document.otv.sin2o.value = sin2;
	document.otv.cos2o.value = cos2;
	}
function get_algr1() { 
	rad1 = document.otv_rad.x1rad.value;
	p = Math.PI;
	sin1 = Math.sin(rad1);
	cos1 = Math.cos(rad1);
	grad1 = Math.asin(sin1);
	grad1 *= 180;
	grad1 /= p;
	grad1 = Math.abs(grad1);
	grad1 = Math.round(grad1);
	document.otv_grad.x1grad.value = grad1;
	document.otv.sin1o.value = sin1;
	document.otv.cos1o.value = cos1;
	}
function get_algr2() { 
	rad2 = document.otv_rad.x2rad.value;
	p = Math.PI;
	sin2 = Math.sin(rad2);
	cos2 = Math.cos(rad2);
	grad2 = Math.asin(sin2);
	grad2 *= 180;
	grad2 /= p;
	grad2 = Math.abs(grad2);
	grad2 = Math.round(grad2);
	document.otv_grad.x2grad.value = grad2;
	document.otv.sin2o.value = sin2;
	document.otv.cos2o.value = cos2;
	}
// Функция очистки
function clear1() { 
	document.otv_grad.x2grad.value = "";
	document.otv_grad.x1grad.value = "";
	document.otv_rad.x2rad.value = "";
	document.otv_rad.x2rad.value = "";
	document.otv.sin1o.value = "";
	document.otv.sin2o.value = "";
	document.otv.cos1o.value = "";
	document.otv.cos2o.value = "";
	document.quest.aindex.value = "";
	document.quest.bindex.value = "";
	document.quest.cindex.value = "";
	}
</script>

<!-- HEAD END HERE -->

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>

<!-- BODY START HERE -->

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="H3">
  <tr> 
	<td align="center"><h1>Тригонометрия</h1></td>
  </tr>
</table>
<h3>&nbsp;&nbsp;<i><b><span class="text">Стандартное&nbsp;уравнение&nbsp;типа:<br/>&nbsp;&nbsp;aSin(x)+bCos(x)=c</span></b></i></h3>
<p>&nbsp;&nbsp;<i class="text">Введите параметры в соответствующие поля. Если 
  они отрицательны, постаьте перед ними знак &quot <b>-</b> &quot.</i></p>
<hr>
<table width="100%" border="0">
  <tr>
	<td>
<form name="quest">
  <p class="text"><span class="text">&nbsp;&nbsp; 
	<input type=text name="aindex">
	<b><i>Sin(x)</i></b> &nbsp;<b>+</b>&nbsp; 
	<input type=text name="bindex">
	<b><i>Cos(x)</i></b> &nbsp;<b>=</b>&nbsp; 
	<input type=text name="cindex">
	</span></p>
  <span class="text">
  <input type=button name="ask" value="Вычислить" onClick="alg()">
  <input type=button name="clers" value="Очистить" onClick="clear1()">
  </span>
</form>
<form name="otv">
  <p class="text"><span class="text">&nbsp;&nbsp;<b><i>Sin<sub>1</sub></i>&nbsp;=&nbsp; 
	<input type=text name="sin1o">
	&nbsp;&nbsp;<i>Sin<sub>2</sub></i>&nbsp;=&nbsp; 
	<input type=text name="sin2o">
	</b></span></p>
  <p> <span class="text"><b>&nbsp;&nbsp;<i>Cos<sub>1</sub></i>&nbsp;=&nbsp; 
	<input type=text name="cos1o">
	&nbsp;&nbsp;<i>Cos<sub>2</sub></i>&nbsp;=&nbsp; 
	<input type=text name="cos2o">
	</b></span></p>
</form>
<table width=100% cols=2 rows=1>
  <tr> 
	<td width=300> 
	  <form name="otv_rad">
		<p> <span class="text"><b> Угол в радианах</b><br>
		  <b>&nbsp; <i>x<sub>1</sub></i>&nbsp;=&nbsp;</b> 
		  <input type="text" name="x1rad" onChange="get_algr1()">
		  <b>&nbsp;+&nbsp;<i>пk</i></b><br>
		  <b>&nbsp; <i>x<sub>2</sub></i>&nbsp;=&nbsp;</b> 
		  <input type="text" name="x2rad" onChange="get_algr2()">
		  <b>&nbsp;+&nbsp;<i>пk</i></b><br>
		  </span></p>
	  </form>
	</td>
	<td width=70%> 
	  <form name="otv_grad">
		<p class="text"><span class="text"><b> Угол в градусах</b><br>
		  <b>&nbsp; <i>x<sub>1</sub></i>&nbsp;=&nbsp;</b> 
		  <input type="text" name="x1grad" onChange="get_alg1()">
		  <br>
		  <b>&nbsp; <i>x<sub>2</sub></i>&nbsp;=&nbsp;</b> 
		  <input type="text" name="x2grad" onChange="get_alg2()">
		  <br>
		  </span></p>
	  </form>
	</td>
  </tr>
</table>
<hr></td>
  </tr>
</table>
<p class="text"><span class="text">&nbsp;&nbsp;<i>Вычисления производятся с точностью 
  до 12 знака после зяпятой<br>
  Значения в градусах округляются до целых значений<br>
  При изменении значений углов их тригонометрические функции вычисляются автоматически<br>
  </i> </span></p>

<!-- BODY END HERE -->
<br/>
<div class="zx-pz">
  <div align="center">
    <h2>Может пригодится</h2>
  </div><br/>
 <div class="column">
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query  = "SELECT `id`, `title`, `desc` FROM stat  ";
  $result = $conn->query($query);
$rows = $result->num_rows;
$rrd=rand(0,$rows);
		$query  = "SELECT `id`, `title`, `desc` FROM stat LIMIT ".$rrd.",5";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<b><a href='".$row[0].".php' id='bright'>".$row[1]."|".$row[2]."</a></b><br/>";
  }
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result = $conn->query($query);
?>
</div>
<br/>
</div>
</div>
<? require_once 'downer.html'?>
</body>
</html>