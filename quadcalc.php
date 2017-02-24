<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
input{
background:grey;
margin:1%;
}
</style>
<META name="description" lang="ru" content="Решить квадратное уравнение онлайн. Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="решить квадратное уравнение онлайн калькулятор Клуб Двоечников">
<title>Решить квадратное уравнение онлайн | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
<!-- HEAD START HERE -->

<script language="javascript">
function main()  {
// Определяем переменные
	var a = document.equation.a.value;
	var b = document.equation.b.value;
	var c = document.equation.c.value;
	var dis = b*b-4*a*c;
	var t =- b*b/(2*a);
	document.result.dis.value = dis;
// Действительные корни
	if (dis >= 0)  {
		var x1 = t+Math.sqrt(dis)/(2*a);
		var x2 =t-Math.sqrt(dis)/(2*a);
		document.result.x1.value = x1;
		document.result.x2.value = x2;
		}
// Комплексно-сопряжённые корни
	else  {
		var imaginary = Math.sqrt(-dis)/(2*a);
		document.result.x1.value = t + " - " + imaginary + "i";
		document.result.x2.value = t + " + " + imaginary + "i";
		}
// Если уравнение линейно
	if (a == 0)  {
		document.result.x1.value = (-c/b);
		document.result.x2.value = "";
		document.result.dis.value = "";
		}
	}
// Функция очистки
function cl_all()  {
	document.equation.a.value = 1;
	document.equation.b.value = 1;
	document.equation.c.value = 1;
	document.result.dis.value = "";
	document.result.x1.value = "";
	document.result.x2.value = "";
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
	<td align="center"><h1>Квадратное уравнение</h1></td>
  </tr>
</table>
<p align="left"><i><span class="text">Введите в поля формы соответствующие величины. 
  Если они отрицательны, поставьте перед ними знак &quot;<b>-</b>&quot;.<br>
  </span></i></p>
<hr>
	  <form name="equation">
		<span class="text"><i> <b> 
		<input type="text" name="a" size="16" value="1">
		x<sup>2</sup> + 
		<input type="text" name="b" size="16" value="1">
		x + 
		<input type="text" name="c" size="16" value="1">
		= 0</b></i> </span> 
	  </form>
	  <form name="actions">
		<span class="text"> 
		<input type="button" name="calculate" value="Вычислить" onClick="main()">
		<input type="button" name="clear_all" value="Очистить" onClick="cl_all()">
		</span> 
	  </form>
	  <form name="result">
		<span class="text"><i><b>Дискриминант равен 
		<input type="text" name="dis" size="40">
		<br>
		x<sub>1</sub> = 
		<input type="text" name="x1" size="50">
		<br>
		x<sub>2</sub> = 
		<input type="text" name="x2" size="50">		</b></i> </span> 
	  </form>

<hr>
<p class="text"><i>Ответы даются с точностью до 13 знака после запятой.<br>
  Комплексные корни помечаются как &quot;</i><b>i</b><i>&quot;.</i></p>


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