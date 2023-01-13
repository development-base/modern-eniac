<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>MY CART</title>
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
					.inbox{
					 border: none;
					 font-size: 1.6vw;
					 cursor: pointer;
					 font-family:Berlin Sans FB;
					 z-index:2;
					margin-left:14.5%;
					background-color:none;
					position:fixed;
					margin-top:2.5%;
					}
			.name{
			 font-family:Berlin Sans FB;
			}
			.product{
				text-align:center;
				font-family: Berlin Sans FB;
				font-size:1.2vw;
				display:inline-block;
				width:21%;
				transition: 0.4s;
				padding-top:0px;
				border-spacing:0;
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
			color:#3e8e41;
			cursor:pointer;
		}
		.mov:hover{
		  background-color: #3e8e41;
		  color: white;
		  font-size: 1.2vw;
		}	
		.rem{	
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
		  color: #ff0000;
			cursor:pointer;
		}
		.rem:hover{
		  background-color: #ff0000;
		  color: white;
		  font-size: 1.2vw;
		}
		img{
			width:100%;
			height:auto;
		}
		.x{
			float:right;
			color:red;
			padding-top:0%;
			width:8%;
		}
		.total{
			float:right;
			z-index:3;
			position:fixed;
			font-size: 1.3vw;
			margin-left:86%;
			font-family: Berlin Sans FB;
			margin-top:6%;
		}
.all{
	margin-top:7%;
	overflow:scroll;
	overflow-x:hidden;
	height:550px;
}
.prod{
	background-color:#ffffe6;;
	table-collapse:collapse;
	border-color:#ffffe6;;
}	
		</style>
<script type="text/javascript">
	function confirm_delete(id){
		if(confirm("are you sure to remove from your cart?"))
		{
			window.location.href='cart_delete_prod.php?id='+id;
		}
	}
</script>
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
							<a href="sell.php"><li class="view">BACK&nbsp;</a></li>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>	
						<!--  **navigation--*-->

<div class="total">					
<?php
		session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		} 
	$con=new mysqli('localhost','user','1234','modern_eniac');
		
	if(!$con){
		die("Connection Failed:".$con->connect_error());
	}
	$sql = "SELECT sum(price) as price FROM product INNER JOIN cart_item ON cart_item.item_no=product.item_no AND buyer='".$_SESSION['username']."'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
						echo 'current total of item';
						echo "<br>";
						echo ' in your cart:';
				while($row = $result->fetch_array()) {
						
?>	
			<div>Php <?php echo $row['price'];?></div>
<?php							
								}
						      }
						$con->close();	
					?>	
</div>						
<div class="all">		
	<?php
		if(!isset($_SESSION['username'])){  
			header("location:index.php");  
			} 
		$con=new mysqli('localhost','user','1234','modern_eniac');
			
		if(!$con){
			die("Connection Failed:".$con->connect_error());
		}
		$sql = "SELECT * FROM product LEFT JOIN cart_item ON product.item_no=cart_item.item_no WHERE buyer='".$_SESSION['username']."'";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_array()) {
						$query="SELECT * FROM users WHERE username='".$row['username']."'";
						$result2=$con->query($query);
					if($result2->num_rows >0){
						while($row2=$result2->fetch_array()){
							
	?>					
	<table id="test" class="product">
		<tr><td></td><td class="x"><a href="javascript:confirm_delete(<?php echo $row['item_no']; ?>)" ><img src="pics/x.png"></a></td></tr>
		<tr><td colspan="2" class="prod"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"> </td></tr>
		<tr><td colspan="2" class="prod"><?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
		<tr><td colspan="2" class="prod">owner: <?php echo $row2['fname'];?> <?php echo $row2['mi'];?>. <?php echo $row2['lname'];?></td></tr>
		<tr><td colspan="2" class="prod">hdd/ram: <?php echo $row['HDD'];?> <?php echo $row['RAM'];?></td></tr>
		<tr><td colspan="2" class="prod">operating system:<?php echo $row['OS'];?></td></tr>
		<tr><td colspan="2" class="prod">price: Php <?php echo $row['price'];?></td></tr>			
		<tr><td>	
			<td><form action="cart_message3.php" method="POST">
			<input type="hidden" name="item_no" value="<?php echo $row['item_no'];?>" readonly/> 
			<input type="hidden" name="seller" value="<?php echo $row['username'];?>" readonly/> 
			<input type="hidden" name="buyer" value="<?=$_SESSION['username'];?>" readonly/> 
			<textarea type="text" name="msg" cols="40" rows="2" style="display:none;">
					<b>I am interested to buy your <?php echo $row['brand'];?> <?php echo $row['processor'];?>
					worth of Php <?php echo $row['price'];?></b>
			</textarea>
			<input type="submit" class="mov" name="submit" value="buy this product"/>
		</form></td></tr>
	</table>
	<?php							
									}
								  }	
								}	
		}
							$con->close();	
						?>
	</br>
</div>
    </body>

</html>