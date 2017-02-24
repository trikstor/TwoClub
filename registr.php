<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Регистрация | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<style>
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
#pp{
padding:1%;
background:blue;
border-radius:5px;
border:2px black solid;
font-size:24px;
}
</style>
</head>
<body>
	<?php
	if($_POST['res'] == $_SESSION['res']){
$security=1;
}
$a = rand(1,10);
$b = rand(1,10);
$_SESSION['res'] = $a + $b;
?>
<div class="awa" align="center">
<br/>
<br/>
<h1>Регистрация</h1>
<div class="wrapper">
<form method="post" action="registr.php">
<p>
<div id="ppz">
<p>Только английский алфавит</p>
<label>Ваше имя</label>
<input type="text" name="usern" />
</select>
</p>
</div>
<br/>
<div id="ppz">
<p>
<label>Придумайте пароль</label>
<input type="password" name="passw"/>
</p>
</div>
<br/>
<div id="ppz">
<p>
<label>Электpoпочта</label>
<p>С помощью эл.адреса вы сможете восстановить пароль и узнать о новых ответах на ваши вопросы</p>
<input type="email" name="epost"/>
</p>
</div>
<br/>
<div id="ppz">
<p>
<label>Немного о вас</label>
<textarea name="opisanie" rows="5"></textarea>
</p>
<br/>
<?php echo '<b>'.$a. ' + ' .$b. ' = </b>';?><input type="text" name="res" />
</div>
</div>
<input  type="submit" value="Отправить" id="abb"/>
</form>
</div>
<br/>
<br/>
</div>
<div id='swe'>
<?   
 function fix_string($string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
  }
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
if(isset($_POST['usern']) and isset($_POST['passw']) and isset($_POST['epost'])){
 $sec=1;
$rwe=$_POST['usern'];
}else{
	echo "<h2 align='center'>Вы заполнили не все поля</h2>";
}
if($sec==1){
	$query="SELECT * FROM users WHERE MATCH(user) AGAINST('".$rwe."')";
	$result = $conn->query($query);
  if (!$result) die ("Ошибка базы данных :  " . $conn->error);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$pw=$row[0];
  }
  if($pw==$_POST['usern']){
	  echo "<h2 align='center'>Пользователь с именем ".$rw." уже существует.</h2>";
  }else{
	 $sec++; 
  }
}
$cucus=$_POST['usern'];
if (eregi("#[а-яё]+#iu", $cucus)){
	$sec=0;
echo '<h2 align="center" style="color:red">Обнаружена кириллица в поле "Имя".</h2>';
}
if($sec==2 and isset($_POST['epost']) and isset($_POST['usern']) and $security==1){
	$usert = fix_string($_POST['usern']);
  $passw = fix_string($_POST['passw']);
  $opisanie = $_POST['opisanie'];
  $epost = fix_string($_POST['epost']);
  $ava='noava.png';
$balls=5;
$ipp= $_SERVER['REMOTE_ADDR'];
$query  = "INSERT INTO users VALUES('$usert', '$passw', '$titul','$ava' ,'$posts','$balls','$opisanie','$epost','$ipp', '0')";
  $result = $conn->query($query);
$query  = "INSERT INTO userbility VALUES('$usert', 'now()')";
  $result = $conn->query($query);
  echo '<h2 align="center" id="pp">Вы успешно зарегистрировались, теперь <a href="autorize.php"> войдите </a> в систему под своим именем.<h2/>';
}
?>
<div style="border-radius:10px; background:background: rgba(255,255,255,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 ); position:fixed; left:1%; bottom:3%;">
<h2 style=" margin:3px; color:#4B4B4B; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; text-shadow:#D2D2D2 1px 1px 1px;"><a href="index.php" style="text-decoration:none; color:black;">Главная страница</a></h2>
</div>
<h3 style=" color:#CFCFCF;" align="center">
Регистрируясь на сайте, вы соглашаетесь с <a href="news.html">правилами</a> проекта.
</h3>
<h3 style="color:#CFCFCF; font-size:20px;" align="center">
Заполняйте поле "имя пользователя" латинскими буквами.
</h3>
</div>
</body>
</html>