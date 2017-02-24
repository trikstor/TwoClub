<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<META name="description" lang="ru" content="Тест по Географии, проверьте свои знания по предмету.Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<META name="keywords" lang="ru" content="Тест, География, страны, карты, баллы, ЕГЭ, картография, Клуб Двоечников, ответы, ГДЗ, Решебник, найдите, ЕГЭ, ГИА, главная">
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
<title> Тест ЕГЭ Математика(профильный уровень) по роману "Двенадцать Стульев" | Клуб Двоечников</title>

<script>
function startTimer() {
    var my_timer = document.getElementById("my_timer");
    var time = my_timer.innerHTML;
    var arr = time.split(":");
    var h = arr[0];
    var m = arr[1];
    var s = arr[2];
    if (s == 0) {
      if (m == 0) {
        if (h == 0) {
          alert("Время вышло");
          window.location.reload();
          return;
        }
        h--;
        m = 60;
        if (h < 10) h = "0" + h;
      }
      m--;
      if (m < 10) m = "0" + m;
      s = 59;
    }
    else s--;
    if (s < 10) s = "0" + s;
    document.getElementById("my_timer").innerHTML = h+":"+m+":"+s;
    setTimeout(startTimer, 1000);
  }
function setCookie(name, value) {
    document.cookie = name + "=" + value;
  }
function answer() {
var count = 0;
var a = new Array("21" ,"5", "11", "0,8", "-2", "8", "-2", "1690", "-0,75", "0,004", "5", "2");
var b = new Array("21" ,"5", "11", "0.8", "-2", "8", "-2", "1690", "-0.75", "0.004", "5", "2");
for (var i = 0; i <= 11; i++){
	var answ = a[i];
        var answ1 = b[i];
        var n = i+1;
	var k = document.getElementById('Q'+n).value;
        var elm = document.getElementById('T'+n);
	if(k.toLowerCase()==answ || k.toLowerCase()==answ1){
elm.innerHTML = "<br/><b style='background:green;'> Правильно </b>";
		count++;
	}else{
elm.innerHTML = "<br/><b style='background:red;'> Неверно, правильно: "+answ+"</b>";
	}
}
if(count==12) s="ОТЛИЧНО";
if(count<12)  s="ХОРОШО";
if(count<10)  s="УДОВЛЕТВОРИТЕЛЬНО";
if (count<7)  s="НЕУДОВЛЕТВОРИТЕЛЬНО";
setCookie("nok", count);
setCookie("s", s);
var elm = document.getElementById('s1');
elm.innerHTML = "Количество правильных ответов "+count+". Ваша оценка "+s+".";
}
</script>
<body onload="startTimer()">
<html oncontextmenu="return false;">
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<br/>

<div style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">
<div align="center">
  <h1><img src="em0.jpg" width="100%" />
    Тест ЕГЭ Математика
(профильный уровень) по роману "Двенадцать Стульев".
  </h1>
</div>
<div align="center">
<p><span id="my_timer" style=" float:left; margin-left:1%; color:green; font-size: 150%; font-weight: bold;">03:00:00</span></p>
<img src="em_dec.jpg" width="200px" />
</div>
<h2 align="center">Часть I </h2>
<div align="left">
<ol>
  <div id="T1"></div><li>Словарный  запас Эллочки-людоедки  составляет 30 слов, в ходе реплики Эллочка  произнесла 30% своего  словарного запаса, сколько  слов осталось не произнесенными в ходе реплики?</li><br/><input type="text" id="Q1"/><br />
  <div id="T2"></div><li>На  графике представлена зависимость месяца года (по горизонтали)  и среднемесячной температуры (по вертикали) в  Старгороде, определите температуру воздуха в апреле.
  <img src="1em.png" width="90%" /></li><br/><input type="text" id="Q2"/><br />
<div id="T3"></div><li>Найдите  площадь треугольника изображенного на рисунке, где  1 клетка- 1 кв, см.
  <img src="2em.png" width="90%"  /></li><br/><input type="text" id="Q3"/><br />
