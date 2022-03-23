<?php 

namespace App\models;
use App\database\DB;
use App\app\Redirect;
use PDO;
use App\app\Session;
//  require_once realpath('vendor/autoload.php');

class Contact {
    static public function getall(){       
        $conn=DB::connect()->prepare('SELECT * FROM contact');
        $conn->execute();
        return $conn->fetchAll();
        $conn->close();
    }

    static public function add_contact($data){
            
        $conn = DB::connect()->prepare("INSERT INTO contact (fullname, email, phone,adresse,contact_status)
  VALUES (:fullname, :email, :phone,:adresse,:contact_status)");

        $conn->bindParam(':fullname', $data['fullname']);
        $conn->bindParam(':email', $data['email']);
        $conn->bindParam(':phone', $data['phone']);
        $conn->bindParam(':adresse', $data['adresse']);
        $conn->bindParam(':contact_status',$data['contact_status']);
        
        if($conn->execute()){
            Session::Set("succes","contac ajouté avec succés");
            header("Location:".BASE_URL."/home");


        }
        else{
                return "eror";
             }  
     }

     static public  function getoneEmploye($data){

        $oneemploye=$data['id'];
        $query="SELECT * FROM contact WHERE contact_id=:id";
        $conn=DB::connect()->prepare($query);
        $conn->execute(array(":id"=>$oneemploye));
        $Employe=$conn->fetch(PDO::FETCH_OBJ);
        return $Employe;
    }

    static public function update($data){
        // $employe=$data['contact_id'];
        $query="UPDATE contact set fullname=:fullname,email=:email,phone=:phone,adresse=:adresse,contact_status=:contact_status where contact_id=:contact_id";
        $conn=DB::connect()->prepare($query);
        $conn->bindParam(':fullname', $data['fullname']);
        $conn->bindParam(':email', $data['email']);
        $conn->bindParam(':phone', $data['phone']);
        $conn->bindParam(':adresse', $data['adresse']);
        $conn->bindParam(':contact_status',$data['contact_status']);
        $conn->bindParam(':contact_id',$data['contact_id']);
        $contact_id=$data['contact_id'];
        if($conn->execute()){
            // header('location:'.BASE_URL."/home");
            Session::Set("update","contact modifié avec succés");
            Redirect::to('home');
        }
        else {
            return "not good";
        }
    }
    
    
    static public function delete($data){
        $id=$data['contact_id'];
        $query="DELETE FROM contact where contact_id=:contact_id";
        $conn=DB::connect()->prepare($query);
        $conn->execute(array(":contact_id"=>$id));
        if($conn->execute()){
            Session::Set("delete","contact supprimé avec succés");
            // header('location:'.BASE_URL."/home");
            Redirect::to('home');
        }
    }

    static public function find($data){
        $search=$data['search'];
      
        try{
            $query="SELECT * FROM contact WHERE fullname like ?";
            $conn=DB::connect()->prepare($query);
            $conn->execute(array("%".$search."%"));
            $contacts=$conn->fetchAll();
            return $contacts;
        }
        
       catch (PDOException $ex){
           echo "error".$ex->getMessage();
       }
}


}
    ?>

