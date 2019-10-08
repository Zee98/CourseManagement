<?php

if(isset($_POST['email'])){

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $repeat_password = $_POST['password_repeat'];
    if($password != $repeat_password){
      echo "<meta http-equiv='refresh' content='0; url=register.php?message=password not match'>";
      die();
    }
    include("db.php");
    $sqlQ = "insert into users (first_name, last_name, email, password, repeat_password) values('$first_name','$last_name','$email','$password','$repeat_password')";

    if($con){
      $sql = mysqli_query($con, $sqlQ);
      if($sql){
        echo "<meta http-equiv='refresh' content='0; url=register.php?message=success'>";
        die();
      }
      else{
        echo "<meta http-equiv='refresh' content='0; url=register.php?message=failed'>";
        die();
      }
    }
}else{
  echo "someting went wrong";
}

//
// //check if the user with that email already exist
// $result = $mysqli->query("select * from users where email ='$email'") or die($mysqli->error());
//
//  // if the rows returned is more than 0, that user is already existed.
// if($result->num_rows > 0 ){
//   $_SESSION['message'] = 'user with that email already exists.';
//   header['location: error.php'];
// }else{
//   // if email does not already ixist in database
//
//   // active is 0 by defualt (no need to include it here)
// $sql = "insert into users (first_name, last_name, email, password, password_repeat)"
//         ."values('$first_name','$last_name','$email','$password','$repeat_pasword')";
//
//         // add user to the database
//         if($mysqli -> query($sql)){
//           $_SESSION['active'] = 0; // 0 untill user active there account with verify.php
//           $_SESSION['logged_in'] = true; // to know the user logged in
//           $_SESSION['message'] =
//           "Confirmation link has been sent to $email, Please verify your
//             account by clicking on the link in the message!";
//
//             // send registration confirmatio link to the email address
//
//             // $to = $email;
//             // $subject = " Account Activation (Zee.com)";
//             // $messagebody = 'Hello '.$first_name.',
//             // Thank you for signing up!
//             //
//             // Please click the link below to activate you account:
//             // https://localhost:8080/project/verify.php?email='.$email.'&hash='.$hash;
//             //
//             // mail($to, $subject, $messagebody);
//
//             header['location: profile.php'];
//         }
//         else{
//             $_SESSION['message'] = 'registration failed!';
//             header['location: error.php'];
//         }
// }



 ?>
