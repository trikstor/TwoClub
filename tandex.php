<?php session_start();
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$user=$_SESSION['usertwcl'];
$query  = "SELECT * FROM answershare WHERE user = '$user'";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo "a";
}
?>