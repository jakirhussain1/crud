<?php
 require_once 'login_logic.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

  </head>
  <body>
     <div class="container">
     <div class="row justify-content-md-center mt-5">
     <div class="col-md-6">
         <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
         <h2>Login</h2>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger"><?= isset($error['email'])?$error['email']:'';?></span>
        <span class="text-danger"><?= isset($login_error)?$login_error:'';?></span>
        <span class="text-danger"><?= isset($status_error)?$status_error:'';?></span>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
     <span class="text-danger"><?= isset($error['password'])?$error['password']:'';?></span>
  </div>
  <button name="login" type="submit" class="btn btn-primary">Login</button>
  <a class='btn btn-primary' href="regi.php">Registration</a>
</form>
     </div>
     </div>
     </div>

    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>