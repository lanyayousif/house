<?php
class user extends db_object{
    protected static $columns=array('username','password','email','rule');
    public $id;
    public $rule;
    public $username;
    public $password;
    public $email;

public static function verify($username,$password){
    $password=hash('gost',$password);
    $single_user_data= self::query_process("SELECT * FROM `user` WHERE username='$username' and password='$password' LIMIT 1");
    return !empty($single_user_data)?array_shift($single_user_data):false;}
      
}
$user=new user();
?>