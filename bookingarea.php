<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php
session_start();

if (isset($_SESSION["loggedin"])) {
      
    echo '
    <a>Welcome Mr ' . $_SESSION["username"] . ' </a>
   <a href="logout.php"><span>logout</span></a>&nbsp;&nbsp;&nbsp;
    <h2>Booking Table</h2>

    <table>
      <tr >
        <th >patient_id</th>
        <th >date</th>
        <th>time</th>
        <th>reason</th>
      </tr>
     
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



</body>
</html>