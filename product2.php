<?php
	$brand=$_POST['brand'];
	$processor=$_POST['processor'];
	$price=$_POST['price'];
	$RAM=$_POST['RAM'];
	$graphics=$_POST['graphics'];
	$OS=$_POST['OS'];
	$HDD=$_POST['HDD'];
	$username=$_POST['Id'];

// Create connection
$mysqli = new mysqli ("localhost","root","","modern_eniac");
	
	if(mysqli_connect_errno()){
		echo "Connection Failed:".mysqli_connect_errno();
	}else{
		$query="INSERT INTO product (brand, processor, price, RAM, graphics, OS, HDD,username)VALUES
		('".$brand."','".$processor."','".$price."','".$RAM."','".$graphics."','".$OS."','".$HDD."','".$username."') ";
	$result=$mysqli->query($query);  
			if($result === TRUE ){  
			echo "<script type=\"text/javascript\">
			alert(\"product Successfully registered\");  
			window.location=(\"sell.php\")
			</script>";
			}
	}
	$mysqli->close();

		
?>	