<html>
<head>
<title>editMe</title>
<style>
	.specs{
		height:auto;
		font-size:1vw;
		margin-top:1%;
		border-radius:12px;
		text-align:center;
		padding-bottom:2%;
		padding-top:2%;
	}
	* {
	box-sizing: border-box;
	font-family: Berlin Sans FB;
		font-size:1.4vw;
  
	}
	input[type=text]:focus, select:focus{
	outline:none;
	}
	.spec{
		width:30%;
		height:auto;
		font-size:1vw;
		margin-top:10%;
		margin-left:35%;
		padding-bottom:2%;
		padding-top:2%;
	}
	.mov{	
			font-family: Berlin Sans FB;
			background-color: #ddd;
			border: none;
			color: black;
			padding-left:4%;
			padding-right:4%;
			padding-bottom:2%;
			padding-top:2%;
			font-size: 1.2vw;
			transition: 0.3s;
			border-radius:10%;
			margin-left:35%;
		}
		.mov:hover{
		  background-color: #3e8e41;
		  color: white;
		  font-size: 1.2vw;
		}
</style>
</head>
<body>

<?php
	$item_no="";
	$brand="";
	$processor="";
	$price="";
	$RAM="";
	$graphics="";
	$OS="";
	$HDD="";
	$userId="";
	$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
	// Check servernameconnection
	if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
	}else{
			$sql = "SELECT * FROM product where item_no='". $_GET['id'] ."'";
			$result = $mysqli->query($sql);
			$row = $result->fetch_assoc();
			if ($result->num_rows > 0) {
					$id=$row['item_no'];
					$brand=$row['brand'];
					$processor=$row['processor'];
					$price=$row['price'];
					$RAM=$row['RAM'];
					$graphics=$row['graphics'];
					$OS=$row['OS'];
					$HDD=$row['HDD'];
					$username=$row['username'];
			} else {
				echo "0 results";
			}
	}			
	$mysqli->close();
?>
					<fieldset class="spec">
						<center><div class="form">
								<form action="admin_update.php" method="POST">
									<table class="tab" >  	
										<tr><td>brand	</td><td><input type="text" class="specs" value="<?php echo $brand ?>" name="brand" maxlength="10" required/><br></td></tr>
										<tr><td>processor	</td><td><input type="text" class="specs" value="<?php echo $processor ?>" name="processor" maxlength="10" required/><br></td></tr>
										<tr><td>price		</td><td><input type="text" class="specs" value="<?php echo $price ?>"  name="price" maxlength="14" required value="Php&nbsp"/><br>
										<tr><td>RAM			</td><td><input type="text" class="specs" value="<?php echo $RAM ?>"  name="RAM" maxlength="10" required/><br></td></tr>
										<tr><td>graphics	</td><td><input type="text" class="specs" value="<?php echo $graphics ?>"  name="graphics" maxlength="30" required/><br></td></tr>
										<tr><td>OS			</td><td><input type="text" class="specs" value="<?php echo $OS ?>"  name="OS" maxlength="10" required/><br></td></tr>
										<tr><td>HDD			</td><td><input type="text" class="specs" value="<?php echo $HDD ?>"  name="HDD" maxlength="12" required/><br></td></tr>
													<tr><td><input type="hidden" value=<?php echo $id ?>  name="item_no" maxlength="12" readonly/></td>
													<td><input type="hidden" value=<?php echo $userId ?>  name="userId" maxlength="12" readonly/></td></tr>
										<tr><td colspan="2"><input type="submit" value="update" class="mov"></td></tr>
										
									</table>	
								</form>
					</fieldset>			
</body>
</html>