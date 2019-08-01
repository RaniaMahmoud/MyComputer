<?php

class database
{
        private $host='localhost';
        private $dbname='apitest';
        private $user='root';
        private $pass='12';
        private $conn;

    public function getconnection()
        
    {
        $this->conn=null;
        try
        {
            $this->conn=new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $this->conn->exec("set names utf8");
            echo 'ok';
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }

}
?>