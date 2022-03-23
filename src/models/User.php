<?php
namespace App\models;
use App\database\DB;
use App\app\Redirect;
use PDO;
use App\app\Session;

class User {
static public function register($data){
    try {
      $query="INSERT INTO users(fullname,email,phone,password)
      VALUES(:fullname,:email,:phone,:password)";
      $conn=DB::connect()->prepare($query);
      $conn->bindParam(':fullname', $data['fullname']);
      $conn->bindParam(':email', $data['email']);
      $conn->bindParam(':phone', $data['phone']);
      $conn->bindParam(':password', $data['password']);
      if($conn->execute()){
        Session::Set("new_user","Vous avez créer votre compte avec succés");
        Redirect::to('login');
      }
    }

    catch (PDOException $ex){
        echo "error".$ex->getMessage();
    }
}

static public function login($email){
$email_connect=$email;

try {
$query="SELECT * FROM users WHERE email=:email";
$conn=DB::connect()->prepare($query);
$conn->execute(array(":email"=>$email_connect));
$user=$conn->fetch(PDO::FETCH_OBJ);
return $user;
}
catch (PDOException $ex){
  echo "error".$ex->getMessage();
}
}
}


?>