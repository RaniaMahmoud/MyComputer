<?php

header("Access_Controls_Allow_Methods:PUT");

include_once 'classDBAPI.php';
include_once 'classUserAPI.php';


$db=new database();
$conn =$db->getconnection();

$p= new user($conn);

$data= json_decode( file_get_contents("php://input"));

if (!empty( $data->Fname))
{
	$p->Fname=$data->Fname;


	if(	$p->Update())
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