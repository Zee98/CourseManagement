<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - ZEE</title>
    <meta name="description" content="Course Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/login0.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome!</h4>
                                    </div>
                                    <form class="user" action="loging.php" method="post" autocomplete="off">
                                        <div class="form-group">
                                             <?php
                                              if(isset($_GET['message']) && $_GET['message']=="failed"){
                                              echo "<div class='alert alert-danger'> <strong>failed!</strong> unable to login. Please try again! </div>";
                                              }
                                              ?>
                                          <input class="form-control form-control-user" type="email" required id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                          <input class="form-control form-control-user" type="password"  required id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                  <input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1">
                                                    <label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" name="login" type="submit">Login</button>
                                        <hr>
                                        <!-- <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button">
                                          <i class="fab fa-google"></i>&nbsp; Login with Google
                                        </a> -->
                                        <!-- <a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button">
                                          <i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook
                                        </a> -->
                                        <!-- <hr> -->
                                    </form>
                                    <div class="text-center">
                                      <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                      <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>