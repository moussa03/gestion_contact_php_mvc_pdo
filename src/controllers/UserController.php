<?php 
namespace App\controllers;
use App\models\User;
use App\app\Redirect;
use App\app\Session;
require_once realpath('vendor/autoload.php');
class UserController{

public function registerUser(){
    if(isset($_POST['register'])){
        $options=['cost'=>12];
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
        $data=array(
         "fullname"=>$_POST['fullname'],
         "email"=>$_POST['email'],
         "phone"=>$_POST['selected_phone'].$_POST['phone'],
         "password"=>$password,
     );
    }  
 $registerContact=User::register($data);
 }

 public function auth(){
     $email=$_POST["email"];
    //  $password=$_POST['password'];
     $user_login=User::login($email);
     if($user_login->email===$_POST['email'] && password_verify($_POST['password'],$user_login->password)){
          
         $_SESSION['login'] = true;
         
         $_SESSION['username']=$user_login->fullname;
         Redirect::to('home');
         

     }
     else {
         Session::set("eror","email ou mot de passe inccorect");
         Redirect::to('login');
     }
     
 }

 static public function logout(){
     session_destroy();
 }
}


?>