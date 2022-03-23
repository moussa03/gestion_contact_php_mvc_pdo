<?php 
namespace App\app;
class Session {

static public function Set($type,$message){
  setcookie($type,$message,time()+5,"/");
}

  

}

?>