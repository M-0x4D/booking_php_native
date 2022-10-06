<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>



<form  class="form-control" action="administration.php" method="POST">

    <input  type="hidden" name="action" value="register">
    <div class="container">

    <div>

    <h1 class="mb-5 md-5">Register</h1>
      <p>Please fill in this form to go to your account.</p>
    </div>
      
      <hr>

      
       
      <div class=" mb-2 container text-danger">
       <?php
        if (isset($_GET['uerror'])) {
          echo $_GET['uerror'];
        }
        ?>
       </div>

    <div class="mb-3 ">
      <label for="uname"><b>User Name</b></label>

      <input class="form-control" min="10" type="text" placeholder="Enter username" name="username" id="uname" required>
     
      </div>

      <div class=" mb-2 container text-danger">
       <?php
        if (isset($_GET['error'])) {
          echo $_GET['error'];
        }
        ?>
       </div>

     <div class="mb-3">

     <label><b>Password</b></label>
      <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password" required>
      </div>

    

      <div class="mb-3">
      <label for="psw-repeat"><b>Repeat Password</b></label>
          <input class="form-control" type="password" placeholder="Repeat Password" name="confirm_password" id="psw-repeat" required>
      </div>

 
      <button class="col-md-4 center btn btn-primary" type="submit" class="registerbtn">Register</button>
      <button class="col-md-4 center btn btn-danger" type="submit" formnovalidate>Submit without validation</button>

      <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </div>
  </form>

<input class="container" type="button" value="click me " onclick="ready()">



    <!-- <form action="administration.php" method="POST">
        <input type="hidden" name="action" value="register">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form> -->

  <!-- <?php  if ($_GET['error']) {
      echo $_GET['error'];
  }
  else
  {

  } ?>  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>