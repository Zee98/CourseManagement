<?php
/* user login process, checks if user exist and password matches */

// escape email to protect againts SQL injection

session_start();
if(isset($_POST['email'])){

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    include("db.php");
    
    $sqlQ = "select * from users where email ='$email' AND password ='$password'";
    $sql = mysqli_query($con, $sqlQ);
    $count = mysqli_num_rows($sql);

    if($count == 1 ){
      $_SESSION['username'] = $email;
      echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
      die();
    }
    else{
      echo "<meta http-equiv='refresh' content='0; url=index.php?message=failed'>";
      die();
    }

} // end of if isset
//
//     if($connect){
//       $select = mysqli_query($connect, "select count(email) from users where email ='$email' and password ='$password'");
//       var_dump($select);
//       if($select == 1){
//         echo "<meta http-equiv='refresh' content='0; url=dashboard.php?message=success'>";
//         die();
//       }
//       else{
//         echo "<meta http-equiv='refresh' content='0; url=index.php?message=failed'>";
//         die();
//       }
//     } // end of if connection.
// }else{
//   echo "someting went wrong";
// }

/*

$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("select * from user where email='$email'");

if($result -> num_rows ==0){  // user exist
  $_SESSION['message'] = 'user with that email does not exist.';
  header['location: error.php'];
}else{ // user exists
  $user = $result -> fetch_assoc();
  if(password_verify($_POST['password'], $user['password'])){
    $_SESSION['email'] = $user['email'];
    $_SESSION['first_name'] = $user['first_name'];
    $_SESSION['last_name'] = $user['last_name'];
    $_SESSION['active'] = $user['active'];

    // how to know the user is logged include
    $_SESSION['logged_in']= true;
    header['location: index.php']
  }
  else{
    $_SESSION['message'] = 'you have entered wrong password, Try again!';
    header['location: error.php'];
  }
}
*/


 ?>
