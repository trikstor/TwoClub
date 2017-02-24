<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Уведомление</title>
</head>
<body>
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
if(isset($_POST['q1'])){
$polonez=$_POST['q1'];
$query="UPDATE button SET za=za+1 WHERE id='$polonez'";
  $result = $conn->query($query);
echo'<h1>Спасибо за голос </h1>';
  $query  = "SELECT za FROM button ";
  $result = $conn->query($query);
  if (!$result) die ("Ответов пока нет, станьте первым");

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo $row[0];
}
}
  ?>
</body>
</html>