<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		}
	$con=new mysqli('localhost','root','','modern_eniac');
	if(!$con){
		die("Connection Failed:".$con->connect_error());
	}
	
	if(!isset($_POST['buy this product'])){
		$msg = $_POST['msg'];
		$seller = $_POST['seller'];
		$sql = "INSERT INTO messages(sender,msg,receiver)VALUES('".$_SESSION['username']."','".$msg."','".$seller."')";
		if($con->query($sql) === TRUE){
			echo "<script type = 'text/javascript'>
				alert('your product is now on process check your inbox');
				window.location = (\"cart.php\")
			</script>";
			
		}else{
			echo $sql.$con->error;
		}
	}
?>