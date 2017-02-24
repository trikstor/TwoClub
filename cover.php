<div>
<h2 style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; background:#999;" align="center"> Решебник "<? echo $title ?>" </h2>
</div>
<div align="center" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $query  = "SELECT * FROM gdz WHERE id=$id";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка базы данных.");
    $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	$pol=$row[3];
	$query  = "SELECT * FROM topics WHERE id='$pol'";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка базы данных.");
    $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo"<a href='".$row[1].".php' style='text-decoration:none; color:black;' >".$row[8]." | ".$row[7]."</a><br/>";
  }

  }
  ?>
  </div>
