
<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="style.css">
		<title>more specs</title>
		<style>
			.head{
					margin-left:40%;
				}
			.logo{
				margin-left: 60%;
					margin-top:-4%;
			}
			.nav{
				position:fixed;
			}
				.view{
			 border: none;
			 font-size: 1.6vw;
			 cursor: pointer;
			 font-family:Berlin Sans FB;
			 z-index:2;
			margin-left:10%;
			background-color:none;
			position:fixed;
			margin-top:2.5%;
			}
		.my_prod{
			display:inline-block;
			font-size:1.1vw;
			font-family:Berlin Sans FB;
			background-color:#ffffe6;
			transition: 0.4s;
			width:23%;
		}
		.my_prod:hover{
			background-color:#ffff80;
		}
		.mov{	
			font-family: Berlin Sans FB;
			background-color: #ddd;
			border: none;
			color: black;
			padding-left:2%;
			padding-right:2%;
			padding-bottom:2%;
			padding-top:2%;
			font-size: 1.2vw;
			transition: 0.3s;
			border-radius:10%;
		}
		.mov:hover{
		  background-color: #3e8e41;
		  color: white;
		  font-size: 1.2vw;
		}
		td{
			text-align:center;
		}
		.comm{
			border:none;
			background-color:none;
			font-size:1.3vw;
			font-family:Berlin Sans FB;
			background:transparent;
			text-align:center;
		}
	button{
		width:auto;
		height:30%;
	}
		img{
			width:100%;
			height:auto;
			text-align:center;
		}
		</style>
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
							<a href="admin.php"><li class="view">BACK</li></a>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
						<!--  **navigation--*-->
<div style="margin-top:10%;">						
<?php
	$mysqli = new mysqli("localhost", "admin", "0987", "modern_eniac");
	// Check servernameconnection
	if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
	}else{
		
	$sql = "SELECT * from product inner join users on users.username=product.username and item_no='". $_GET['id']."'";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					
?>					
				<center><table class="my_prod">	
					<tr><td class="tex" colspan="2"><img src="images/<?php echo $row['image'];?>" width="400" height="300"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>owner name: <?php echo $row['fname'];?> <?php echo $row['mi'];?>. <?php echo $row['lname'];?></td></tr>
					<tr><td>HDD: <?php echo $row['HDD'];?></td></tr>
					<tr><td>RAM: <?php echo $row['RAM'];?></td></tr>
					<tr><td>graphics: <?php echo $row['graphics'];?></td></tr>
					<tr><td>operating system: <?php echo $row['OS'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr>
					<tr><td>reason for selling:</td></tr>
					<tr><td><textarea class="comm" name="texts" cols="30" rows="2" placeholder="<?php echo $row['text'];?>" readonly></textarea></td></tr>
					<tr><td colspan="2"><button class="mov"><a href="admin.php">BACK</a></button></a></td></tr>
				</table></center>
<?php							}	
							}	
						}$mysqli->close();	
					?>
					
</div>
    </body>
</html>