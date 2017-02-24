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
}else{
$le = 'Гость';
}
?>
<?php
if(isset($_POST['comment'])) {
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$ee=$_POST['comment'];
$pe=mysql_fix_string($conn, $ee);
$query  = "INSERT INTO sell (name,comment) VALUES('$le', '$pe')";
  $result = $conn->query($query);
}
?>
