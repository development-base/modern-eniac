<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>admin_users</title>
	<style>
	body{
		font-family:Berlin Sans FB;
	}
	.head{
		margin-left:60%;
	}
	.logo{
		margin-left: 75%;
		margin-top:-4%;
	}
	.nav{
		position:fixed;
		font-family:Berlin Sans FB;
	}	

	.sub{
		position:fixed;
		margin-top:2.5%;
		margin-left:10%;
		font-size:1.4vw;
		z-index:2;
	}
	
	.prod{
		border-collapse: collapse;
		text-align:center;
		font-size:1.2vw;
		margin-bottom:1%;
		background-color: #ffffcc;
		width:100%;
		transition: 0.4s;
	}
	.prod:hover{
		background-color: #ffff99;
	}
.product{
	width:20%;
	display:inline-block;
	margin-left:2%;
	margin-top:2%;
}
	.rem{
		border-color:#b1c0d1;
		border-radius:10%;
		background-color:#b1c0d1;
		font-size:1vw;
		text-align:center;
		width:50%;
		padding-top:1%;
		padding-bottom:1%;
		cursor:pointer;
		height:auto;
	}
	rem:hover{
		color:red;
	}
	.us{
		text-align:center;
		font-family:OCR A Extended;
		text-transform:uppercase;
	}
			.logi{
				position:fixed;
				margin-top:-1.2%;
				margin-left:-6%;
				cursor:pointer;
				height:auto;
				z-index:2;
				border:none;
				padding:1.2%;
				border-radius:15%;
				font-size: 1vw;
				font-family:Berlin Sans FB;
			}
			.logi:hover{
				background-color: red;
				color:yellow;
			}	
.x{
	margin-left:90%;
	font-size: 2vw;
}			
</style>
<script type="text/javascript">
	function confirm_delete(id){
		if(confirm("are you sure to permanently remove this buyer/seller?"))
		{
			window.location.href='delete_user.php?id='+id;
		}
	}
</script>
</head>
<body>
				<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li> MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
				<!--navigation-->
				
						<div class="sub">
							<a href="admin_logout.php"><input type="submit" value="Logout" name="but_logout" class="logi"></a>
						  <a href="admin_users.php"></li class=""> USERS&nbsp </li></a>/
						  <a href="admin.php"></li class=""> PRODUCTS&nbsp </li></a>/
						</div>
<div style="margin-top:8%;overflow:scroll;height:540px;">
				<?php
						$mysqli = new mysqli("localhost", "admin", "0987", "modern_eniac");
						// Check servernameconnection
						if (mysqli_connect_errno()) {
								printf("Connect failed: %s\n", mysqli_connect_error());
						}else{
								$sql = "SELECT * FROM users";
								$result = $mysqli->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
								// output data of each row
					?>		
							<div class="product">
								<table class="prod">	
									<tr><td><a href="javascript:confirm_delete(<?php echo $row['userId']; ?>)"><img src="pics/x.png" width="10%" class="x"></a></td></tr>
									<tr><td class="us"><?php echo $row['fname'];?> <?php echo $row['mi'];?>. <?php echo $row['lname'];?></td></tr>
									<tr><td>address:<?php echo $row['address'];?></td></tr>
									<tr><td>email: <?php echo $row['email'];?></td></tr>
									<tr><td>contact no.:<?php echo $row['contact_no'];?></td></tr>
									<tr><td><a href="admin_stock.php?id=<?php echo $row['username']?>"><button class="rem">show product</button></a></td></tr>
								</table>
							</div>	
					<?php	}
						}
					}	$mysqli->close();
					?>
</div>
</body>
</html>