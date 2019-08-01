<?php

header("Access_Controls_Allow_Methods:POST");

include_once 'classDBAPI.php';
include_once 'classUserAPI.php';


$db=new database();
$conn =$db->getconnection();

$p= new user($conn);

$data= json_decode( file_get_contents("php://input"));

if (!empty( $data->Fname) &&  !empty( $data->Lname)&& !empty( $data->email))
{
	$p->Fname=$data->Fname;
	$p->Lname=$data->Lname;
	$p->email=$data->email;

	if(	$p->insert())
	{
		
		http_response_code(200);
		echo json_encode(array("message"=>"product created"));
	}
	else 
	{
		http_response_code(403);
		echo json_encode(array("message"=>"failed create operation"));

	}
	
		
}
else
{
	http_response_code(400);
	echo json_encode(array("message"=>"invalis data"));
	
}
?>