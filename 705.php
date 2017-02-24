<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META name="description" lang="ru" content="Решение 2 части ЕГЭ по Информатике | Клуб Двоечников - Из двоечника в отличника! TwoClub.ru -  это своеобразная социальная сеть, где ученики различных учебных заведений: школы, вузы, техникумы, задают вопросы связанные с учебой, и отвечают на них.">
<title>Решение 2 части ЕГЭ по информатике | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://twoclub.ru/styles.css"/>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
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
<style type="text/css">
.pv11 {
	color: #804040;
}
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
require_once 'header.php'; $eeer=1;}else{
	require_once 'header1.php';}
?>
<div style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<h1 align="center" class="pv11">Решение 2 части ЕГЭ по Информатике</h1>
<h1 align="left">24. </h1>
<p>Требовалось написать программу, которая решает неравенство</p>
<p><strong>(x+a)/(bx)&lt;0</strong></p>
<p>относительно x для любого ненулевого числа b и любого неотрицательного числа a и (a≥0, b≠0), введенных с клавиатуры. Все числа считаются действительными. Программист торопился и написал программу неправильно.</p>
<table cellpadding="0" cellspacing="0" border="3">
  <tbody>
    <tr class="pv11">
      <td colspan="1" rowspan="1"><p>ПРОГРАММА НА ПАСКАЛЕ</p></td>
      <td colspan="1" rowspan="1"><p>ПРОГРАММА НА БЕЙСИКЕ</p></td>
      <td colspan="1" rowspan="1"><p>ПРОГРАММА НА СИ</p></td>
    </tr>
    <tr>
      <td colspan="1" rowspan="1"><p>var a,b,x: real;<br />
        begin<br />
        readln(a,b,x);<br />
        if a = 0 then<br />
        if b &gt; 0 then<br />
        write ('нет решений')<br />
        else<br />
        write('x &gt; 0 или <br />
        x &lt;0')<br />
        else<br />
        write(-a,'&lt; x &lt;0');<br />
        end.</p></td>
      <td colspan="1" rowspan="1"><p>INPUT a, b, x<br />
        IF a = 0 THEN<br />
        IF b &gt; 0 THEN<br />
        PRINT &quot;нет решений&quot;<br />
        ELSE<br />
        PRINT &quot;x&gt;0 или <br />
        x&lt;0&quot;<br />
        ENDIF<br />
        ELSE<br />
        PRINT -a,&quot;&lt;0&quot;<br />
        ENDIF<br />
        END&lt;0&quot;<br />
      </p></td>
      <td colspan="1" rowspan="1"><p>void main(void)<br />
        { float a,b,x;<br />
         scanf(&quot;%f%f%f&quot;,<br />
         &amp;a,&amp;b,&amp;x);<br />
         if (a==0)<br />
          if (b&gt;0)<br />
         printf (&quot;нет решений&quot;);<br />
         else<br />
         printf(&quot;x&gt;0 или <br />
        x&lt;0&quot;);<br />
         else<br />
         printf(&quot;%f&lt;x&lt;0&quot;,-a);<br />
        }<br />
          <br />
      </p></td>
    </tr>
  </tbody>
</table>
<p>Последовательно выполните три задания:</p>
<p>1) Приведите пример таких чисел<strong> a ,b, x,</strong> при которых программа неверно решает поставленную задачу.</p>
<p>2) Укажите, какая часть программы является лишней.</p>
<p>3) Укажите, как нужно доработать программу, чтобы не было случаев ее неправильной работы. (Это можно сделать несколькими способами, поэтому можно указать любой способ доработки исходной программы).</p>
<h3>Решение:</h3>
<p>Для начала нужно понять, что делает данная программа. Эта программа должна проверять аргументы <strong>a </strong>и <strong>b</strong>, а после этого выводить возможное значение аргумента x.</p>
<p>Решений нет, если <strong>b&gt;0</strong>, а<strong> а=0, b </strong>не может быть равно 0 по условию, и этот случай мы не проверяем. Если <strong>а</strong> не равно 0 и <strong>b</strong> больше нуля, то <strong>-a&lt;x&lt;0</strong>. Когда<strong> а=0</strong> и <strong>b&lt;0</strong>, тогда <strong>x&gt;0 </strong>или <strong>x&lt;0</strong>.</p>
<p>Представим выводы в виде таблицы:</p>
<p><strong>(x+a)/(bx)&lt;0</strong></p>
<table width="30%" border="3" cellpadding="0.1">
  <tr class="pv11">
    <td>Условие</td>
    <td>Значение x</td>
  </tr>
  <tr>
    <td>a&gt;0 &amp; b&gt;0</td>
    <td>0&lt;x&lt;-a</td>
  </tr>
  <tr>
    <td>a&gt;0 &amp; b&lt;0</td>
    <td>x&gt;0, x&lt;-a</td>
  </tr>
  <tr>
    <td>a=0 &amp; b&gt;0</td>
    <td><em>нет решений</em></td>
  </tr>
  <tr>
    <td>a=0 &amp; b&lt;0</td>
    <td><em>x&gt;0 или x&lt;0</em></td>
  </tr>
