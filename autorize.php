<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Вход в систему | Клуб Двоечников</title>
<link rel="icon" href="http://twoclub.ru/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("div.spoiler div.name span").toggle(function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").show();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " -15px 0");
},function(){
$(this).parent("div.name").parent("div.spoiler").children("div.text").hide();
$(this).parent("div.name").parent("div.spoiler").css("backgroundPosition", " 0 -15px");
});
});
</script>
<style>
div.spoiler div.text {
display: none;
}
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
<form class="form-1" method="post" action="autorize.php"  >
					<p class="field">
						<input type="text" name="USER" placeholder="Логин">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="PW" placeholder="Пароль">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
                    <?php echo '<b>'.$a. ' + ' .$b. ' = </b>';?><input type="text" name="res" />
				</form>
<div style="border-radius:10px; background:background: rgba(255,255,255,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 ); position:fixed; left:1%; bottom:3%;">
<h2 style=" margin:3px; color:#4B4B4B; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; text-shadow:#D2D2D2 1px 1px 1px;"><a href="index.php" style="text-decoration:none;">Главная страница</a></h2>
</div>
<div align="center">
<div align="center" class= "spoiler" style="background:white; border-radius:5px; font-size:1em; width:20%;">
<div class= "name"><span>Забыли пароль ?</span></div>
<div class= "text">
<form method="post" action="autorize.php">
<input type='email' name='emt' placeholder="Ваш email тут">
</form>
<?php
include ('bd.php');

if ($email = $_POST['emt'] )
    {
$query = "SELECT user, epost, pass FROM `users` WHERE epost ='{$email}' LIMIT 1 ";
		$res = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($res)==1)
	{
        $row = mysql_fetch_array($res);
 
//если есть
 $name = $row['user']; 
 $email = $row['epost']; 
 $password = $row['pass']; 
  }
# 
# 
# /* тема/subject */ 

# 
# /* сообщение */ 
 $message = 'У вас новое сообщение, напоминаем ваш пароль: '.$password.'
 '; 
# 
# /* Для отправки HTML-почты вы можете установить шапку Content-type. */ 
 $headers= "MIME-Version: 1.0\r\n"; 
 $headers .= "Content-type: text/html; charset=utf-8 \r\n"; 
# 
# /* дополнительные шапки */ 

$headers .= "From:twoclub.ru <info@twoclub.ru>\r\n"; 
$subject = "Здравствуйте, $name! Напоминание пароля.";

#
# /* и теперь отправим из */ 
 mail($email, "=?utf-8?B?".base64_encode($subject)."?=", $message, $headers); 
        
        echo '
				
<center><h3>Пароль отправлен на Ваш Email!</h3></center>

 
 ';
}else{

        
    echo'<center><h3>Незарегистрированный или неправильный Email!</h3></center>';

}

?>
</div>
</div>
</div>
<?php 
  require_once 'login.php';
  $connection = new mysqli($host, $user, $pass, $data);

  if ($connection->connect_error) die($connection->connect_error);

  if (isset($_POST['USER']) &&
      isset($_POST['PW']))
  {
    $un_temp = mysql_entities_fix_string($connection, $_POST['USER']);
    $pw_temp = mysql_entities_fix_string($connection, $_POST['PW']);

	$query = "SELECT * FROM users WHERE user='$un_temp'";
    $result = $connection->query($query);
    if (!$result) die($connection->error);
	elseif ($result->num_rows)
	{
		$row = $result->fetch_array(MYSQLI_NUM);

		$result->close();

		$token=$row[1];
		$ad=$row[9];
		if ($token == $pw_temp and $security==1)
		{
$un_temp = strtolower($un_temp);
			$_SESSION['usertwcl'] = $un_temp;
			$_SESSION['titul'] = $row[2];
                        $_SESSION['avatar'] = $row[3];
setcookie ("username", "$un_temp", time() + n, "/", "twoclub.ru"); 
if($ad==1){
$_SESSION['admin']=1;
}
$ip=$_SERVER["REMOTE_ADDR"];
$query = "UPDATE users SET ip='$ip' WHERE user='$un_temp'";
    $result = $connection->query($query);
			die("<h2 align='center'>Вы успешно вошли в систему <br/>
<form method='post' action='profile.php'>
<button id='pp' value=".$un_temp." name='prf' onclick='javascript: document.forms[...].submit()'>Ваш профиль</button>
</form><br/> <br/></h2>");
		}
		else die("<b  align='center' style='color:red;'>Неверная комбинация</b>");
	}
	else die("<b align='center' style='color:red;'>Неверная комбинация</b>");
  }
  else
  {
    die ("<h2 align='center'>Пожалуйста введите ваши данные</h2><br/><br/>");
  }

  $connection->close();

  function mysql_entities_fix_string($connection, $string)
  {
    return htmlentities(mysql_fix_string($connection, $string));
  }	

  function mysql_fix_string($connection, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $connection->real_escape_string($string);
  }
?>
</body>
</html>