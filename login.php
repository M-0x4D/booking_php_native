<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form  class="form-control" action="administration.php" method="POST">

    <input  type="hidden" name="action" value="login">
    <div class="container">

    <div>

    <h1 class="mb-5 md-5">Log In</h1>
      <p>Please fill in this form to go to your account.</p>
    </div>
      
      <hr>

      <div class=" mb-2 container text-danger">
       <?php
        if (isset($_GET['uerror'])) {
          echo $_GET['uerror'];
        }
        else{
          if (isset($_GET['err'])) {
            echo $_GET['err'];
          }
        }
        
        ?>
       </div>

    <div>
      <label><b>User Name</b></label>

      <input class="form-control"  type="text" placeholder="Enter username" name="username" id="uname" required>
     
      </div>
     
     <label><b>Password</b></label>
      <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password" required>


      <hr>

 
<button class="col-md-4 center btn btn-primary" type="submit" class="registerbtn">Signin</button>
<button class="col-md-4 center btn btn-danger" type="submit" formnovalidate>Submit without validation</button>

    <div class="container signin">
      <p>Don't have an account? <a href="register.php">Register</a>.</p>
    </div>
    </div>
  </form>



  <!-- <form action="administration.php" method="POST">
        <input type="hidden" name="action" value="login">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
  
  <!-- <script>
var fname = document.getElementById("fname");
fname.addEventListener("input", () => {
  if (fname.validity.tooLong || fname.validity.tooShort || fname.validity.valueMissing) {
    fname.setCustomValidity("User Name must be 2-8 characters.");
    fname.reportValidity();
  } else { fname.setCustomValidity(""); }
});

var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";

for (var i = 0; i < document.formname.fieldname.value.length; i++) {
    if (iChars.indexOf(document.formname.fieldname.value.charAt(i)) != -1) {
        alert ("Your username has special characters. \nThese are not allowed.\n Please remove them and try again.");
        return false;
    }
  }
</script> -->

<script>

const getInputError = (inputName) => {
    return errors.array().find(i => i.param === inputName || i.body === inputName);
  }
  res.render('form', { getInputError });
</script>

</body>

</html>