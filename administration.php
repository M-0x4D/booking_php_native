<?php



function login(Array $data)
{

if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['username']) || preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['password'])) {
    # code...
    header("location:"."login.php?err=username or password should not has special character") ;
}

else{


    $success = FALSE;

    $username = $_POST['username'];  
    $password = $_POST['password']; 

        # code...
    
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
    header("location:"."login.php?err=username or password is wrong");


}
        
}


}


















function register(Array $data)
{
    if (strlen($_POST['username']) >= 8) {
       
   if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['username']) || preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['password']) || preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/' , $_POST['confirm_password'])) {

    header('location:'.'register.php?uerror=username or password or confirm_password should not has special character');

}
else {
    if ($_POST['password'] == $_POST['confirm_password']) {
       
        $success = FALSE;
        $username = $_POST['username'];  
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'] ;

        if (($password == $confirm_password)) {

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
        else {
            header('location:'.'register.php?error=two passwords are not the same');
        }


   
    }
    
    

    }
        
    
    
    else {
        header('location:'.'register.php?uerror=username should be equal or more than 8 characters');
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