<?php 
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'sept_php';


$conn = new mysqli($serverName, $userName, $password, $dbName);


if($conn->connect_error){
	die ('Failed:' . $conn->connect_error);

}

echo " connection very successful";



$sql = "select * from users"; //sql query to fetch all data

$result = $conn->query($sql); //execute the given data


echo "<pre>";
print_r($result); //debugging

$conn ->close();


?>
