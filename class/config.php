<?php 
class config{
    private $servername = 'localhost';
    private $username ='root';
    private $password ='';
    private $db_name = 'task-management-db';
    public $conn;


    public function __construct()
    {   
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
    }
}

?>