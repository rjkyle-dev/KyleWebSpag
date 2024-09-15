<?php 
 
   class Database{

      private $server = "mysql:host=localhost;dbname=kylewebspag";
      private $user = "root";
      private $pass = "";
      private $query = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      protected $con;

      public function openConnection(){

        try{

          $this->con = new PDO($this->server, $this->user, $this->pass, $this->query);

          return $this->con;

          

                }catch(PDOException $e){
              echo "Connection Failed!:" . $e->getMessage();
        }
      }
     
    }



