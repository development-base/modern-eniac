<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		}
	$con=new mysqli('localhost','root','','modern_eniac');
	if(!$con){
		die("Connection Failed:".$con->connect_error);
	}
		if(!isset($_POST[''])){
		$msg=$_POST['msg'];
		$msg = $_POST['msg'];
		$sql = "INSERT INTO messages(sender,msg,receiver)VALUES('".$_SESSION['username']."','".$msg."','".$_SESSION['user_chat']."')";
		if($con->query($sql) === TRUE){
				header("location:conversation.php");
		}else{
			echo "ERROR SENDING THE MESSAGE";
		}
	}else{		
		echo "error";
	}
?>