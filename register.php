<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="img/logograkify.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Grakify your Sports</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <img src="img/logoGrakify03.png" alt="Logo Grakify" id="brand-logo">
        <!-- <a class="navbar-brand" href="#">Grakify</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto" >
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item btn btn-primary tombol" href="register.php">Join Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Grakify <span>Your Sports</span> with us.</h1>
      </div>
    </div>
    <!-- END JUMBOTRON -->

    <!-- CONTAINER -->
    <div class="container">
        <div class="row user-form">
            <div class="col-lg-10 col-xl-9 mx-auto ">
                <div class="card card-signin flex-row my-5 ">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body panel-form">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin">
                        <div class="form-label-group">
                            <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                            <label for="inputUserame">Username</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                            <label for="inputEmail">Email address</label>
                        </div>
                        
                        <hr>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>
                        
                        <div class="form-label-group">
                            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                            <label for="inputConfirmPassword">Confirm password</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                        <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    
    <!-- END CONTAINER -->


    <!-- FOOTER -->
    <footer >
<div class="row justify-content-center">
        <div class="col-3 footer-panel">
          <div class="row justify-content-center">
            <div class="col">
              <a href="https:/www.instagram.com/grakify" target="_blank">
              <img src="img/instagram.png" alt="Instagram Grakify"  class="float-center">
            </a>
            </div>

            <div class="col">
              <a href="https:/www.twitter.com/@grakify_com" target="_blank">
                <img src="img/twitter.png" alt="GrakMates"  class="float-center">
              </a>
            </div>

            <div class="col">
              <a href="https:/www.facebook.com/grakify" target="_blank">
                <img src="img/facebook.png" alt="GrakVenue"  class="float-center">
              </a>
            </div>
          </div>
          <p>&copy; 2018 <a href="https:/www.grakify.com">Grakify.</a></p>
        </div>
      </div>

</footer>
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>