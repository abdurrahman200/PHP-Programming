<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Form</title>
  <!-- build:css -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="../dashboard/css/b4.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="../dashboard/css/all.min.css">
  <!-- font family -->
  <link rel="stylesheet" href="../dashboard/css/Rajdhani.css">
  <!-- Style css -->
  <link rel="stylesheet" href="../dashboard/css/style.css">
  <!-- endbuild -->
  
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm-4 shadow">
        <form class="form-signin" action="registar_post.php" method="post">
          <h2 class="text-center text-uppercase">Registration Form </h2>
          <hr class="mb-4" style=" background: #b70000; ">
          
          <div class="form-label-group">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name" class="form-control" placeholder="Name">
          </div>
          
          <div class="form-label-group">
            <label for="inputEmail">Email address</label>
            <input type="email" id="Email" name="Email" class="form-control" placeholder="Email address">
          </div>
          <div class="form-label-group">
            <label for="Password">Password</label>
            <input type="password" id="Password" name="Password" class="form-control" placeholder="Password">
          </div>
          
          <button class="btn btn-sm btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted text-center">&copy; Abdur rahman , Bangladesh</p>
        </form>
      </div>
    </div>
  </div>
  <!-- build:js -->
  <script src="../dashboard/js/functions.js"></script>
  <script src="../dashboard/js/b4.js"></script>
  <!-- endbuild -->
</body>
</html>