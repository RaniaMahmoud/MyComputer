<?php
//declare var
$host='localhost';
$user='root';
$pass='12';
$db='fcig';
$output=[];
//create connection
$conn=mysqli_connect($host,$user,$pass,$db);
//$conn=new mysqli($host,$user,$pass,$db);
if($conn)
{
    //query
    $query='SELECT * FROM student';
    //execuate squery
    $result=$conn->query($query);
//convert from result obj to array
    while($item=$result->fetch_assoc())
    {
 //       print_r($item);
   //     print '<br/>';
       $output[]=$item;
    }
    
//    print_r($output);
    
    //convert from array to json
  echo  json_encode($output);
    
}
else
{
    echo 'db die';
}
?>