<?php
	session_start();
	
	$id=$_POST['userId'];
	$username=$_POST['username'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mi = $_POST['mi'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	
	$mysqli = new mysqli("127.0.0.1", "user", "1234", "modern_eniac");
	// Check servernameconnection
	if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
	}else{
			
		$query="UPDATE users set username='".$username."', lname='". $lname ."',fname='". $fname ."' 
				,mi='". $mi ."',address='". $address ."',email='". $email ."',contact_no='".$contact_no."' where userId='". $id  ."'";
	
		if ($mysqli->query($query) === TRUE){
			echo "<script type = \"text/javascript\">
				alert(\"profile successfully updated\");
				window.location = (\"profile.php\")
			</script>";
		}else{
			echo 'error' . $mysqli -> error;
		}
	}
?>