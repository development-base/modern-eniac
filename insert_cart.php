<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		}
	$con=new mysqli('localhost','root','','modern_eniac');
	if(!$con){
		die("Connection Failed:".$con->connect_error());
	}
	if(!isset($_POST['move to cart'])){
	$itemno=$_POST['item_no'];
	
	$sql = "SELECT * FROM cart_item WHERE buyer='".$_SESSION['username']."' AND item_no='".$itemno."'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){
				echo "<script type='text/javascript'>alert('Already in cart!');window.location = (\"sell.php\")</script>";
				}
			}else{
				$query="INSERT INTO cart_item(item_no,buyer)values('".$itemno."','".$_SESSION['username']."')";
				if($con->query($query) === TRUE){
				header('Location: cart.php');
				}else{
					echo "<script type='text/javascript'>alert('Error!');window.location = (\"sell.php\")</script>";
				}
			}
		
	}
	
?>
	