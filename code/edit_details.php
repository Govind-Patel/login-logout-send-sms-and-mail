<?php 
    include 'config.php';
    $id = $_REQUEST['id'];
    $sql = mysqli_query($conn , "SELECT * from register where id='$id'"); 
    $row = mysqli_fetch_array($sql );
    if (isset( $_REQUEST['update'] )) {
        extract($_REQUEST);
       $sql = mysqli_query($conn,"update register set fname='$fname',lname='$lname',email='$email',addresss='$addresss' where id='$id'");
       $_SESSION['error']="Update successfully";
       header('location:dashboard.php');
    }

?>