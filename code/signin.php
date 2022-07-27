<?php 
    include('config.php');
    session_start();
    if (isset($_SESSION['user'])) {
        header('location: ../dashboard.php');
    }else{
    if(isset($_REQUEST['sign'])) {
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $sql=mysqli_query($conn,"SELECT * FROM `register` where email='$email' and password = '$pass'");
        $row=mysqli_fetch_assoc($sql);
        if (!empty($row)) {
        $_SESSION['user'] = 'aman';
        header('location: ../dashboard.php');
        }else {
           
            $_SESSION['error'] = "invalid credentials";
            header('location: ../signin.php');

        }
       
    }
}
    
?>