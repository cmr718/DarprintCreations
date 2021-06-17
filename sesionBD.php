<?php

//conectarnos con el servidor 

class DB{

	private $host;
        private $db;
        private $user;
        private $password;


	 public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'darprintcreations';
        $this->user     = 'ladymisti';
        $this->password = 'A6B6B088';

    }

	function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
	

?>
