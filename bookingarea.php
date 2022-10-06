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
<?php
session_start();

if (isset($_SESSION["loggedin"])) {
      
    echo '
  <div class=" p-3 mb-2 bg-dark text-white mb-3">
  <a>Welcome Mr ' . $_SESSION["username"] . ' </a>
  <a class="btn btn-primary" href="logout.php" role="button">logout</a>
  </div>
    <h2>Booking Table</h2>

    <table class="table">
    <thead class="thead-dark">
      <tr >
        <th >patient_id</th>
        <th >date</th>
        <th>time</th>
        <th>reason</th>
      </tr>
      </thead>
     
     ';
    
     $lines = file("appointments.txt");

      
    foreach ($lines as $line) {
        $book_details = explode('|', $line); 
        echo "<tr>
    <td>{$book_details[0]}</td>
    <td>{$book_details[1]}</td>
    <td>{$book_details[2]}</td>
    <td>{$book_details[3]}</td>
    </tr>" ;
         };'
    
      
      
    
      
    
     
    </table>';
}
else {
    header("location:"."login.php");
  }


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>