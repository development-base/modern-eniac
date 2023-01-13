<?php
	$msg="";
	//if upload button is pressed
	if(isset($_POST['upload'])){
		//the path to store the upload image
		$target = "images/".basename($_FILES['image']['name']);
		
		//connect to the database
		$db = mysqli_connect("localhost","root","","modern_eniac");
		
		//Get all the submitted data from the form
		$image = $_FILES['image']['name'];
		$text = $_POST['texts'];
		
		$sql = "INSERT INTO images(image,texts) VALUES('$image','$text')";
		mysqli_query($db,$sql);
		
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg="Uploaded Successfully";
		}else{
			$msg="There was a problem uploading the image";
		}
	}
?>

<!doctype html>																																																												
<head>
	<title></title>
	<style>
	
	
	</style>
</head>
<body>
<div class="imgfile">
<?php	
		$db = mysqli_connect("localhost","root","","modern_eniac");
		$sql="SELECT * FROM images";
		$result = mysqli_query($db,$sql);
		while($row=mysqli_fetch_array($result)){
			echo "<div id='img_div'>";
				echo "<img src='images/".$row['image']."'>";
				echo "<p>".$row['texts']."</p>";
			echo "</div>";
		}
?>
		
		
		
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea name="texts" cols="40" rows="4" placeholder="Reason for selling this laptop"></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload Image">
			</div>
		</form>
<div>
</body>
</html>