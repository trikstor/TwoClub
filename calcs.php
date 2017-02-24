<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Калькуляторы, вычисли все! Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Клуб Двоечников, калькулятор, калькуляторы, вычислить, проценты, тригонометрия, синус, косинус">
<title>Калькуляторы | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('.spoiler_links').click(function(){
  $(this).parent().children('div.spoiler_body').toggle('normal');
  return false;
 });
});
</script>

<Style>
.bbz{
background:#BEBEBE;
margin:1%;
padding:2%;
}
.bbz:hover{
border:2px #BEBEBE solid;
background:white;
}
.bbz:hover a{
color#BEBEBE;
}
.spoiler_body {display:none; cursor:pointer;}
 td {font-family: verdana, arial, helvetica; font-size:11px;}
 input{background:#BCBCBC;} 
.replica{
    width:100%;
    height:30%;
    background-image: url(../images/replica.png);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:#464646;
}
 </Style>
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
<!-- HEAD START HERE -->


<SCRIPT LANGUAGE="JavaScript">


<!-- Begin
function addChar(input, character) {
if(input.value == null || input.value == "0")
input.value = character
else
input.value += character
}
function cos(form) {
form.display.value = Math.cos(form.display.value);}
function sin(form) {
form.display.value = Math.sin(form.display.value);}
function tan(form) {
form.display.value = Math.tan(form.display.value);}
function sqrt(form) {
form.display.value = Math.sqrt(form.display.value);}
function ln(form) {
form.display.value = Math.log(form.display.value);}
function exp(form) {
form.display.value = Math.exp(form.display.value);}
function sqrt(form) {
form.display.value = Math.sqrt(form.display.value);}
function deleteChar(input) {
input.value = input.value.substring(0, input.value.length - 1)
}
function changeSign(input) {
if(input.value.substring(0, 1) == "-")
input.value = input.value.substring(1, input.value.length)
else
input.value = "-" + input.value
}
function compute(form)  {
form.display.value = eval(form.display.value)}
function square(form)  {
form.display.value = eval(form.display.value) *
eval(form.display.value)}
function checkNum(str)  {
for (var i = 0; i < str.length; i++) {
var ch = str.substring(i, i+1)
if (ch < "0" || ch > "9") {
if (ch != "/" && ch != "*" && ch != "+" && ch !=
"-" && ch != "."
&& ch != "(" && ch!= ")") {
alert("invalid entry!")
return false
         }
      }
   }
return true
}
// End -->
</SCRIPT>

<!-- HEAD END HERE -->
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<div style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div class="replica">
<h1>Все калькуляторы здесь, доверь свои расчеты программе ! </h1>
<br/>
<br/>
<b>
Все математические функции, уравнения, тригонометрия...
</b>
</div>
<br/>
<div style="background:grey; padding:2%;">
<!-- BODY START HERE -->
<h2>Обычный калькулятор</h2>
<FORM name="Keypad" action="">

<!--  Original:  http://www.dummyproof.com/javascripts -->


<TABLE>
<B>
<TABLE border=2 width=50 height=60 cellpadding=1 cellspacing=5>
<TR>
<TD colspan=3 align=middle>
<input name="ReadOut" type="Text" size=24 value="0" width=100%>
</TD>
<TD
</TD>
<TD>
<input name="btnClear" type="Button" value="  C  " onClick="Clear()">
</TD>
<TD><input name="btnClearEntry" type="Button" value="  CE " onClick="ClearEntry()">
</TD>
</TR>
<TR>
<TD>
<input name="btnSeven" type="Button" value="  7  " onClick="NumPressed(7)">
</TD>
<TD>
<input name="btnEight" type="Button" value="  8  " onClick="NumPressed(8)">
</TD>
<TD>
<input name="btnNine" type="Button" value="  9  " onClick="NumPressed(9)">
</TD>
<TD>
</TD>
<TD>
<input name="btnNeg" type="Button" value=" +/- " onClick="Neg()">
</TD>
<TD>
<input name="btnPercent" type="Button" value="  % " onClick="Percent()">
</TD>
</TR>
<TR>
<TD>
<input name="btnFour" type="Button" value="  4  " onClick="NumPressed(4)">
</TD>
<TD>
<input name="btnFive" type="Button" value="  5  " onClick="NumPressed(5)">
</TD>
<TD>
<input name="btnSix" type="Button" value="  6  " onClick="NumPressed(6)">
</TD>
<TD>
</TD>
<TD align=middle><input name="btnPlus" type="Button" value="  +  " onClick="Operation('+')">
</TD>
<TD align=middle><input name="btnMinus" type="Button" value="   -   " onClick="Operation('-')">
</TD>
</TR>
<TR>
<TD>
<input name="btnOne" type="Button" value="  1  " onClick="NumPressed(1)">
</TD>
<TD>
<input name="btnTwo" type="Button" value="  2  " onClick="NumPressed(2)">
</TD>
<TD>
<input name="btnThree" type="Button" value="  3  " onClick="NumPressed(3)">
</TD>
<TD>
</TD>
<TD align=middle><input name="btnMultiply" type="Button" value="  *  " onClick="Operation('*')">
</TD>
<TD align=middle><input name="btnDivide" type="Button" value="   /   " onClick="Operation('/')">
</TD>
</TR>
<TR>
<TD>
<input name="btnZero" type="Button" value="  0  " onClick="NumPressed(0)">
</TD>
<TD>
<input name="btnDecimal" type="Button" value="   .  " onClick="Decimal()">
</TD>
<TD colspan=3>
</TD>
<TD>
<input name="btnEquals" type="Button" value="  =  " onClick="Operation('=')">
</TD>
</TR>
</TABLE>
</TABLE>
</B>
</FORM>
</CENTER>
<font face="Verdana, Arial, Helvetica" size=2>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var FKeyPad = document.Keypad;
var Accum = 0;
var FlagNewNum = false;
var PendingOp = "";
function NumPressed (Num) {
if (FlagNewNum) {
FKeyPad.ReadOut.value  = Num;
FlagNewNum = false;
   }
else {
if (FKeyPad.ReadOut.value == "0")
FKeyPad.ReadOut.value = Num;
else
FKeyPad.ReadOut.value += Num;
   }
}
function Operation (Op) {
var Readout = FKeyPad.ReadOut.value;
if (FlagNewNum && PendingOp != "=");
else
{
FlagNewNum = true;
if ( '+' == PendingOp )
Accum += parseFloat(Readout);
else if ( '-' == PendingOp )
Accum -= parseFloat(Readout);
else if ( '/' == PendingOp )
Accum /= parseFloat(Readout);
else if ( '*' == PendingOp )
Accum *= parseFloat(Readout);
else
Accum = parseFloat(Readout);
FKeyPad.ReadOut.value = Accum;
PendingOp = Op;
   }
}
function Decimal () {
var curReadOut = FKeyPad.ReadOut.value;
if (FlagNewNum) {
curReadOut = "0.";
FlagNewNum = false;
   }
else
{
if (curReadOut.indexOf(".") == -1)
curReadOut += ".";
   }
FKeyPad.ReadOut.value = curReadOut;
}
function ClearEntry () {
FKeyPad.ReadOut.value = "0";
FlagNewNum = true;
}
function Clear () {
Accum = 0;
PendingOp = "";
ClearEntry();
}
function Neg () {
FKeyPad.ReadOut.value = parseFloat(FKeyPad.ReadOut.value) * -1;
}
function Percent () {
FKeyPad.ReadOut.value = (parseFloat(FKeyPad.ReadOut.value) / 100) * parseFloat(Accum);
}
// End -->
</SCRIPT>
<!-- BODY END HERE -->
</div>
 <a href="" class="spoiler_links"><div class="bbz">Модифицированный калькулятор (корни, тригонометрия...)</div></a>
 <div class="spoiler_body">
  <!-- BODY START HERE -->

<FORM>
<input name="display" value="0" size=25></td>
<br>
<input type="button" value="   exp  " onClick="if (checkNum(this.form.display.value)) { 
exp(this.form) }">
<input type="button" value="    7    " onClick="addChar(this.form.display, '7')">
<input type="button" value="    8    " onClick="addChar(this.form.display, '8')">
<input type="button" value="    9    " onClick="addChar(this.form.display, '9')">
<input type="button" value="    /    " onClick="addChar(this.form.display, '/')">
<br>
<input type="button" value="   ln    " onClick="if (checkNum(this.form.display.value)) { 
ln(this.form) }">
<input type="button" value="    4    " onClick="addChar(this.form.display, '4')">
<input type="button" value="    5    " onClick="addChar(this.form.display, '5')">
<input type="button" value="    6    " onClick="addChar(this.form.display, '6')">
<input type="button" value="    *    " onClick="addChar(this.form.display, '*')">
<br>
<input type="button" value="   sqrt  " onClick="if (checkNum(this.form.display.value)) {
sqrt(this.form) }">
<input type="button" value="    1    " onClick="addChar(this.form.display, '1')">
<input type="button" value="    2    " onClick="addChar(this.form.display, '2')">
<input type="button" value="    3    "  onClick="addChar(this.form.display, '3')">
<input type="button" value="    -    "  onClick="addChar(this.form.display, '-')">
<br>
<input type="button" value="   sq    " onClick="if (checkNum(this.form.display.value)) { 
square(this.form) }">
<input type="button" value="    0    " onClick="addChar(this.form.display, '0')"> 
<input type="button" value="    .    " onClick="addChar(this.form.display, '.')"> 
<input type="button" value="   +/-   " onClick="changeSign(this.form.display)">
<input type="button" value="    +    " onClick="addChar(this.form.display, '+')">
<br>
<input type="button" value="    (    " onClick="addChar(this.form.display, '(')"> 
<input type="button" value="   cos   " onClick="if (checkNum(this.form.display.value)) { 
cos(this.form) }">
<input type="button" value="   sin   " onClick="if (checkNum(this.form.display.value)) {
sin(this.form) }">
<input type="button" value="   tan   " onClick="if (checkNum(this.form.display.value)) { 
tan(this.form) }">
<input type="button" value="    )    " onClick="addChar(this.form.display, ')')"> 
<br>
<input type="button" value="   Clear       "  onClick="this.form.display.value = 0 ">
<input type="button" value="   Back Space  " onClick="deleteChar(this.form.display)">
<input type="button" value="   Enter       " name="enter"
onClick="if (checkNum(this.form.display.value)) { 
compute(this.form) }">
</FORM>

