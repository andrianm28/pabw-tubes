
<br><br><br><br>

    <!-- Custom styles for this template -->
    <link href="assets/css/agency.css" rel="stylesheet">
    <!-- CONTAINER -->
    <div class="container">
    <div class="row user-form">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto ">
        <div class="card card-signin my-5">
          <div class="card-body panel-form">
            <h5 class="card-title text-center">Sign In</h5>
            <form action="<?php echo base_url('login/aksi_login'); ?>" class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" name="email_user" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password_user" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Sign in</button>

              <div >
                <a class="d-block text-center mt-2 " href="register">Create Account</a>
              </div>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <!-- END CONTAINER -->
