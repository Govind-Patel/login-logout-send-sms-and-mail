<?php
  include 'code/config.php';
  if (isset($_SESSION['user'])) {
  $sql = mysqli_query($conn,"SELECT * from `register`");
  // print_r($sql);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container pt-5">
        <form action="code/logout.php" method="POST">
            <div class="row">
                <button type="submit" class="btn btn-primary">Logout</button>
                 <!-- <a href="" class="btn btn-primary">Logout</a> </div> -->
        </form>
        <table class="table pt-5 mt-5">

            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php 
              $count = 1;
                while ($row = mysqli_fetch_assoc($sql)) {
                  
              ?>
                <tr>
                  <th scope="row"><?= $count;?></th>
                  <td><?= $row['fname']?></td>
                  <td><?= $row['lname']?></td>
                  <td><?= $row['email']?></td>
                  <td><?= $row['addresss']?></td>
                  <td>Status</td>
                  <td><a href="edit_details.php?id=<?= $row['id'] ?>" class="btn btn-success"><i class='far fa-edit'></i></a></td>
                </tr>
                <?php $count++;  } ?>
            </tbody> 
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php

 } else {
   header('location: signin.php');
 }
 ?>