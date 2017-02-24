<?session_start()?>
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$us=$_SESSION['usertwcl'];
    $query  = "SELECT * FROM banlist WHERE username='$us'";
  $result = $conn->query($query);
$rows = $result->num_rows;
if($rows>0){
include_once 'ban.html';
}else{
$url=$_SERVER['REQUEST_URI'];
$resp = substr($url, 1, 9);
if($resp=='downloads'){
$id=substr($url, 1, 3);
	include_once "download.php";
	$l=5;
}
$resp = substr($url, 1, 1); 
if($resp=='b'){
$id=substr($url, 1, -4);
include_once 'edu_obrazeiz.php';
$l=5;
}
$url=$_SERVER['REQUEST_URI'];
$resp = substr($url, 1, 1); 
if($resp=='t'){
$id=substr($url, 1, -4);
include_once 'obrazeiz2.php';
$l=5;
}
$resl = substr($url, 1, 4);
if(is_numeric($resl)){
$id=substr($url, 1, 3);
	include_once "obrazeiz1.php";
	$l=5;
}
$rest = substr($url, 1, 1); 
if($rest=='q'){
        $id=substr($url, 1, 5);
	include_once "obrazeiz.php";
	$l=5;
}
$pul=substr($url, 1); 
if($l!=5 and !empty($pul)){
include_once "$pul";	
}
if(empty($pul)){
include_once 'index.php';
}
}
$ip=$_SERVER['REMOTE_ADDR'];
$db = mysql_connect ("localhost","u0064_twocl","4480338955385") or die (mysql_error());
mysql_select_db ("u0064007_fast",$db) or die (mysql_error());
mysql_query("INSERT INTO ip_journal VALUES('$ip', '$asadsesdd')");
?>