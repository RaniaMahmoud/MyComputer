<?php

class user
{
    private $conn;
    private $table_name = "users";
    public $email;
    public $Fname;
    public $Lname;

 
    public function __construct($db){
        $this->conn = $db;
    }
    
function read(){
   echo"in read fun";
    $query = "SELECT * FROM users ";
    $stmt = $this->conn->query($query);
    return $stmt;
}

function insert(){
   echo"in insert fun";    
    $query = "INSERT INTO users	SET Fname='".$this->Fname."', Lname='".$this->Lname."', email='".$this->email."'";
    $stmt = $this->conn->query($query);
    
		if ($stmt) {
			return true;
		}

		return false;
   //var_dump($stmt);
    
}

function Delete()
	{
		$query="delete from  users where Fname='".$this->Fname."'";

        $stmt = $this->conn->query($query);

		if ($stmt) 
        {
			return true;
		}
		return FALSE;
	}

function Update()
	{
		$query="UPDATE users SET Fname='".$this->Fname."' WHERE email = 'mo@'"; 
        $stmt = $this->conn->query($query);

		if ($stmt) {
			return true;
		}
		return FALSE;
	}

}

?>