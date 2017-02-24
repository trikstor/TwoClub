<?php
session_start();
$nomer=$_SESSION['pre'];
$user=$_SESSION ['usertwcl'];
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
    $query  = "SELECT * FROM soobsh WHERE nomer=' $nomer' ORDER BY id DESC";
  $result = $conn->query($query);
$rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
if($j&1){
$uno='bb';
}else{
$uno='cc';
}
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo"<div class='".$uno."'><div class='vv'>".$row[0]."</div>".$row[3]."</div><br/>";
}
?>