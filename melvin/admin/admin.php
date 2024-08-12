<?php
SESSION_START();
require_once '../config/dbcon.php';
include "../plugin.php";
if ($_SESSION['status'] == "login"){
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-duotone fa-solid fa-lock"></i> Welcome Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-regular fa-user"></i> Account</a>
          
          <ul class="dropdown-menu">
            <form method="POST" action="../index.php">
           <input type="submit" class="btn btn-Light" value="Logout" style="color: black;">
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Table bootstrap -->
<div class="container mt-3">
  <br><h2><i class="fa-regular fa-id-card"></i> ACCOUNTS</h2><br>    
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    $sql = "SELECT * From user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td>#<?=$row['id']?></td>
      <td><?=$row['username']?></td>
      <td>**********</td>
    </tr>
    <?php
     }  
    }
    ?>
  </tbody>
</table>
</div>
<!-- Table bootstrap -->


<?php

}else{
    $_SESSION['error'] = "YOU MUST LOGIN FIRST";
    Header('Location: ../index.php');
}

?>
