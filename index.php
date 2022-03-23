<?php
use App\controllers\HomeController;
use App\models\Contact;
use App\app\Session;

session_start();
require_once realpath('vendor/autoload.php');
define('BASE_URL','http://localhost/gestion_contact');
$home=new HomeController();
$home=new HomeController();
// $data=$home->getcontacts();
$home=new HomeController();
$pages=array('add','delete','home','sign_in','update',"login","logout");
 if(isset($_SESSION['login']) && $_SESSION['login'] === true ){
   
if(isset($_GET['page'])){
  if(in_array($_GET['page'],$pages)){
    $page=$_GET['page'];
    $home->index($page);
  }
  else {
    include('views/includes/404.php');
  }
 
}
include( $_SERVER['DOCUMENT_ROOT'] .'/gestion_contact/views/includes/header.php' ); 
}
else if($_GET['page'] && $_GET['page']==="register"){
  $home->index("register");
}

else {
 
  $home->index("login");
}

?>
