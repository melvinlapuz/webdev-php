<?php
SESSION_START();
require_once 'dbcon.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  if($username == "admin" && $password == "123"){
    $_SESSION['status'] = "login";
    Header('Location: ../admin/admin.php');
  }else{
    Header('Location: ../testing.php');
  }
   
} else {
  $_SESSION['error'] = "INVALID USERNAME OR PASSWORD";
  Header('Location: ../index.php');
}
$conn->close();
?>