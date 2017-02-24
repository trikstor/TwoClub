<br/>
<div class="zx-pz">
  <div align="center">
    <h2>Может пригодится</h2>
  </div><br/>
  <div class="column">
<?php
$query  = "SELECT `id`, `title`, `desc` FROM topics WHERE predmet=' $subject' AND gdz='$gdz'  ";
  $result = $conn->query($query);
$rows = $result->num_rows;
$rrd=rand(0,$rows);
		$query  = "SELECT `id`, `title`, `desc` FROM topics WHERE predmet='$subject' AND gdz='$gdz'  LIMIT ".$rrd.",1";
  $result = $conn->query($query);
$rows = $result->num_rows;
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
	echo "<a href='".$row[0].".php' id='bright'>".$row[1]."|".$row[2]."</a><br/><hr/>";
  }
    $query="UPDATE userbility SET lastactive=now() WHERE user='$usert'";
    $result   = $conn->query($query);
?>
 </div>
</div>
<br/>