<?php 
namespace App\controllers;
use App\models\Contact;
use App\models\User;
use App\database\DB;
require_once realpath('vendor/autoload.php');
class HomeController {
public function index($page){
    
    include("views/".$page.".php");
}
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

}
?>