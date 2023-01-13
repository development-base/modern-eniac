<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'modern_eniac';

//create connection
$conn = new mysqli($servername,
$username, $password, $dbname);

//check connection
	if ($conn->connect_error){
		die("connection failed:" . $conn-> connect_error);
	}
	
	//sql to delete a record
	$sql = DELETE FROM product where item_no= ;
	
	if ($conn->query($sql) === true){
		echo"record successfully deleted";
	}else{
		echo"error deleting record:" .$conn->error;
	}
	$conn->close();


?> 