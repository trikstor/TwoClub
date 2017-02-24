<?session_start()?>
<?php
  function mysql_fix_string($conn, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
  }
?>

<?php
if(isset($_SESSION['usertwcl'])){
$le = $_SESSION['usertwcl'];
}
?>
<?php
$zero=$_SESSION['pre'];
if(!empty($_POST['comment']) and isset($_SESSION['pre'])) {
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$ee=$_POST['comment'];
$pe=mysql_fix_string($conn, $ee);
$pe= htmlspecialchars($pe);
$query  = "INSERT INTO soobsh (name, nomer, talk, become) VALUES('$le', '$zero', '$pe', 0)";
  $result = $conn->query($query);
}
?>
