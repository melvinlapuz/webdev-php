<?php
    SESSION_START();
    $_SESSION['status'] = "not login";
    include 'plugin.php';
    
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><i class="fa-solid fa-database"></i> DataBase Activity Melvin</a>
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      </ul>
      <form class="d-flex">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</button>
      </form>
    </div>
  </div>
</nav>

<?php
if(isset($_SESSION['error'])){
    ?>
    <div class="alert alert-danger">
    <strong>
    <?php
    echo $_SESSION['error'];
    ?>
    </strong> 
    <?php
    unset($_SESSION['error']);
}
?>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-3">
  <form method="POST" action="config/LoginAuth.php">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" name="username" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input name= "password" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
  
   
  
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
      
    </div>
  </div>
</div>
