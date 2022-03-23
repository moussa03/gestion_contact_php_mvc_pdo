<?php
namespace App\database;
use \PDO;
class DB {
    static public function connect(){
     $servername="localhost";
     $username="root";
     try {
        $conn = new PDO("mysql:host=$servername;dbname=gestion_contact",$username, "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        // echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      
    }
}



?>