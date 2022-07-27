<?php 
    include 'code/edit_details.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container pt-5">
        <form action="" method="POST">
            <h3>EDIT PAGE</h3>
        <?php if(isset($_SESSION['error'])){echo '<b>'.$_SESSION['error'].'<b/>';}?>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input name ="fname" value="<?=  $row['fname']; ?>" type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input name ="lname" value="<?= $row['lname']; ?>" type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input name ="email" value="<?= $row['email']; ?>" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <!-- <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input name ="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div> -->
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input name ="addresss" value="<?=  $row['addresss']; ?>" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div> 
            <button type="submit" name="update" class="btn btn-primary">Update Page</button>
            <a href="javascript:history.back()" class="btn btn-success">Back</a>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>