	
<!doctype html>																																																												
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>select_images</title>
	<style>
		.test{
			display:inline-block;
			font-size:1.2vw;
			font-family:Berlin Sans FB;
			background-color:#ffffe6;
			transition: 0.4s;
			height:auto;
			width:20%;
			margin-left:1%;
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
		}
		.my{
			padding-top:3%;
			padding-bottom:2%;
			text-transform:uppercase;
		}
		h1{
			font-family: Calibri;
		}
	</style>
</head>
<body>
<div style="">
	<?php	
			if(!empty($_GET['specs'])){
			$con = new mysqli('localhost','user','1234','modern_eniac');
			$query = str_replace(" ", "+", $_GET["specs"]);
			$condition = '';
			$query = explode(" ", $_GET["specs"]);

			foreach($query as $text)  
                          {  
                               $condition .= "title LIKE '%".mysqli_real_escape_string($con, $text)."%' OR ";  
                          }  
			$condition = substr($condition, 0, -4);  
                          $sql = "SELECT * FROM product WHERE " . $condition;
			
			
			$result=$con->query($sql);
			if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				if($row['username'] != $_SESSION['username'])
				{
	?>			
				<a href="product_specs.php?id=<?php echo $row['item_no'];?>"><table class="test">
					<tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>graphics: <?php echo $row['graphics'];?></td></tr>
					<tr><td>Price:Php <?php echo $row['price'];?></td></tr>
					<tr><td colspan="2">
					<form action="insert_cart.php" method="POST">
					<input type="hidden" name="item_no" value="<?php echo $row['item_no'];?>">
					<input type="submit" value="move to cart" class="mov">
					</form></td></tr>	
				</table></a>
	<?php	
				}
			if($row['username'] == $_SESSION['username'])
			{
	?>
			<a href="product_specs.php?id=<?php echo $row['item_no'];?>"><table class="test">
					<tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>HDD: <?php echo $row['HDD'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr>
					<tr><td colspan="2" class="my">my product</td></tr>
				</table></a>
	<?php
			}
	
	
				}
			}
			if($result->num_rows == 0)
			{
	?>
			<center>
			<h1>Sorry we can't find the product: <?php echo $_GET['specs'];?></h1>
			</center>
	<?php	
			}
			}
			
		?>
	
</div>	
</body>
</html>

