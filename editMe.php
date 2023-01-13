<html>
<head>
<title>editMe</title>
<style>
	.specs{
		width:30%;
		height:auto;
		font-size:1vw;
		margin-top:1%;
		border:none;
		border-bottom:1px solid;
		text-align:center;
	}
	.spec{
		width:30%;
		height:auto;
		font-size:1vw;
		margin-top:10%;
		margin-left:35	%;
	}
	.tab{
		height:auto;
		font-size:1vw;
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
								<form action="update.php" method="POST">
									<table class="tab">
										brand	<input type="text" class="specs" value="<?php echo $brand ?>" name="brand" maxlength="10" required/><br>
										processor	<input type="text" class="specs" value="<?php echo $processor ?>" name="processor" maxlength="10" required/><br>
										price		<input type="text" class="specs" value="<?php echo $price ?>"  name="price" maxlength="14" required value="Php&nbsp"/><br>
										RAM			<input type="text" class="specs" value="<?php echo $RAM ?>"  name="RAM" maxlength="10" required/><br>
										graphics	<input type="text" class="specs" value="<?php echo $graphics ?>"  name="graphics" maxlength="30" required/><br>
										OS			<input type="text" class="specs" value="<?php echo $OS ?>"  name="OS" maxlength="10" required/><br>
										HDD			<input type="text" class="specs" value="<?php echo $HDD ?>"  name="HDD" maxlength="12" required/><br><br>
													<input type="hidden" value=<?php echo $id ?>  name="item_no" maxlength="12" readonly/>
													<input type="hidden" value=<?php echo $userId ?>  name="userId" maxlength="12" readonly/>
										<input type="submit" value="update" class="tab">
										
									</table>	
								</form>
					</fieldset>			
</body>
</html>