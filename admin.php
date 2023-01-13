<?php
 session_start();
if(!isset($_SESSION['username'])){  
    header("location:admin_login.php");  
} 

?> 
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>admin</title>
	<style>
	.head{
		margin-left:60%;
	}
	.logo{
		margin-left: 75%;
		margin-top:-4%;
	}
	.nav{
		position:fixed;
	}	
	body {font-family: Berlin Sans FB;}
	.sub{
		position:fixed;
		margin-top:2.5%;
		margin-left:10%;
		font-size:1.4vw;
		z-index:2;
	}
	.rem{
	  background-color: #ddd;
	  border: none;
	  color: white;
	  text-align: center;
	  font-size: 1.3vw;
	  height:auto;
	  transition: 0.3s;
	  font-family: Berlin Sans FB;
	}
	.rem:hover {
		background-color: orange;
		color: white;
	}
	.table{
		display:inline-block;
		margin-top:2%;
		font-size:1.2vw;
		text-align:center;
		padding-top:0%;
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
		}
		.mov:hover{
		  background-color: #3e8e41;
		  color: white;
		  font-size: 1.2vw;
		}
	.post:hover {
		background-color: #3e8e41;
		color: white;
	}
			.test{
			display:inline-block;
			margin-top:1%;
			font-size:1.2vw;
			font-family:Berlin Sans FB;
			background-color:#ffffe6;
			transition: 0.4s;
			height:50%;
			width:20%;
			text-align:center;
		}
		.test:hover{
			background-color:#ffff80;
		}
		
		img{
			width:100%;
			height:auto;
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
.			
	</style>	
	<script type="text/javascript">
		function confirm_delete(id){
			if(confirm("are you sure to remove this product?"))
			{
				window.location.href='admin_delete_product.php?id='+id;
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
						  <a href="admin_users.php"></li class="pick"> USERS&nbsp </li></a>/
						  <a href="admin.php"></li class="pick"> PRODUCTS&nbsp </li></a>/
						</div>
<div style="margin-top:8%;overflow:scroll;height:540px; overflow-x:hidden; padding-right:1%;">						
	<div style="margin-left:10%;">				
				<?php


					$mysqli = new mysqli("127.0.0.1", "admin", "0987", "modern_eniac");
					// Check servernameconnection
					if (mysqli_connect_errno()) {
							printf("Connect failed: %s\n", mysqli_connect_error());
					}else{
							$sql = "SELECT * FROM product inner join users on users.username=product.username 
									where item_no is not null";
							$result = $mysqli->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
				?>	
				<table class="test">
					<tr><td><a href="javascript:confirm_delete(<?php echo $row['item_no']; ?>)" ><img src="pics/x.png" class="x" style="width:10%;float:right;"></a></td></tr>
					<tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>Owner: <?php echo $row['fname'];?> <?php echo $row['mi'];?>. <?php echo $row['lname'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr>
									<tr><td><a href="admin_product_specs.php?id=<?php echo $row['item_no'];?>" >
									<input type="submit" name="submit" value="more" class="mov"  id="myBtn"></a></submit></td></tr>
				</table>	
							<?php
									}	
								}	
							}$mysqli->close();	
							?>
	</div>	
</div>		
</body>
</html>