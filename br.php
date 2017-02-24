     <div align="center" style="border:#666 2px solid; border-radius:5px;"><b>
<?
   require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
$query  = "SELECT * FROM users";
  $result = $conn->query($query);
  $rows = $result->num_rows;
 echo "Зарегистрированных пользователей:".$rows."  ";
$query  = "SELECT * FROM topics";
  $result = $conn->query($query);
  $rows = $result->num_rows;
echo "Вопросов: ".$rows." ";
$query  = "SELECT * FROM stat";
  $result = $conn->query($query);
  $rows = $result->num_rows;
echo "Статей: ".$rows."";
  ?>
  </b></div>