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
    //$query = "INSERT INTO users(`Fname`, `Lname`, `email`)VALUES ('rann' , 'mah' ,'ro@yahoo.com')";
    
    $query = "INSERT INTO users	SET Fname='".$this->Fname."', Lname=".$this->Lname.", email='".$this->email."'";
    $stmt = $this->conn->query($query);
    
		if ($stmt) {
			return true;
		}

		return false;
   //var_dump($stmt);
    
}

/*
function create()
	{
		// query to insert record
		$query = "INSERT INTO products		SET name='".$this->name."', price=".$this->price.", description='".$this->description."', category_id=".$this->category_id.", created='".$this->created."'";
		// prepare query
		$stmt = $this->conn->prepare($query);
		// execute query
		if ($stmt->execute()) {
			return true;
		}

		return false;
	}

*/
    
function Delete()
	{
		$query="delete from  users where Fname=".$this->Fname;

        $stmt = $this->conn->query($query);

		if ($stm) {
			return true;
		}
		return FALSE;
	}

function Update()
	{
		$query="delete from  users where Fname=".$this->Fname;

        $stmt = $this->conn->query($query);

		if ($stm) {
			return true;
		}
		return FALSE;
	}

}

?>