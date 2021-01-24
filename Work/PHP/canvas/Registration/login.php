<?php require_once 'require/header.php'; ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-4">
      <div class="card ">
        <div class="card-header bg-danger text-light">
          
         <a href="../index.php">  <i class="fa fa-home"></i> </a>

          Login

          <a href="registar.php" class=" float-right">registar</a>

        </div>
        <div class="card-body">
          <form action="registarpost.php" method="Post">
            <input class="form-control" type="Email" placeholder="E-mail or Phone" name="Email" >
            <input class="form-control mt-3" type="password" placeholder="Password" name="password">
            <button type="submit" class="btn mt-3 text-light btn-secondary">Now You Go</button>
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