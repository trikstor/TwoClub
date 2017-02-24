<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Решить уравнение четвёртой степени онлайн. Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, уравнение четвёртой степени, найти, вычислить, калькулятор, уравнение">
<title>Решить тригонометрическое уравнение | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="jquery.glide.js"></script>
<style type="text/css">
.phone{
float:left;
width:100%;
background-image: url(../images/Blue-Gradient-2.jpg);
 background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
padding:10px;
border-radius:5px;
}
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
function main()  {
// Определяем коэффициенты
	var	k4 = document.equation.factor4degree.value;
	var k3 = document.equation.factor3degree.value;
	var k2 = document.equation.factor2degree.value;
	var k1 = document.equation.factor1degree.value;
	var k0 = document.equation.freemember.value;
// Поддержка констант
	if ( k4 == "pi" ) k4 = Math.PI;
	if ( k3 == "pi" ) k3 = Math.PI;
	if ( k2 == "pi" ) k2 = Math.PI;
	if ( k1 == "pi" ) k1 = Math.PI;
	if ( k0 == "pi" ) k0 = Math.PI;
	if ( k4 == "e" ) k4 = Math.E;
	if ( k3 == "e" ) k3 = Math.E;
	if ( k2 == "e" ) k2 = Math.E;
	if ( k1 == "e" ) k1 = Math.E;
	if ( k0 == "e" ) k0 = Math.E;
	if ( k4 == "r2" ) k4 = Math.SQRT2;
	if ( k3 == "r2" ) k3 = Math.SQRT2;
	if ( k2 == "r2" ) k2 = Math.SQRT2;
	if ( k1 == "r2" ) k1 = Math.SQRT2;
	if ( k0 == "r2" ) k0 = Math.SQRT2;
	if ( k4 == "r3" ) k4 = Math.sqrt(3);
	if ( k3 == "r3" ) k3 = Math.sqrt(3);
	if ( k2 == "r3" ) k2 = Math.sqrt(3);
	if ( k1 == "r3" ) k1 = Math.sqrt(3);
	if ( k0 == "r3" ) k0 = Math.sqrt(3);
	if ( k4 == "-pi" ) k4 = -Math.PI;
	if ( k3 == "-pi" ) k3 = -Math.PI;
	if ( k2 == "-pi" ) k2 = -Math.PI;
	if ( k1 == "-pi" ) k1 = -Math.PI;
	if ( k0 == "-pi" ) k0 = -Math.PI;
	if ( k4 == "-e" ) k4 = -Math.E;
	if ( k3 == "-e" ) k3 = -Math.E;
	if ( k2 == "-e" ) k2 = -Math.E;
	if ( k1 == "-e" ) k1 = -Math.E;
	if ( k0 == "-e" ) k0 = -Math.E;
	if ( k4 == "-r2" ) k4 = -Math.SQRT2;
	if ( k3 == "-r2" ) k3 = -Math.SQRT2;
	if ( k2 == "-r2" ) k2 = -Math.SQRT2;
	if ( k1 == "-r2" ) k1 = -Math.SQRT2;
	if ( k0 == "-r2" ) k0 = -Math.SQRT2;
	if ( k4 == "-r3" ) k4 = -Math.sqrt(3);
	if ( k3 == "-r3" ) k3 = -Math.sqrt(3);
	if ( k2 == "-r3" ) k2 = -Math.sqrt(3);
	if ( k1 == "-r3" ) k1 = -Math.sqrt(3);
	if ( k0 == "-r3" ) k0 = -Math.sqrt(3);
// Преобразуем уравнение
	var a = k4;
	var b = k3/4;
	var c = k2/6;
	var d = k1/4;
	var e =  k0;
// Введём дополнительные переменные
	var dif = b/a
	var p = 3*(a*c-b*b)/(a*a);
	var q = 2*(2*b*b*b-3*a*b*c+a*a*d)/(a*a*a);
	var r = (6*a*c*b*b-4*a*a*d*b-3*b*b*b*b+a*a*a*e)/(a*a*a*a);
// Решим кубическое уравнение: преобразуем коэффициенты
	var aq = 2*p;
	var bq = p*p-r;
	var cq = -q*q/2;
// Введём вспомогательные переменные для кубического уравнения
	var pq = -aq*aq/3+bq;
	var qq = 2*aq*aq*aq/27-aq*bq/3+cq;
	var dq = pq*pq*pq/27+qq*qq/4;
// Рассмотрим 3 случая:
	if ( dq == 0 )  {
// Обходим убогость js
		if ( qq < 0 )  {
			qq = Math.abs(qq);
			var nq = Math.pow(qq/2,1/3);
			}
		else  {
			var nq = -Math.pow(qq/2,1/3);
			}
		var  xq1 = 2*nq-aq/3;
		var xq2 = -nq-aq/3;
		xq1 = Math.max(xq1,xq2);
		}
	if ( dq < 0 )  {
		var vq = -pq*pq*pq/27;
		var fq = -qq/(2*Math.sqrt(vq));
		var uq = Math.acos(fq);
		var piq = Math.PI;
		pq = 2*Math.sqrt(-pq/3);
		var xq1 = pq*Math.cos(uq/3)-aq/3;
		var xq2 = -pq*Math.cos(uq/3+piq/3)-aq/3;
		var xq3 = -pq*Math.cos(uq/3-piq/3)-aq/3;
		xq1 = Math.max(Math.max(xq1,xq2),xq3);
		}
	if ( dq > 0 )  {
		dq = Math.sqrt(dq);
		var nq = -qq/2-dq;
		if (  nq < 0 )  {
			nq = Math.abs(nq);
			var bbq = -Math.pow(nq,1/3);
			}
		else  {
			var bbq = Math.pow(nq,1/3);
			}
		var mq = dq-qq/2;
		if (  mq < 0 )  {
			mq = Math.abs(mq);
			var aaq = -Math.pow(mq,1/3);
			}
		else  {
			var aaq = Math.pow(mq,1/3);
			}
		var  xq1 = aaq+bbq-aq/3;
		}
// По возможности избавимся от погрешности
	var whbig_xq1 = Math.ceil(xq1);
	var whsmall_xq1 = whbig_xq1 - 1;
	if ( xq1 != 0 && (Math.abs(Math.abs(whbig_xq1) - Math.abs(xq1)) <= 0.0000000000002 || Math.abs(Math.abs(xq1) - Math.abs(whsmall_xq1)) <= 0.0000000000002) )  {
		if ( (whbig_xq1+whsmall_xq1)/2 > xq1)  {
			xq1 = whsmall_xq1;
			}
		else   {
			xq1 = whbig_xq1;
			}
		}
/* Вернёмся к нашему уравнению:
 * Воспользуемся утверждением: всякий многочлен 4 степени можно представить в виде
 * произведения 2 квадратных.
 */
 	var t = xq1;
	if (t < 0)  {
		document.roots.root1.value = "Уравнение";
		document.roots.root2.value = "имеет лишь 2 комплексных";
		document.roots.root3.value = "корня, в отыскании которых";
		document.roots.root4.value = "нет смысла";
		}
	if (t > 0)  {
		var bs = Math.sqrt(2*t);
		var c1 = p+t-q/bs;
		var c2 = p+t+q/bs;
		var d1 = 2*t-4*c1;
		var d2 = 2*t-4*c2;
// Рассмотрим решения уравнений в зависимости от дискриминантов
		if (d1 == 0)  {
			var x1 = -bs/2-dif;
			var x2 = x1;
			document.roots.root1.value = x1;
			document.roots.root2.value = x2;
			}
		if (d1 > 0)  {
			var x1 = -bs/2+Math.sqrt(d1)/2-dif;
			var x2 = -bs/2-Math.sqrt(d1)/2-dif;
			document.roots.root1.value = x1;
			document.roots.root2.value = x2;
			}
		if (d1 < 0)  {
			var x1 = 0;
			var x2 = 0;
			var valid1 = -bs/2-dif;
			var imaginary1 = Math.sqrt(Math.abs(d1))/2;
			var whbig_valid1 = Math.ceil(valid1);
			var whsmall_valid1 = whbig_valid1 - 1;
			var whbig_imaginary1 = Math.ceil(imaginary1);
			var whsmall_imaginary1 = whbig_imaginary1 - 1;
			if (valid1 != 0 && (Math.abs(Math.abs(whbig_valid1) - Math.abs(valid1)) <= 0.0000000000002 || Math.abs(Math.abs(valid1) - Math.abs(whsmall_valid1)) <= 0.0000000000002) )  {
				if ( (whbig_valid1+whsmall_valid1)/2 > valid1 )  {
					valid1 = whsmall_valid1;
					}
				else  {
					valid1 = whbig_valid1;
					}
				}
			if ( imaginary1 != 0 && (Math.abs(Math.abs(whbig_imaginary1) - Math.abs(imaginary1)) <= 0.0000000000002 || Math.abs(Math.abs(imaginary1) - Math.abs(whsmall_imaginary1)) <= 0.0000000000002) )  {
				if ( (whbig_imaginary1+whsmall_imaginary1)/2 > imaginary1)  {
					imaginary1 = whsmall_imaginary1;
					}
				else  {
					imaginary1 = whbig_imaginary1;
					}
				}
			if ( valid1 == 0)  {
				valid1 = "";
				}
			if ( imaginary1 == 1)  {
				imaginary1 = "";
				}
			document.roots.root1.value = valid1+" + "+imaginary1+"i";
			document.roots.root2.value = valid1+" - "+imaginary1+"i";
			}
		if (d2 == 0)  {
			var x3 = bs/2-dif;
			var x4 = x3;
			document.roots.root3.value = x3;
			document.roots.root4.value = x4;
			}
		if (d2 > 0)  {
			var x3 = bs/2+Math.sqrt(d2)/2-dif;
			var x4 = bs/2-Math.sqrt(d2)/2-dif;
			document.roots.root3.value = x3;
			document.roots.root4.value = x4;
			}
		if (d2 < 0)  {
			var x3 = 0;
			var x4 = 0;
			var valid2 = bs/2-dif;
			var imaginary2 = Math.sqrt(Math.abs(d2))/2;
			var whbig_valid2 = Math.ceil(valid2);
			var whsmall_valid2 = whbig_valid2 - 1;
			var whbig_imaginary2 = Math.ceil(imaginary2);
			var whsmall_imaginary2 = whbig_imaginary2 - 1;
			if (valid2 != 0 && (Math.abs(Math.abs(whbig_valid2) - Math.abs(valid2)) <= 0.0000000000002 || Math.abs(Math.abs(valid2) - Math.abs(whsmall_valid2)) <= 0.0000000000002) )  {
				if ( (whbig_valid2+whsmall_valid2)/2 > valid2 )  {
					valid2 = whsmall_valid2;
					}
				else  {
					valid2 = whbig_valid2;
					}
				}
			if ( imaginary2 != 0 && (Math.abs(Math.abs(whbig_imaginary2) - Math.abs(imaginary2)) <= 0.0000000000002 || Math.abs(Math.abs(imaginary2) - Math.abs(whsmall_imaginary2)) <= 0.0000000000002) )  {
				if ( (whbig_imaginary2+whsmall_imaginary2)/2 > imaginary2)  {
					imaginary2 = whsmall_imaginary2;
					}
				else  {
					imaginary2 = whbig_imaginary2;
					}
				}
			if ( valid2 == 0)  {
				valid2 = "";
				}
			if ( imaginary2 == 1)  {
				imaginary2 = "";
				}
			document.roots.root3.value = valid2+" + "+imaginary2+"i";
			document.roots.root4.value = valid2+" - "+imaginary2+"i";
			}
		var whbig_x1 = Math.ceil(x1);
		var whsmall_x1 = whbig_x1 - 1;
		var whbig_x2 = Math.ceil(x2);
		var whsmall_x2 = whbig_x2 - 1;
		var whbig_x3 = Math.ceil(x3);
		var whsmall_x3 = whbig_x3 - 1;
		var whbig_x4 = Math.ceil(x4);
		var whsmall_x4 = whbig_x4 - 1;
		if ( x1 != 0 && (Math.abs(Math.abs(whbig_x1) - Math.abs(x1)) <= 0.0000000000002 || Math.abs(Math.abs(x1) - Math.abs(whsmall_x1)) <= 0.0000000000002) )  {
			if ( (whbig_x1+whsmall_x1)/2 > x1)  {
				x1 = whsmall_x1;
				}
			else   {
				x1 = whbig_x1;
				}
			document.roots.root1.value = x1;
			}
			if ( x2 != 0 && (Math.abs(Math.abs(whbig_x2) - Math.abs(x2)) <= 0.0000000000002 || Math.abs(Math.abs(x2) - Math.abs(whsmall_x2)) <= 0.0000000000002) )  {
				if ( (whbig_x2+whsmall_x2)/2 > x2)  {
				x2 = whsmall_x2;
				}
			else  {
				x2 = whbig_x2;
				}
			document.roots.root2.value = x2;
			}
			if ( x3 != 0 && (Math.abs(Math.abs(whbig_x3) - Math.abs(x3)) <= 0.0000000000002 || Math.abs(Math.abs(x3) - Math.abs(whsmall_x3)) <= 0.0000000000002) )  {
				if ( (whbig_x3+whsmall_x3)/2 > x3)  {
					x3 = whsmall_x3;
					}
				else  {
					x3 = whbig_x3;
			}
		document.roots.root3.value = x3;
		}
		if ( x4 != 0 && (Math.abs(Math.abs(whbig_x4) - Math.abs(x4)) <= 0.0000000000002 || Math.abs(Math.abs(x4) - Math.abs(whsmall_x4)) <= 0.0000000000002) )  {
			if ( (whbig_x4+whsmall_x4)/2 > x4)  {
				x4 = whsmall_x4;
				}
			else   {
				x4 = whbig_x4;
				}
			document.roots.root4.value = x4;
			}	
		}
// Случай биквадратного уравнения следует рассмотреть отдельно
	else  {
		var ds = k2*k2-4*e*a;
		if (ds < 0)  {
			document.roots.root1.value = "Уравнение";
			document.roots.root2.value = "имеет лишь 2 комплексных";
			document.roots.root3.value = "корня, в отыскании которых";
			document.roots.root4.value = "нет смысла";
			}
		else  {
			var radical1 = (-k2-Math.sqrt(ds))/(2*a);
			var radical2 = (-k2+Math.sqrt(ds))/(2*a);
			if ( radical1 >= 0 )  {
				var x1 = Math.sqrt(radical1);
				var x2 = -x1;
				}
			else  {
				var x1 = Math.sqrt(Math.abs(radical1)) + "i";
				var x2 = -Math.sqrt(Math.abs(radical1)) + "i";
				}
			if ( radical2 >= 0 )  {
				var x3 = Math.sqrt(radical2);
				var x4 = -x3;
				}
			else  {
				var x3 = Math.sqrt(Math.abs(radical2)) + "i";
				var x4 = -Math.sqrt(Math.abs(radical2)) + "i";
				}
			}
		document.roots.root1.value = x1;
		document.roots.root2.value = x2;
		document.roots.root3.value = x3;
		document.roots.root4.value = x4;
		}
	}
