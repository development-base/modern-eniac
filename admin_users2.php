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
		margin-left:1%;
		paddding-top:2%;
		display:inline;
		text-algin:center;
		font-size:1.2vw;
		padding-right:1%;
	}
	.desc{
		font-family:Berlin Sans FB;
		text-align:left;
	}
	.rem{
		border-color:#b1c0d1;
		border-radius:25%;
		background-color:#b1c0d1;
		color:;
		width:auto;
		font-size:1.vw;
		text-align:center;
	}
	rem:hover{
		color:red;
	}
	.us{
		text-align:center;
		font-family:OCR A Extended;
	}
	a:hover{
		text-decoration:underline;
		color: white;
	}
</style>
<script type="text/javascript">
	function confirm_delete(id){
		if(confirm("are you sure to remove this buyer/seller?"))
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
						  <a href="admin_users.php"></li class=""> USERS&nbsp </li></a>/
						  <a href="admin_product.php"></li class=""> PRODUCTS&nbsp </li></a>/
						</div>
					</div></br></br></br></br></br></br></br></br>

				<?php
						$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
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
						<fieldset class="prod">	
								<table class="prod">	
									<tr><td class="us" colspan="2"><h3><?php echo $row['username'];?></h3></td></tr>
									<tr><td class="desc">name: </td><td><?php echo $row['fname'];?> <?php echo $row['mi'];?>. <?php echo $row['lname'];?></td></tr>
									<tr><td class="desc">address: </td><td><?php echo $row['address'];?></td></tr>
									<tr><td class="desc">email: </td><td><?php echo $row['email'];?></td></tr>
									<tr><td class="desc">contact no.:</td><td><?php echo $row['contact_no'];?></td></tr>
									<tr><td class="desc">user ID: </td><td><?php echo $row['userId'];?></td></tr>
									<tr><td colspan="2" class="rem"><a href="javascript:confirm_delete(<?php echo $row['userId']; ?>)">remove this user</a></td></tr>
									<tr><td class="desc"><a href="admin_stock.php">show product</a></td></tr>
								</table>
							</fieldset>	
								
					<?php	}
						}
					}	$mysqli->close();
					?>
	
</body>
</html>
<?php
	if(isset($_GET['confirm_delete'])) {
		$item_no = $_POST['item_no'];
		$brand = $_POST['brand'];
		$processor = $_POST['processor'];
		$price = $_POST['price'];
		$RAM = $_POST['RAM'];
		$graphics = $_POST['graphics'];
		$OS = $_POST['OS'];
		$HDD = $_POST['HDD'];
		$userId = $_POST['userId'];
	}
?>	