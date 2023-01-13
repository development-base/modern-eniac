<!doctype html>																																																												
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>select_images</title>
	<style>
		.test{
			display:inline-block;
			padding-right:1%;
			padding-top:1%;
			font-size:1.3vw;
			font-family:Berlin Sans FB;
			background-color:#ffffe6;
			transition: 0.4s;
			height:auto;
			width:20%;
		}
		.test:hover{
			background-color:#ffff80;
		}
		td,.tex{
			text-align:center;
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
		img{
			width:100%;
			height:auto;
			margin-left:2.5%;
		}
	</style>
</head>
<body>
<div class="pic">	
	<?php	
			
			$con=new mysqli('localhost','root','','modern_eniac');
		
			$sql="SELECT * FROM product";
			$result=$con->query($sql);
			if($result->num_rows > 0){
				while($row=$result->fetch_array()){
					
		
	?>			
				
				<table class="test">
					<a href="product_specs.php"><tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr></a>
					<tr><td>Brand</td><td class="tex"><?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>Owner</td><td class="tex"><?php echo $row['username'];?></td></tr>
					<tr><td>Price</td><td class="tex"><?php echo $row['price'];?></td></tr>
					<tr><td colspan="2">
					<form action="insert_cart.php" method="POST">
					<input type="hidden" name="seller" value="<?php echo $row['username']?>">
					<input type="hidden" name="buyer" value="<?=$_SESSION['username'];?>">
					<input type="hidden" name="item_no" value="<?php echo $row['item_no'];?>">
					<input type="submit" name="submit" value="move to cart" class="mov"></submit></td></tr>
				</table>
			
				</form>
	<?php	
		}
	}
	
	?>
</div>
</body>
</html>