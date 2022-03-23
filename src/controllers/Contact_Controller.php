<?php
namespace App\controllers;
use App\models\Contact;
use App\database\DB;
require_once realpath('vendor/autoload.php');

class Contact_Controller{
    public function getcontacts(){
        $contact=Contact::getall();
        return $contact;
    }

    public function sign_user(){
       return "good";
    }

    public function add(){
        $data=array(
        "fullname"=>$_POST['fullname'],
        "email"=>$_POST['email'],
        "phone"=>$_POST['phone'],
        "adresse"=>$_POST['adresse'],
        "contact_status"=>$_POST['contact_status'],
        );
        $result=Contact::add_contact($data);
       
    }

    public function GetEmploye(){
     $data=array("id"=>$_POST['id']);
     $contact=Contact::getoneEmploye($data);
     return $contact;
     
    }

    public function UpdateContact(){
        $data=array(
            "contact_id"=>$_POST['contact_id'],
            "fullname"=>$_POST['fullname'],
            "email"=>$_POST['email'],
            "phone"=>$_POST['phone'],
            "adresse"=>$_POST['adresse'],
            "contact_status"=>$_POST['contact_status'],
            );
        $contact=Contact::update($data);
        // return $contact;
    }

    public function deleteContact(){
       
        $data=array("contact_id"=>$_POST['id']);
        $contact=Contact::delete($data);
        
    }

    public function serchContact(){

        $data=array("search"=>$_POST['find']);
        $findContacts=Contact::find($data);
        return $findContacts;        
    }
}


?>