</table>
<p>1.) Любые числа из промежутка <strong>a&gt;0 &amp; b&lt;0</strong>.</p>
<p>2.) Не надо считывать x и указывать его в перечислении переменных.</p>
<p>3.)</p>
<p>Доработка:</p>
<p><em>(СИ)</em></p>
<p><em>void main(void)<br />
{ float a,b;<br />
 scanf(&quot;%f%f%f&quot;,<br />
 &amp;a,&amp;b);<br />
 if (a==0)<br />
  if (b&gt;0)<br />
 printf (&quot;нет решений&quot;);<br />
 else<br />
 printf(&quot;x&gt;0 или x&lt;0&quot;);<br />
 else</em></p>
<p><em>if(b&gt;0)</em></p>
<p><em>printf(&quot;%f&lt; x &lt;0&quot;, -a);</em></p>
<p><em>else</em></p>
<p><em>printf(&quot;x&gt;0 или x&lt;%f&quot;,-a);<br />
  }<br />
  </em><br />
</p>
<h1><strong>25.</strong></h1>
<p>Опишите на русском языке или одном из языков программирования алгоритм поиска номера первого из двух последовательных элементов в целочисленном массиве из 30 элементов, произведение которых максимально (если таких пар несколько, то можно выбрать любую из них).</p>
<h3>Решение:</h3>
<p>Данный алгоритм ищет произведение двух элементов массива с наибольшим произведением.</p>
<p><img src="images/novved.png" /></p>
<p>Напишем программу по предложенной схеме.</p>
<p>(СИ)</p>
<p>#define n 29;</p>
<p><em>void main(void)<br />
{ integer i, res, j, a[n];</em></p>
<p>for(i = 0; i&lt; 30; i++){</p>
<p><em>scanf(&quot;%d&quot;, j);</em></p>
<p><em>a[i]=j;</em></p>
<p><em>}</em></p>
<pre>/* Получаем элементы массива. */<em><br /></em></pre>
<p><em>res=0;</em></p>
<p>j=0;</p>
<p>for(i = 0; i&lt; 30; i++){</p>
<p>if(a[i]*a[i+1]&gt;res){</p>
<p>res=a[i]*a[i+1];</p>
<pre>/* Получает произведение двух элементов массива. */
</pre>
<p>j=i;</p>
<p>}</p>
<p>}</p>
<pre>/* Ищем наибольшее произведение и заносим его номер в переменную. */
</pre>
<p><em>printf(&quot;%d&quot;, j);<br />
  }<br />
