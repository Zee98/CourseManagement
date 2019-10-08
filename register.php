<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - CMSYS</title>
    <meta name="description" content="Course Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/register.png&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <?php
                             if(isset($_GET['message'])){
                               if($_GET['message']=="success"){
                                 echo "<div class='alert alert-success'> <strong>Registered!</strong> User Registered successfully </div>";
                               }elseif ($_GET['message'] =='password not match') {
                                 echo "<div class='alert alert-danger'> <strong>Not Match!</strong> your repreated password does not match! </div>";
                               }
                               else{
                                 echo "<div class='alert alert-danger'> <strong>failed!</strong> unable to register. Please try again! </div>";
                               }
                             }
                             ?>
                            <form class="user" action="registration.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input class="form-control form-control-user" type="text" id="exampleFirstName" required placeholder="First Name" name="first_name">
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="form-control form-control-user" type="text" id="exampleFirstName" required placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" required placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input class="form-control form-control-user" type="password" id="examplePasswordInput" required placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" required placeholder="Repeat Password" name="password_repeat">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" name="register" type="submit">Register Account</button>
                                <!-- <hr>
                                <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button">
                                  <i class="fab fa-google"></i>&nbsp; Register with Google
                                </a>
                                  <a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button">
                                    <i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook
                                  </a> -->
                                <hr>
                            </form>
                            <div class="text-center">
                              <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                              <a class="small" href="index.php">Already have an account? Login!</a>
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
