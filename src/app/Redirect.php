<?php 
namespace App\app;
require_once realpath('vendor/autoload.php');

class Redirect {

    static public function to($page){
        header('location:'.$page);
        }
}


?>