</em></p>
<h1><strong>26.</strong></h1>
<p>Два игрока, Петя и Ваня, играют в следующую игру. Перед игроками лежит  куча камней. Игроки ходят по очереди, первый ход делает Петя. За один ход  игрок может добавить в кучу один камень или увеличить количество камней в  куче в два раза. Например, имея кучу из 15 камней, за один ход можно получить  кучу из 16 или 30 камней. У каждого игрока, чтобы делать ходы, есть  неограниченное количество камней.  Игра завершается в тот момент, когда количество камней в куче становится не  менее 22. Победителем считается игрок, сделавший последний ход, то есть  первым получивший кучу, в которой будет 22 или больше камней.  В начальный момент в куче было S камней, 1 ≤ S ≤ 21.  </p>
<p>Говорят, что игрок имеет выигрышную стратегию, если он может  выиграть при любых ходах противника. Описать стратегию игрока –  значит описать, какой ход он должен сделать в любой ситуации, которая  ему может встретиться при различной игре противника.</p>
<p> Выполните следующие задания. Во всех случаях обосновывайте свой ответ.  </p>
<p>1. а) При каких значениях числа S Петя может выиграть первым ходом?  Укажите все такие значения.   </p>
<p>б) Укажите такое значение S, при котором Петя не может выиграть за  один ход, но при любом ходе Пети Ваня может выиграть своим первым  ходом. Опишите выигрышную стратегию Вани.</p>
<p> 2. Укажите два значения S, при которых у Пети есть выигрышная  стратегия, причем (а) Петя не может выиграть первым ходом, но (б) Петя  может выиграть своим вторым ходом, независимо от того, как будет  ходить Ваня.  Для указанных значений S опишите выигрышную стратегию Пети.</p>
<p> 3. Укажите такое значение S, при котором у Вани есть выигрышная  стратегия, позволяющая ему выиграть первым или вторым ходом при  любой игре Пети, но при этом у Вани нет стратегии, которая позволит ему  гарантированно выиграть первым ходом.  Для указанного значения S опишите выигрышную стратегию Вани.  Постройте дерево всех партий, возможных при этой выигрышной  стратегии Вани (в виде рисунка или таблицы). На ребрах дерева  указывайте, кто делает ход, в узлах – количество камней в позиции.</p>
<h3>Решение:</h3>
<p>1 ≤ S ≤ 21; Победа при S&gt;=22; Шаги: S+1 или S*2.</p>
<p>1.<br />
  а.) Петя может выиграть первым ходом  тогда,  когда  в куче будет &gt;= 11 камней. Тогда Петя может умножить количество камней на 2  и сразу выиграть, получив &gt;= 22 камней.<br />
  б.) Такое возможно,  когда  в куче 10 камней, тогда Петя добавляет 1 камень или увеличивает их количество в  два раза и Ваня получает &gt;=22 камней при увеличении количества камней в два  раза.<br />
  2.<br />
  Чтобы получить искомое число нужно вычесть 1 из 11, число 10  можно получить 5*2 и 9+1.<br />
  Построим дерево игры для выигрышных комбинаций.</p>
<table border="1" cellspacing="0" cellpadding="0" width="655">
  <tr>
    <td valign="top" class="pv11"><br />
      Петя (1 ход) </td>
    <td width="218" valign="top"><p>Вася (1 ход)</p></td>
    <td width="218" valign="top"><p>Петя (2 ход)</p></td>
  </tr>
  <tr>
    <td width="218" valign="top"><p>9 (+1)</p></td>
    <td width="218" valign="top"><p>10 (+1)</p></td>
    <td width="218" valign="top"><p>11 (*2)</p></td>
  </tr>
  <tr>
    <td width="218" valign="top"><p>5 (*2)</p></td>
    <td width="218" valign="top"><p>10 (+1)</p></td>
    <td width="218" valign="top"><p>11(*2)</p></td>
  </tr>
</table>
<p>При построении дерева игры предполагается то, что игроки  будут действовать рационально.<br />
  3.</p>
<h1><strong>27.</strong></h1>
<p>При регистрации в компьютерной системе каждому пользователю выдаётся  пароль, состоящий из 15 символов и содержащий только символы  из 12-символьного набора: А, В, C, D, Е, F, G, H, К, L, M, N. В базе данных  для хранения сведений о каждом пользователе отведено одинаковое  и минимально возможное целое число байт. При этом используют  посимвольное кодирование паролей, все символы кодируют одинаковым  и минимально возможным количеством бит. Кроме собственно пароля, для  каждого пользователя в системе хранятся дополнительные сведения, для чего  отведено 12 байт на одного пользователя.  Определите объём памяти (в байтах), необходимый для хранения сведений  о 50 пользователях. В ответе запишите только целое число – количество  байт.</p>
<h3>Решение:</h3>
<hr/>
<h2>Источники задач:</h2>
<p><a href="http://nsportal.ru/shkola/informatika-i-ikt/library/2015/05/01/informatika-i-ikt-zadanie-24-ege2015">http://nsportal.ru/shkola/informatika-i-ikt/library/2015/05/01/informatika-i-ikt-zadanie-24-ege2015</a></p>
<p><a href="http://nsportal.ru/shkola/informatika-i-ikt/library/2015/05/01/informatika-i-ikt-zadanie-25-ege2015">http://nsportal.ru/shkola/informatika-i-ikt/library/2015/05/01/informatika-i-ikt-zadanie-25-ege2015</a></p>
<p><a href="http://ege-go.ru/">http://ege-go.ru/</a></p>
<p><a href="http://www.licey2-nv.ru/">http://www.licey2-nv.ru/</a></p>
<hr/>
<p><em><strong>twoclub.ru 2014-2016</strong></em></p>
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
$id='705';
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