// Функция очистки
function clear_all()  {
	document.equation.factor4degree.value = 1;
	document.equation.factor3degree.value = 1;
	document.equation.factor2degree.value = 1;
	document.equation.factor1degree.value = 1;
	document.equation.freemember.value = 1;
	document.roots.root1.value = "";
	document.roots.root2.value = "";
	document.roots.root3.value = "";
	document.roots.root4.value = "";
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
<div class="phone">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="H3">
  <tr> 
	<td align="center"><b>Уравнение четвёртой степени</b></td>
  </tr>
</table>
<p><i><span class="text">Введите в поля формы соответствующие величины. Если они 
  отрицательны, поставьте перед ними знак &quot;<b>-</b>&quot;.</span></i><span class="text"><br>
  </span></p>
<ul>
  <span class="text"><i>Поддерживаются следующие константы:</i> </span> 
  <li class="text"><b> pi </b><i>&#151; Число пи (3.14);</i> 
  <li class="text"><b>e </b><i>&#151; Основание натурального логарифма (2.71);</i> 
  <li class="text"><b>r2 </b><i>&#151; Корень квадратный из 2;</i> 
  <li class="text"><b>r3</b><i> &#151; Корень квадратный из 3;</i> 
</ul>
<p class="text"><i>Коэффициент перед четвёртой степенью переменной не должен быть 
  равен нулю.</i></p>
<hr>

<table width="100%" border="0" align="center">
  <tr>
	<td>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr> 
	<td>&nbsp;</td>
	<td align="center" class="text"> 
	  <form name="equation">
		<i> <b> 
		<input type="text" name="factor4degree" value="1">
		x<sup>4 </sup> +&nbsp; 
		<input type="text" name="factor3degree" value="1">
		x<sup>3 </sup> +&nbsp; 
		<input type="text" name="factor2degree" value="1">
		x<sup>2 </sup> +&nbsp; 
		<input type="text" name="factor1degree"  value="1">
		x +&nbsp; 
		<input type="text" name="freemember" value="1">
		= 0</b> </i> 
	  </form>
	</td>
	<td>&nbsp;</td>
  </tr>
  <tr> 
	<td>&nbsp;</td>
	<td align="center" class="text"> 
	  <form name="actions">
		<input type="button" name="calc" value="Вычислить" onClick="main()">
		<input type="button" name="clearall" value="Очистить" onClick="clear_all()">
	  </form>
	</td>
	<td>&nbsp;</td>
  </tr>
  <tr> 
	<td>&nbsp;</td>
	<td align="center" class="text"> 
	  <form name="roots">
		<i> <b> x<sub>1</sub> = 
		<input type="text" name="root1" >
		<br>
		x<sub>2</sub> = 
		<input type="text" name="root2" >
		<br>
		x<sub>3</sub> = 
		<input type="text" name="root3" >
		<br>
		x<sub>4</sub> = 
		<input type="text" name="root4" >
		</b></i> 
	  </form>
	</td>
		  <td valign="bottom" align="left"></td>
  </tr>
</table>
<hr>
<p><i><span class="text">Ответы даются с точностью до 13 знака после запятой.<br>
  Комплексные корни помечаются как &quot;</span></i><span class="text"><b>i</b><i>&quot;.</i></span></p>
</td>
  </tr></table>

<!-- BODY END HERE -->
</div>

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