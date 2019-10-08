<?php

// send registration confirmatio link to the email address
// connect to the database and get your name
if(isset($_POST['email'])){

  $email = $_POST['email'];

  $connect = mysqli_connect("localhost", "root", "", "project");
  if($connect){
    $select = mysqli_query($connect, "select first_name from users WHERE email='$email' ");

    if(mysqli_num_rows($select) == 0){
      echo "user does not exist!";
      echo "<meta http-equiv='refresh' content='0; url=forgot-password.php'>";
    }else{
      $to = $email;
      $subject = " Password Recovery | (Zee.com)";
      $messagebody = "Hello Dear recover-password.php?email='.$email'";

      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:  ' . "zamanehsani@outlook.com" . ' <' . "zamanehsani@outlook.com" .'>' . " \r\n" .
            'Reply-To: '.  "zamanehsani@outlook.com" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

      mail($to, $subject, $messagebody, $headers);
    }
  }else{
    echo "soemthing went wront from db";
  }

} // end of first if
else{
  echo "something went wrong!";
}



 ?>
