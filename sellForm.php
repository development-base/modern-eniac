<?php
	
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		} 
	$msg="";
	//if upload button is pressed
	if(isset($_POST['upload'])){
		//the path to store the upload image
		$target = "images/".basename($_FILES['image']['name']);
		
		//connect to the database
		$db = mysqli_connect("localhost","user","1234","modern_eniac");
		
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
		$title = $_POST['brand']." ".$_POST['processor']." ".$_POST['price']." ".$_POST['RAM']." ".$_POST['graphics']." ".$_POST['OS']
		." ".$_POST['HDD'];
		
		
		$sql = "INSERT INTO product(image, text, brand, processor, price, RAM, graphics, OS, HDD, username,title)
		VALUES('$image','$text','$brand','$processor','$price','$RAM','$graphics','$OS','$HDD','$username','$title')";
		mysqli_query($db,$sql);
		
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
				echo "<script type = \"text/javascript\">
				alert(\your product is successfully uploaded\");
				window.location = (\"stock.php\")
			</script>";
		}else{
			$msg="There was a problem uploading the image";
		}
	}
?>		
<!doctype html>		
<html>
<head>
<style>
	.inp{
		background:transparent;
		border:none;
		border-bottom:1px solid;
	}
	.inp:hover{
		color:red;
	}
	#id{
		font-size:1vw;
	}
.text{
	font-size:1vw;
	background:transparent;
	}
.close {
	float: right;
	font-size: 2vw;
	font-weight: bold;
	margin-right:8%;
	margin-top:4%;
	cursor: pointer;
	padding-right:2%;
	height:auto;
	border:none;
	background:transparent;
	font-color:red;
}
</style>
</head>
<body>
			<div class="dropdown">
				<div id="myDropdown" class="dropdown-content">	
				<table class="tabl">	
							<th colspan="2"class="tab"><h3>product description</h3></th>
											<button class="close"><a href="sell.php">X&nbsp;</a></button>
				</table>							
						<tr>
							<td>
								<center><div class="form">
								<form action="" method="POST" target="_self" enctype="multipart/form-data">
									<table class="tab">	
										<tr>	
											<td>brand: </td>
											<td><input type="text" class="inp" name="brand" maxlength="15" required/></td>
										</tr>	
										<tr>
											<td>processor:	</td>
											<td><input type="text" class="inp" name="processor" maxlength="20" required/></td>
										</tr>
										<tr>
											<td>price(Php):	</td>
											<td> <input type="text" class="inp" name="price" maxlength="6" required></td>
										</tr>
										<tr>
											<td>RAM: </td>		
											<td><input type="text" class="inp" name="RAM" maxlength="10" required/></td>
										</tr>
										<tr>
											<td>graphics: </td>
											<td><input type="text" class="inp" name="graphics" maxlength="30" required/></td>
										</tr>
										<tr>
											<td>OS:	</td>		
											<td><input type="text" class="inp" name="OS" maxlength="10" required/></td>
										</tr>
										<tr>
											<td>HDD: </td>	
											<td><input type="text" class="inp" name="HDD" maxlength="12" required/></td>
										</tr>
										<tr>
											<td colspan="2"><input type="hidden" name="size" value="1000000"><input type="file" name="image" class="text"></td>
										</tr>
										<tr>
											<td>comment your laptop:</td>
										</tr>
										<tr>
											<td colspan="2">
												<textarea name="texts" cols="30" rows="2" placeholder="say something about your laptop" class="text"></textarea>
											</td>
										</tr>	
										<tr>
											<td colspan="2"><input type="hidden" style="width:10%" name="Id" maxlength="12" value="<?=$_SESSION["username"];?>" required/>
												<input type="submit" name="upload" value="upload" class="tab">
											</td>	
										</tr>	
									</table>	
								</form>
								</div>
							</td>
					</table>
			  </div>
			  			<script>
							function myFunction() {
							  document.getElementById("myDropdown").classList.toggle("show");
							}
						</script>
			</div>
</body>			