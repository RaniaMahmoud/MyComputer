<?php

class database
{
        private $host='localhost';
        private $dbname='t';
        private $user='root';
        private $pass='';
        private $conn;

    public function getconnection()
        
    {
        $this->conn=null;
       
        $this->conn=new mysqli("localhost", "root", '', "t");
         
        return $this->conn;
    }

}
?>