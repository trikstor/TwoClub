<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Перевод чисел в любую систему счисления онлайн. Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="система счисления перевод систем счисления онлайн перевести число из десятичной двоичной шестнадцатиричной в десятичную двоичную шестнадцатиричную Клуб Двоечников">
<title>Перевод систем счисления онлайн | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="jquery.glide.js"></script>
<style>
select input{
	margin:1%;
}
#a1{
	font-size:1em;
	border:#4B4B4B 2px solid;
	border-radius:5px;
	padding:1%;
}
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
		<script>
function reshenie() {

var N,StringN,From,To,K;
StringN=document.getElementById('inN').value;
N=Math.round(document.getElementById('inN').value);
To=parseFloat(document.getElementById('nTo').value);
var LengthN = StringN.length;
var outputstring="Ход решения:<br />Делим число на "+To+", если не делится нацело, то выччитаем единицу, и прибавляем ее после<div style='color:brown;'>";
var outputstring1="Ответ: ";



From=parseFloat(document.getElementById('nFrom').value);

var OTV = new Array();

var i=0;


if (document.getElementById('FROMTEN').checked==true){ //Из десятичной

var j=0;
K=N;
	if (N>=To) {
		while (K>=To){
		outputstring += "<br />"+K+" = ";
		i=Ostatok(K,To);
		K=(K-i)/To;
		OTV[j]=i; 
		outputstring += K+"·"+To+" + "+i+"";
				if (To==16){
			if (i==10) {OTV[j]="A";outputstring += " ("+i+" записывается как A)";}
			if (i==11) {OTV[j]="B";outputstring += " ("+i+" записывается как B)";}
			if (i==12) {OTV[j]="C";outputstring += " ("+i+" записывается как C)";}
			if (i==13) {OTV[j]="D";outputstring += " ("+i+" записывается как D)";}
			if (i==14) {OTV[j]="E";outputstring += " ("+i+" записывается как E)";}
			if (i==15) {OTV[j]="F";outputstring += " ("+i+" записывается как F)";}
				}
		j=j+1;
		}
		OTV[j]=Ostatok(K,To);
		outputstring += "</div><br />Последний множитель перед "+To+" равный "+OTV[j]+" записываем первым.<br />Затем записываем найденные остатки в обратном порядке.<br /><b>Ответ: </b>";
				if (To==16){
			if (OTV[j]==10) {OTV[j]="A";}
			if (OTV[j]==11) {OTV[j]="B";}
			if (OTV[j]==12) {OTV[j]="C";}
			if (OTV[j]==13) {OTV[j]="D";}
			if (OTV[j]==14) {OTV[j]="E";}
			if (OTV[j]==15) {OTV[j]="F";}
				}


	//Выписываем ответ
	var last=OTV.length-1;
	
		for (var m=last;m>=0;m=m-1){
		outputstring += OTV[m];
		outputstring1 += OTV[m];
		}
	}
	else {
		outputstring = "";
		outputstring1 = "Ответ: "+N+"";
				if (To==16){
			if (N==10) {outputstring1 = "A";}
			if (N==11) {outputstring1 = "B";}
			if (N==12) {outputstring1 = "C";}
			if (N==13) {outputstring1 = "D";}
			if (N==14) {outputstring1 = "E";}
			if (N==15) {outputstring1 = "F";}
				}
	}
outputstring += "";
outputstring1 += "";
} //Из десятичной end//////////////////////////////////////////////

else{//Перевод в десятичную begin///////////////////////////////////
var Koeff = new Array(LengthN);
var m=0;
outputstring="Ход решения:<br />Выписываем все цифры заданного числа в обратном порядке и домножаем каждую на "+From+" в степени 0, 1, 2 и т.д. Затем все суммируем.<br />"+StringN+"<sub>"+From+"</sub> = ";

	for (m=0;m<LengthN;m++){
		
				Koeff[m]=document.getElementById('inN').value.charAt(m);//parseFloat(StringN[m]);
			if (From==16){
				
				if (Koeff[m]=='A') {Koeff[m] = 10;}
				if (Koeff[m]=='B') {Koeff[m] = 11;}
				if (Koeff[m]=='C') {Koeff[m] = 12;}
				if (Koeff[m]=='D') {Koeff[m] = 13;}
				if (Koeff[m]=='E') {Koeff[m] = 14;}
				if (Koeff[m]=='F') {Koeff[m] = 15;}
			}
	}

	var OTVET=0;
	var j=0;
				OTVET += Koeff[LengthN-j-1]*Stpn(From,j);
				outputstring += " "+Koeff[LengthN-j-1]+"·"+From+"<sup>"+j+"</sup>";
			for (j=1;j<LengthN;j++){
		
				OTVET += Koeff[LengthN-j-1]*Stpn(From,j);
				outputstring += " + "+Koeff[LengthN-j-1]+"·"+From+"<sup>"+j+"</sup>";
			}  
		outputstring += " = "+OTVET+"<sub>10</sub>";
		outputstring1 += OTVET+"";	
	
	
	if(outputstring1=='Ответ: NaN'){
	alert('Проверьте введенные данные.');
	return;
	}
	

}//Перевод в десятичную end////////////////////////////////////////////


document.getElementById('output1').innerHTML = outputstring1;
document.getElementById('output').innerHTML = outputstring;
return;	
}






function Ostatok(KK,nn){
	for (var ii=0; ii<nn; ii++){
		if ( Math.round((KK-ii)/nn)==((KK-ii)/nn) ) 
		{return ii;}
	}
return 0;
}


function Stpn(R,p){
var r=1; for (i=0;i<p;i++) {r=r*R;}
return r;}

</script>		




 	<noscript>
  		<strong>В вашем браузере отключен Javascript. <br>
			Вы не сможете произвести вычисления :(</strong>
    </noscript>

<center>

<form name="form" id="a1">
Введите число <input type="text" id='inN' size="16" maxlength="14" value = "0" >
  <INPUT CHECKED type=radio id=FROMTEN name=METOD>
<label for="FROMTEN">
  из десятичной в
  <select id=nTo name=element_nTo>
<option value="2">двоичную</option>
<option value="8">восьмиричную</option>
<option value="16">шестнадцатиричную</option>
</select> 
</label>
<input type="radio" id=TOTEN name="METOD" />
<label for="TOTEN">
  из
    <select id=nFrom name=element_nTo>
<option value="2">двоичной</option>
<option value="8">восьмиричной</option>
<option value="16">шестнадцатиричной</option>
</select>   
в десятичную
</label>
<br/>
<br/>
<input type='button' value="Вычислить" name="B1" class="asd" onclick="reshenie();">
<p> </p>
<p align="left" style='text-align: center'>
<span id="output1"></span>
</p>
<p align="left">
<span id="output"> </span>
</p>
</form>
</center><br>
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