<!-- BODY END HERE -->
 </div>
<div class="bbz"><a href="prcalc.php">Вычисление процентов</a></div> 
<div class="bbz"><a href="quadcalc.php">Решение квадратных уравнений</a></div> 
<div class="bbz"><a href="dcalc.php">Решение тригонометрических уравнений</a></div> 
<div class="bbz"><a href="sysconverter.php">Перевод различных систем счисления</a></div> 
<div class="bbz"><a href="tcalc.php">Тригонометрические функции в радианах и градусах</a></div> 
<div class="bbz"><a href="acalc.php">Решение уравнения четвертой степени</a></div> 
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
	echo "<b><a href='".$row[0].".php' id='bright'>".$row[1]."|".$row[2]."</a></b><hr/><br/>";
  }
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result = $conn->query($query);
?>
</div>
</div>
<br/>
<?php 
$usert=$_SESSION['usertwcl'];
$id='calcs';
  $query  = "SELECT * FROM comments WHERE id_post= '$id' ";
  $result = $conn->query($query);
  if (!$result) die ("<h3>Комментариев нет, станьте первым!</h3>");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if($j & 1){
		$stil="background:#DDD; border-radius:5px;";
			}else
{
$stil="background:#EEEEEE; border-radius:5px;";
}
		 $year ='" id="imgp"/>';
