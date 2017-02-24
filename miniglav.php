<div align="center" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; background:#E6E6E6;"><h2>Новое за последний день</h2></div>
﻿<div align="center">
<?php
require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $date_time_array = getdate( time() );
$query  = "SELECT * FROM topics ";
  $result = $conn->query($query);
  if (!$result) die ("Ошибка системы");

  $rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
if($date_time_array['year']==$row[12]){
	if($date_time_array['mon']==$row[11]){
	$dt=$row[3];
	$xq=$date_time_array['wday'];
	if($dt==$xq and $row[9]=='open'){
echo "<h3><a style='text-decoration:none; color:black;' href='posts/".$row[1].".php'>".$row[8]." | ".$row[7]." | ".$row[3]."</a></h3><br/>";
	}
	}
}
  }
	?>
</div>