<div id="T4"></div><li>Вероятность  того, что Остап  Бендер завладеет стульями Щукина равна 0,3  , вероятность того,  что Остап Бендер не получит стулья театра Колумба равна 0,7 , а вероятность того, что Герой получит остальные  стулья равна 0,2 , найдите  вероятность того, что Остап  Бендер соберет полный комплект стульев.</li><br/><input type="text" id="Q4"/><br />
<div id="T5"></div><li>Найдите  корень уравнения: <img src="3em.png" width="67" height="38" /></li><br/><input type="text" id="Q5"/><br />
<div id="T6"></div><li>В  трапецию вписана окружность,  найдите площадь трапеции,  если sin  угла при основании трапеции равен 1/2,  а высота трапеции равна 2.</li><br/><input type="text" id="Q6"/><br />
<div id="T7"></div><li>Дан график производной функции f'(x), найдите точку максимума функции  на                                                                             промежутке x[-9;5],  в ответе укажите координату по x.
  <img src="4em.png" width="90%" /> </li><br/><input type="text" id="Q7"/><br />
<div id="T8"></div><li>В  правильном конусе проведено сечение,  параллельное основанию,  найдите обьем усеченного конуса,  если объем всего конуса равен 1755,  а высота конуса делится сечением как 1/2  считая от вершины.</li><br/><input type="text" id="Q8"/><br />
<div id="T9"></div><li>Найдите tgα , если cosα=5/3  , π/2&lt;x&lt;π</li><br/><input type="text" id="Q9"/><br />
<div id="T10"></div><li>Для  определения ценности бриллианта использовалась формула: <img src="em4.5.png" width="64" height="45" /> , где </li>
<p>p-цена.<br/>
  m-масса.<br/>
  q-качество огранки.<br/>
  f-прозрачность бриллианта.<br/>
  Найдите цену бриллианта (у.е), m=25г, q=50, f=-2.
</p><br/><input type="text" id="Q10"/><br />
<div id="T11"></div><li>Остап  Бендер и Щукин бегут навстречу друг другу,  скорость Щукина на 10  м/с больше  скорости Остапа Бендера,  они встретились через 10  минут. Найдите  скорость Остапа Бендера,  если они начали движение одновременно и расстояние между стартовыми позициями равно 12000 м.</li><br/><input type="text" id="Q11"/><br />
<div id="T12"></div><li>Найдите  максимум функции: <img src="em5.png" width="90" height="25" /></li><br/><input type="text" id="Q12"/><br />
</ol>
</div>
<div align="center">
<img src="em_dec.jpg" width="200px" />
</div>
<h2 align="center">Часть II</h2>
<div align="left">
<ol>
<li value="13">
  <p>Найдите корни уравнения (а) и проведите отбор на  промежутке x[0;2п].<br />
  </p>
  <p>&nbsp;</p>
</li>
<li>
  <p>Дана правильная  четырехугольная ABCDS пирамида со стороной основания=4 и боковой гранью=15, где  точка N делит сторону AS как 2/1  считая от вершины.  Найдите площадь сечения NBD.</p>
