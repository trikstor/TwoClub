<?session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Админ Панель</title>
    <style>
body {
    background-image: url(../images/ph.png);
    background-position: center center;
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-color:#464646;
}
@media only screen and (max-width: 767px) {
    body {
        background-image: url(../images/ph.png);
    }
}

/* DEMO */
*,
*:before,
*:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
body{
	margin:0;
	padding:0;
	font:0.875em/1.48 arial,tahoma;
}
.container-tab{
	margin:auto;
	max-width:800px;
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
</head>
<body>
<div align="center" >
<h2>Клуб Двоечников</h2>
<h3>Админ панель / Support</h3>
<div class="container-tab">

	<ul class="accordion-tabs">
		<li class="tab-head-cont">
			<a href="#" class="is-active">Обращения в поддержку</a>
			<section>
				  <form method="post" action="" id="form_id">

<?php
if($_SESSION['admin']==1){
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  if(isset($_POST['tp'])){
	  $tp=$_POST['tp'];
   $query  = "DELETE FROM counter WHERE id='$tp'";
    $result = $conn->query($query);
}
 $query  = "SELECT * FROM counter ";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo" ".$row[0]."<br/>".$row[1]."<br/> <input type='hidden' name='tp' value='".$row[0]."'> <input type='submit' value='удалить' /><hr/>";
  }
}else{
echo"вы не обладаете правами модератора";
}
?>
        </form>
<br/>
			</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Журнал посещений</a>
			<section>
<br/>
<?php
if($_SESSION['admin']==1){
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
 $query  = "SELECT * FROM ip_journal ORDER BY id DESC 
 LIMIT 50 ";
  $result = $conn->query($query);

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

$query1="SELECT * FROM users WHERE ip='$row[0]'";
$result1 = $conn->query($query1);
 $rows1 = $result1->num_rows;
if($rows1=1){
for ($j1 = 0 ; $j1 < $rows1 ; ++$j1)
  {
    $result1->data_seek($j1);
    $row1 = $result1->fetch_array(MYSQLI_NUM);
    $rt=$row1[0];
}
}
	echo $row[0]." | ".$rt."<br/>";
}
if($rows>50){
 $query  = "DELETE * FROM ip_journal ORDER BY id ASC LIMIT 30";
  $result = $conn->query($query);
}
}else{
echo"вы не обладаете правами модератора";
}
?>
			</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Бан</a>
			<section>
				<div id="result_div_id">
<form action="banip.php" method="post">
по ip<input type="checkbox" name="bantp" value="1" /><br/>
<input type="text" name="user" />
<input type="submit" />
</form>
<?php
if($_SESSION['admin']==1){
$username=$_POST['user'];
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query="SELECT ip FROM users WHERE user='$username'";
$result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$ip=$row[0];
  }
  if(isset($ip)){
	  echo "ip этого пользователя ".$ip."";
	  $query  = "INSERT INTO banlist VALUES('$ip', '$username')";
  $result = $conn->query($query);
if($_POST['bantp']==1){
$ban = "Deny from ".$ip."";
$o = @fopen(".htaccess", "a+");
$write = @fputs($o, $ban);
fclose($o);
}
  }
  echo"<hr/><h2>Уже забанены</h2>";
  $query="SELECT * FROM banlist";
$result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo"".$row[0]."".$row[1]."<form action='aut1.php' method='post'><button value=".$row[0]." name='delete' onclick='javascript: document.forms[...].submit()'>Удалить</button></form><br/>";
  }
if(isset($_POST['delete'])){
$delete=$_POST['delete'];
$query  = "DELETE FROM banlist WHERE ip='$delete'";
    $result = $conn->query($query);
}
}
?>
</div> 
<hr/>
<b>Бан ip</b>
<form action="aut1.php" method="post">
<input type="text" name="user1" />
<input type="submit" />
</form>
<?php
if(isset($_POST['user1'])){
$ip1=$_POST['user1'];
$ban = "Deny from ".$ip1."";
$o = @fopen(".htaccess", "a+");
$write = @fputs($o, $ban);
fclose($o);
}
?>
			</section>
		</li>
		<li class="tab-head-cont">
			<a href="#">Жалобы</a>
			<section>
				<div id="result_div_id">
  </div>
        <br/>
                <form method="post" action="" id="form_id">

<?php
if($_SESSION['admin']==1){
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  if(isset($_POST['tp'])){
	  $tp=$_POST['tp'];
   $query  = "DELETE FROM button WHERE id='$tp'";
    $result = $conn->query($query);
}
 $query  = "SELECT * FROM button ";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo"<a href='".$row[0].".php'>".$row[1]."</a> <input type='hidden' name='tp' value='".$row[0]."'> <input type='submit' value='удалить' /><br/>";
  }
}else{
echo"вы не обладаете правами модератора";
}
?>
        </form>
</div>
<br/>
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
<div id="result_div_id">
  </div>
        <br/>
<b>Список пользователей:</b><br/>
<?php
if($_SESSION['admin']==1){
$query  = "SELECT * FROM users ";
  $result = $conn->query($query);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo $row[0]." | ".$row[3]." | ".$row[6]." | ".$row[8]."<br/>";
}
}
?>
<br/>
<hr/>
<a href="index.php">Главная</a> | © twoclub.ru - Образовательный Портал 2014-2015
</body>
</html>