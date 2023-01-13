<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
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

	.my_prod{
		display:inline-block;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background-color:#ffffe6;
		transition: 0.4s;
		border:1px solid; 
		width:100%;
		text-align:center;
	}
	.my_prod:hover{
		background-color:#ffff80;
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
	.uname{
		font-family:Berlin Sans FB;
		font-size:1.6vw;
		z-index:2;
		position:fixed;
		margin-left:20%;
		margin-top:2.5%;
		text-transform:uppercase;
	}
		img{
			width:100%;
			height:auto;
		}
			.edit{
	  background-color: #ddd;
	  border: none;
	  color: white;
	  font-size: 1.3vw;
	  height:auto;
	  transition: 0.3s;
	  font-family: Berlin Sans FB;
	}
	.edit:hover {
		background-color: orange;
		color: white;
	}
	.rem{
	  font-size: 1.3vw;
	  height:auto;
	  transition: 0.3s;
	  font-family: Berlin Sans FB;
	  background-color:transparent;
	border:none;
	}
		.comm{
		border:none;
		background-color:none;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background:transparent;
		text-align:center;
	}
	.prod{
		display:inline-block;
		width:20%;
	}
.no{
	margin-top:40%;
	font-size: 1.3vw;
	text-align:center;
}	
</style>
				<?php
						$mysqli = new mysqli("localhost", "admin", "0987", "modern_eniac");
						// Check servernameconnection
						if (mysqli_connect_errno()) {
								printf("Connect failed: %s\n", mysqli_connect_error());
						}else{
								$sql = "SELECT * FROM users  WHERE username='". $_GET['id'] ."'";
								$result = $mysqli->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
								// output data of each row
					?>	

</head>

	<script type="text/javascript">
		function confirm_delete(id){
			if(confirm("are you sure to remove this product?"))
			{
				window.location.href='admin_delete_product2.php?id='+id;
			}
		}
	</script>
<body>
				<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
							<a href="admin_users.php"><li class="view">BACK</li></a>
						  	<p class="uname"><?php echo $row['fname']?> <?php echo $row['mi']?>. <?php echo $row['lname']?>'s product</p>
								<h1 class="head"> <li> MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
									<?php	}
						}
					}	$mysqli->close();
					?>
				<!--navigation-->
<div style="margin-top:9%;overflow:scroll;height:540px;">				
<?php
	session_start();
	
	$con=mysqli_connect('localhost','admin','0987') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));

		$sql="SELECT * FROM product WHERE username='". $_GET['id'] ."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
?>			<div class="prod">		
				<table class="my_prod">	
						<tr><td><button class="rem"><a href="javascript:confirm_delete(<?php echo $row['item_no']; ?>)" ><img src="pics/x.png" style="width:10%;float:right;"></a></button></td></tr>
					<tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>graphics: <?php echo $row['graphics'];?></td></tr>
					<tr><td>RAM: <?php echo $row['RAM'];?></td></tr>
					<tr><td>operating system: <?php echo $row['OS'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr>
					<tr><td colspan="2">reason for selling:</td></tr>
					<tr><td colspan="2"><textarea class="comm" name="texts" cols="30" rows="2" placeholder="<?php echo $row['text'];?>" readonly></textarea></td></tr>
				</table>
			</div>	
<?php				
			}
		}else{
?>
			<div class="no">no product uploaded by the user yet</div>
<?php			
		}
?>	
</div>
</body>
</html>