$formt = '<img src="';
$d = $formt.$row[5].$year;
 $y='<img src="';
	 $i='"/>';
if(isset($row[6])){
	$rowr=$row[6];
$tnm=substr($rowr, 0, 4);
if($tnm=='docs'){
$t="<a href='".$rowr."'>Загруженный файл</a>";
}else{
$t="<a href='".$rowr."'><img src='".$rowr."' /></a>";
}
  }
if($_SESSION['admin']!=1){
	 if($row[4]==1){
		 $pos='Главный Куратор';
	 }
	  if($row[4]==2){
		 $pos='Почётный Двоечник';
	 }
	 if($row[4]==3){
		 $pos='Мастер';
	 }
	  if($row[4]==4){
		 $pos='Хорошист';
	 }
	 if($row[4]==5){
		 $pos='Новичок';
	 }
}else{
$pos='<b style="color:red;">Админ</b>';
}
	    echo <<<_END
  <pre style="$stil"  >
  <h2 align="center" id="txt">$row[1]</h2>
  <hr/>
  <div align='center' style='width:95%; word-wrap: break-word;'> $row[2] <br/>
  $t
</div>
 <div id="pzkk">
$d
$pos
<form action="profile.php" method="post">
<button value="$row[0]" name='prf' onclick='javascript: document.forms[...].submit()'>$row[0]</button>
</form>
</div>
  </pre>

