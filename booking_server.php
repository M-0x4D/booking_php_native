<?php

if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['patient_id']) ||
  preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['date']) ||
    preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['time[]']) ||
      preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['reason'])) {

        header('location:'.'bookingarea.php?error=fields should not has special characters');
  
}
else
{



$patient_id = $_POST['Pateint_Id'];
$date = $_POST['date'];
$time = $_POST['time[]'];
$reason = $_POST['reason'];


// foreach($time as $t) {

//     $save = $t . "<br>";
    
//  }

 $list = array (
   $patient_id , $date , date("h:i:sa") , $reason
   
  );

 file_put_contents('appointments.txt', implode('|' , $list). "\n", FILE_APPEND | LOCK_EX);

 header('location:'."bookingarea.php");
}
?>