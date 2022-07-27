<?php 
include 'config.php';
// require_once 'sendEmail.php';
require_once 'sendSms.php';
if(isset($_REQUEST['submit']))
{
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $pass = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $addresss = $_REQUEST['addresss'];
    $emailcheck = mysqli_query($conn,"select email from register where email='$email'");
    if(mysqli_num_rows($emailcheck)>0){
      $_SESSION['error'] = "email already exist";
      header("location: ../registation.php");
    }
    else{
      if ((!empty($fname)) && (!empty($lname)) && (!empty($pass)) && (!empty($email)) && (!empty($addresss)) ){
         $sql = "INSERT INTO register (fname,lname,email,password,addresss) VALUES ('$fname','$lname','$email','$pass','$addresss')";
         if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully !";
            $to = '+917607542045';
            // $subject = "registation successfully";
            $message = "your Registration is Successfully in WhatsApp.";
            sens_sms($to,$message);
            // $from = "govindprasad1595@gmail.com";
            // if(sendEmail($to,$subject,$message,$from)){
            //    echo "<script type='text/javascript'>alert('Your registation Successfully');</script>"; 
            // }else{
            //    echo "<script type='text/javascript'>alert('Please check your email!');</script>"; 
            // }
            $_SESSION['user'] = 'aman';
            header("location: ../dashboard.php");
            exit;
         } 
         else {
            $_SESSION['error'] = 'unable to create account';
            header("location: ../registation.php");
         }
      }else{
         $_SESSION['error'] = "All Fields Required";
         header("location: ../registation.php");
      }
   }
}


?>