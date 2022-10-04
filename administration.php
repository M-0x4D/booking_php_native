<?php



function login(Array $data)
{
    $success = FALSE;

    $username = $_POST['username'];  
    $password = $_POST['password']; 

    $arr = array($username , $password);

   // Read from file
$userlist = file('users.txt');


foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if (($user_details[0] == $username) && ($user_details[1] == $password."\n")){
         $success = TRUE ;
        break;
    }

}

if ($success) {
    session_start();
    $_SESSION["loggedin"] = TRUE;
    $_SESSION['username'] = $username;
    header("location:"."index.php");

} else {

    $access_denied = array($username , $date = date('d-m-y h:i:s'));
    
    file_put_contents('access_attempts.txt', implode( '|',$access_denied). "\n", FILE_APPEND | LOCK_EX);
    header("location:"."login.php");


}
      

}














function register(Array $data)
{

    if ($_POST['password'] == $_POST['confirm_password']) {
       
        $success = FALSE;
        $username = $_POST['username'];  
        $password = $_POST['password']; 
    
    
        $userlist = file('users.txt');
    
    
    foreach ($userlist as $user) {
        $user_details = explode('|', $user);
        if (($user_details[0] == $username)){
            $success = TRUE ;
            break;
        }
    
    }
    
    if ($success) {
        header('location:'.'register.php?error=this username exists in system');
        
    }
    else {
          // insert
      $list = array (
        $username , $password
       
      );
      
      
        file_put_contents('users.txt', implode( '|',$list). "\n", FILE_APPEND | LOCK_EX);
        fclose($userlist);
        header('location:'.'login.php');
        
      
      
    }
        
    }
    else {
        
        header('location:'.'register.php');
    }

    
  
      
  
    
}


//////////////////////////////////////////////////////////////
if($_POST['action'] == "login")
{
    login($_POST);
}
else
{
    register($_POST);
}


?>