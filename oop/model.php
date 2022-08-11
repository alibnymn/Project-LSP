<?php

   Class Model{

      private $server = "localhost";
      private $username = "root";
      private $password;
      private $db = "oop_crud";
      private $conn;

      public function __construct(){
          try{

            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db
               );
          } catch (Exception $e) {
              echo "connection failed" . $e->getMassage();
          }
      }

      public function insert(){
          if (isset($_POST['submit'])) {
              echo "yes"; 
          }
      }
   }

?>