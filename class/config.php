<?php 
class config{
    private $servername = 'us-cdbr-east-04.cleardb.com';
    private $username ='bfc30dcc786b36';
    private $password ='e4c28365';
    private $db_name = 'heroku_edb83eee51222b8';
    public $conn;


    public function __construct()
    {   
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
    }
}

?>