</li>
<li><img src="em15.png" width="290px" /></li>
<li>Дана трапеция ABCD вписанная в окружность, точка O – центр описанной около трапеции окружности и середина большего основания AD.
а.)Докажите, что треугольники: ABO, BOC, COD – равны.
б.)Найдите площадь трапеции ABCD, если прямая AC=10√6.
</li>
<li>
Остап Бендер взял кредит в банке на срок 8 месяцев. В конце каждого месяца общая сумма оставшегося долга увеличивается на 10%, а затем уменьшается на сумму, уплачиваемую Героем. Суммы, выплачиваемые в конце каждого месяца, подбираются таким образом, чтобы в результате сумма долга каждый месяц уменьшалась равномерно, то есть на одну и ту же величину. За весь срок кредитования Остап Бендер выплатил банку в общей сложности 16800 рублей. Какую сумму он взял в кредит?
</li>
<li>
На покупку  белых и черных стульев Киса Воробьянинов может затратить не более 160 рублей. Белый стул стоит 6 рублей, черный стул стоит 8 рублей. При закупке число белых стульев  не должно отличаться от числа черных стульев более чем на 10. Необходимо закупить максимально возможное суммарное количество стульев, при этом черных стульев нужно закупить как можно меньше.
А.) Сколько белых стульев можно закупить при данных условиях.
Б.) Сколько черных стульев можно закупить при указанных условиях.
В.) Можно ли закупить четное число белых и черных стульев.
</li>
</ol>
<a class="button" href="https://twoclub.ru/788.php">Открыть ответы на 2-ю часть.</a><br/>
</div>
</div>
<CENTER>
<P><textarea style="width:100%;" style="border:#FFF 1px solid;" id="s1" rows="5" readonly=""> </textarea></P>
<INPUT onclick="answer()" type="button" value="Показать результат (1-я часть)."/>
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query = "SELECT * FROM test_math ";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
$middle=$middle+$row[1];
}
$mball=$middle/$rows;
if(isset($_COOKIE['nok']) and isset($_COOKIE['s']) and $_COOKIE['nok']!=0){
if(isset($_SESSION['usertwcl'])){
	$usert=$_SESSION['usertwcl'];
}else{
       $trk=rand(5, 1005);
       $usert='Гость'.$trk;
}
 $a = $_COOKIE['nok'];
 $b = $_COOKIE['s'];
$query = "SELECT * FROM test_math WHERE user='$usert'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
if($rows!=0){
$query="UPDATE `test_math` SET `user`='$usert',`ball`='$a',`sub`='$b' WHERE user='$usert'";
 $result = $conn->query($query);
}else{
 $query = "INSERT INTO test_math VALUES('$usert', '$a', '$b', ' ')";
  $result = $conn->query($query);
}
setcookie ("nok", "", time() - 3600); 
setcookie ("s", "", time() - 3600); 
}
$query = "SELECT * FROM test_math WHERE sub='НЕУДОВЛЕТВОРИТЕЛЬНО'";
  $result = $conn->query($query);
  $rows1 = $result->num_rows;
$query = "SELECT * FROM test_math WHERE sub='УДОВЛЕТВОРИТЕЛЬНО'";
  $result = $conn->query($query);
  $rows2 = $result->num_rows;
$query = "SELECT * FROM test_math WHERE sub='ХОРОШО'";
  $result = $conn->query($query);
  $rows3 = $result->num_rows;
$query = "SELECT * FROM test_math WHERE sub='ОТЛИЧНО'";
  $result = $conn->query($query);
  $rows4 = $result->num_rows;
if($rows1>$rows2){
$k=$rows1;
}else{
$k=$rows2;
}
if($rows3>$rows1 and $rows3>$rows2){
$k=$rows3;
}
$p=$rows1/$k;
$l=$rows2/$k;
$r=$rows3/$k;
$m=$rows4/$k;
?>
&nbsp;&nbsp;&nbsp;&nbsp; 
<INPUT type="reset" value="Сбросить ответы"/> 
</CENTER>        
</form> 
<br/>
<hr/>
<div style="width:90%; overflow-x:auto;">
<b>Статистика теста</b>
<table width="100%" border="0" cellpadding="0.1">
  <tr>
    <td>Средний балл:<b> <?php echo $mball; ?></b></td>
    <td>
    Соотношение:
    <div id="static" style="background:red; width:<?php echo $p; ?>%;">2</div>
    <div id="static" style="background:yellow; width:<?php echo $l; ?>%;">3</div>
    <div id="static" style="background:blue; width:<?php echo $r; ?>%;">4</div>
    <div id="static" style="background:green; width:<?php echo $m; ?>%;">5</div>
    </td>
    <td>Прошли тест:<br/>
<?php
$query = "SELECT * FROM test_math ORDER BY id DESC limit 20";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo" ".$row[0]."(".$row[1].") ".$row[2]."<br/>";
}
?>
</td>
  </tr>
</table>
</div>
<?php require_once 'downer.html'; ?>