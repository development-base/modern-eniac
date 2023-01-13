<?php
	$msg="";
	//if upload button is pressed
	if(isset($_GET['id'])){
		//connect to the database
		$db = mysqli_connect("localhost","root","","modern_eniac");
		
		//Get all the submitted data from the form
		$image = $_FILES['image']['name'];
		$text = $_POST['texts'];
		$brand=$_POST['brand'];
		$processor=$_POST['processor'];
		$price=$_POST['price'];
		$RAM=$_POST['RAM'];
		$graphics=$_POST['graphics'];
		$OS=$_POST['OS'];
		$HDD=$_POST['HDD'];
		$username=$_POST['Id'];
		
		$sql = "INSERT INTO cart_item select(image, text, brand, processor, price, RAM, graphics, OS, HDD, username)
		VALUES('$image','$text','$brand','$processor','$price','$RAM','$graphics','$OS','$HDD','$username') from product where item_no='". $_GET['id'] ."'";
		mysqli_query($db,$sql);
		
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			echo"<script type='text/javascript'>
					alert('product successfully uploaded')
				</script>";
				header('Location: sell.php');
		}else{
			$msg="There was a problem uploading the image";
		}
	}
?>		