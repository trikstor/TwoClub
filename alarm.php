<?php
 require_once 'login.php';
  $conn = new mysqli($host, $user, $pass, $data);
  $id=$_POST['id'];
 $name=$_POST['nm'];
$name=strip_tags($name);
if(isset($_POST['nm'])){
  $query  = "INSERT INTO button VALUES('$id', '$name')";
    $result = $conn->query($query);
}
?>