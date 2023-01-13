<!doctype html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>stock</title>
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
	.my_prod{
		display:inline-block;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background-color:#ffffe6;
		transition: 0.4s;
		border:1px solid; 
		width:20%;
		text-align:center;
	}
	.my_prod:hover{
		background-color:#ffff80;
	}
	.comm{
		border:none;
		background-color:none;
		font-size:1vw;
		font-family:Berlin Sans FB;
		background:transparent;
		text-align:center;
	}
	.edit{
	  background-color: #ddd;
	  border: none;
	  color: white;
	margin-left:10%;
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
	img{
			width:100%;
			height:auto;
	}
</style>
<script type="text/javascript">
	function confirm_delete(id){
		if(confirm("are you sure to remove this product?"))
		{
			window.location.href='delete_product2.php?id='+id;
		}
	}
</script>
</head>
<body>
						<!--navigation-->
					<div class="nav">
						<nav></br></br>
						  <div class="grid-container">
							<a href="sell.php"><li class="view">BACK</li></a>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>	 
						<!--  **navigation--*-->
						<li><p class="my">MY PRODUCTS</p></li>
<?php
	session_start();
	
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));

		$username=$_SESSION['username'];
		$sql="SELECT * FROM product WHERE username='".$username."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
?>			
				<table class="my_prod">	
					<tr><td class="tex"><img src="images/<?php echo $row['image'];?>" width="300" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>HDD: <?php echo $row['HDD'];?></td></tr>
					<tr><td>RAM: <?php echo $row['RAM'];?></td></tr>
					<tr><td>graphics: <?php echo $row['graphics'];?></td></tr>
					<tr><td>operating system: <?php echo $row['OS'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr>
					<tr><td>reason for selling:<br></td></tr>
					<tr><td><textarea class="comm" name="texts" cols="30" rows="2" placeholder="<?php echo $row['text'];?>" readonly></textarea></td></tr>
									<tr><td><button class="edit"><a href="stock_edit_prod.php?id=<?php echo $row['item_no'];?>" >Edit</a></button>
										<button class="rem"><a href="javascript:confirm_delete(<?php echo $row['item_no']; ?>)" >Remove</a></button></td></tr>
					
				</table>
				
<?php				
			}
		}
?>	
</body>
</html>	
<?php
	if(isset($_GET['id'])){
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