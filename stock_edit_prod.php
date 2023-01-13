<html>
<head>
<title>editMe</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
<style>
	.head{
		margin-left:40%;
	}
	.logo{
		margin-left: 60%;
		margin-top:-4%;
	}
	.my{
		font-size:2.5vw;
		font-family:Berlin Sans FB;
		text-align:center;
		margin-top:7%;
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
			.my_prod{
		display:inline-block;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background-color:#ffffe6;
		transition: 0.4s;
		border:1px solid; 
		width:23%;
	}
	.my_prod:hover{
		background-color:#ffff80;
	}
	td{
		font-size:1vw;
	}
	input{
		background:transparent;
		border:none;
		border-bottom:1px solid;
		font-size:1vw;
	}
	input:hover{
		color:red;
	}
	.comm{
		border:none;
		background-color:none;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background:transparent;
		text-align:center;
	}

		img{
			width:100%;
			height:auto;
		}	
</style>
</head>
<body>
					<!--navigation-->
					<div class="nav">
						<nav></br></br>
						  <div class="grid-container">
							<a href="stock.php"><li class="view">BACK</li></a>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>	 
						<!--  **navigation--*-->
						<li><p class="my">MY PRODUCTS</p></li>
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
						<center><div class="form">
								<form action="stock_update.php" method="POST">
									<table class="my_prod">	
										<tr><td class="tex" colspan="2"><img src="images/<?php echo $row['image'];?>" width="300" height="200"></td></tr>
										<tr><td>Brand:</td><td class="tex">		<input type="text" value="<?php echo $row['brand'];?>" name="brand" maxlength="20"></td></tr>
										<tr><td>processor:</td><td class="tex">	<input type="text" value="<?php echo $row['processor'];?>" name="processor" maxlength="30"></td></tr>
										<tr><td>HDD:</td><td class="tex">		<input type="text" value="<?php echo $row['HDD'];?>" name="HDD" maxlength="20" ></td></tr>
										<tr><td>RAM:</td><td class="tex">		<input type="text" value="<?php echo $row['RAM'];?>" name="RAM" maxlength="10" ></td></tr>
										<tr><td>graphics:</td><td class="tex">	<input type="text" value="<?php echo $row['graphics'];?>" name="graphics" maxlength="30"></td></tr>
										<tr><td>operating system:</td>	<td class="tex"><input type="text" value="<?php echo $row['OS'];?>" name="OS" maxlength="10"></td></tr>
										<tr><td>Price:</td>				<td class="tex"><input type="text" value="<?php echo $row['price'];?>" name="price" maxlength="14"></td></tr>
										<tr><td>reason for selling:<br></td></tr>
										<tr><td colspan="2"><textarea type="text" class="comm" name="texts" cols="30" rows="2" value="<?php echo $row['text'];?>" maxlength="80"></textarea></td></tr>
										<tr><td><input type="hidden" value=<?php echo $id ?>  name="item_no" maxlength="12" readonly/></td>
											<td><input type="hidden" value=<?php echo $userId ?>  name="userId" maxlength="12" readonly/></td></tr>
										<tr><td colspan="2"><input type="submit" value="update" class="mov"></td></tr>	
									</table>	
								</form>
</body>
</html>
