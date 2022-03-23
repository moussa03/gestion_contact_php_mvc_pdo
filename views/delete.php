<?php
require_once realpath('vendor/autoload.php');
use App\controllers\Contact_Controller;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

 $contact=new Contact_Controller();
 $contact->deleteContact();
}




?>