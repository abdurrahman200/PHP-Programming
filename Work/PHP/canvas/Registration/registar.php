<?php require_once 'require/header.php'; ?>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header  bg-danger text-light">

              <a href="../index.php">  <i class="fa fa-home"></i></a>

              Registration

                <a href="login.php" class=" float-right">Login back</a>
                
            </div>
            <div class="card-body ">
              <form action="loginpost.php" method="Post">

                <input class="form-control  " type="text" placeholder="UserName" name="UserName" >

                <input class="form-control mt-3 " type="phone" placeholder="Phone" name="Phone" >

                <input class="form-control mt-3 " type="Email" placeholder="E-mail" name="Email" >

                <input class="form-control mt-3 " type="password" placeholder="Password" name="password">

                <input class="form-control mt-3 " type="password" placeholder="Confirm Password" name="Confirmpassword">

                <button type="submit" class="btn mt-3 text-light btn-secondary">Go Registration</button>
                
              </form>
              
            </div>
            <div class="card-footer  bg-danger text-light">
              &copy Copyright 2020 Abdur rahman. All rights reserved
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once 'require/footer.php'; ?>