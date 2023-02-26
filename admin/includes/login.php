<?php
$errors=['result'=>''];
if(isset($_POST['submit'])){
    $username=$database->secure($_POST['username']);
    $password=$database->secure($_POST['password']);
    
    if(empty($username) || empty($password)){
        $errors['result']="tkaia xanakan prbkarawa";
    }
    else{
        $check=user::verify($username,$password);
        print_r($check);
        if($check){
        $session->loggin($check);
        redirect("index.php");
        }else{
        $errors['result']="your username or password was incorrect";}

         
}

}

?>