_END;
if($row[0]==$usert || $_SESSION['admin']==1){
echo'
<form action="'.$id.'.php" method="post">
<input type="hidden" value="'.$row[0].'" name="und"/>
<button value="'.$row[1].'" name="tdel" onclick="javascript: document.forms[...].submit()">Удалить комментарий</button>
</form>';
}
}
?>
<?php
if(isset($_POST['und'])){
$und=$_POST['und'];
$tdel=$_POST['tdel'];
    $query  = "DELETE FROM comments WHERE user='$und' AND title='$tdel'";
    $result = $conn->query($query);
echo'Комментарий удалён';
}
 function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
  if(isset($_SESSION['usertwcl'])){
if(isset($_POST['title']) and isset($_POST['txt'])){
if($_FILES['userfile']['error']==0 && !empty($_FILES['userfile']['tmp_name'])){
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=1512000 and $_FILES['userfile']['size']!=420)){
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
     if ($size[0] < 1000 && $size[1]<3000) 
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
if(($_FILES['userfile']['type'] == 'application/msword' || $_FILES['userfile']['type'] == 'application/pdf' || $_FILES['userfile']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=11512000)) {
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
 function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
  $usert=$_SESSION['usertwcl'];
	$title=get_post($conn, 'title');
$title= mysql_fix_string($conn, $title);
   $title=htmlspecialchars($title);
	$txt=get_post($conn, 'txt');
$txt= strip_tags($txt, '<p><a><br><ul><li><sub><ol><img><user><table><tr><th><td><cut><sup><u><i><b><h1><h2><h3><h4><h5><youtube>');
   $title=htmlspecialchars($title);
	$ava=$_SESSION['avatar'];
	$count=$_SESSION['titul'];
	$id_post=$id;
	$otvet=0;
	$query  = "INSERT INTO comments VALUES('$usert', '$title', '$txt', '$otvet' ,'$count','$ava','$uploadfile', '$id_post', '0')";
  $result = $conn->query($query);
echo "<h2>Комментарий добавлен</h2>";
 $query  = "SELECT * FROM counter WHERE id='$usert'";
  $result = $conn->query($query);
  if (!$result) die ("?????? ???? ??????.");

  $rows = $result->num_rows;
  if($rows==0){
$message="".$p1.".Вам  было оставлен комментарий, twoclub.ru/".$id.".php  ";
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
if(empty($_SESSION['usertwcl'])){
echo"<h3>Вы должны войти в систему чтобы написать комментарий</h3><br/>";
}
?>
<form action="" ENCTYPE="multipart/form-data" method="post" >
 <div style="background:#E8E8E8; border-radius:5px;">
 <br/>
<b>Комментарии</b>
<br/>
<p style="border:white 3px solid; display: inline-block; padding:1%;">
    Заголовок:<br/>
     <input type="text" name="title" style="background:white; border-radius:5px;">
</p><br/>
<textarea type="text" name="txt" rows="20" style="border-radius:5px; margin:1%;"></textarea><br/>
<p style="border:white 3px solid; display: inline-block; padding:1%;">
Текстовый файл или изображение<br/>
   <input type="file" name="userfile">
</p>
<br/>
<input type="submit" value="Отправить" class="button"  />
<br/>
</form>
</div>
<br/>
<? require_once 'downer.html'?>
</body>
</html>