<?php
	$id=$_POST['item_no'];
	$brand=$_POST['brand'];
	$processor=$_POST['processor'];
	$price=$_POST['price'];
	$RAM=$_POST['RAM'];
	$graphics=$_POST['graphics'];
	$OS=$_POST['OS'];
	$HDD=$_POST['HDD'];

	
	$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
	// Check servernameconnection
	if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
	}else{
		$query="UPDATE product set brand='". $brand ."',processor='". $processor ."',price='". $price ."' 
				,RAM='". $RAM ."',graphics='". $graphics ."',OS='". $OS ."',HDD='". $HDD ."'
				where item_no='". $id ."'";
	
		if ($mysqli->query($query) === TRUE){
			echo "<script type = \"text/javascript\">
				alert(\"saved!\");
				window.location = (\"admin_product.php\")
			</script>";
		}
	}
		?>