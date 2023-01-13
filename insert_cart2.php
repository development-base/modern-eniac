<?php
session_start();

$con=new mysqli('localhost','root','','modern_eniac');
if(!$con){
	die("connection Failed:".$con->connect_error());
}
 $query="SELECT * FROM cart_item";
 $result=$con->query($query);
 if($row=$result->fetch_array());
	 
 
	 
if(!isset($_POST['move to cart'])){
	$username=$_POST['buyer'];
	$itemno=$_POST['item_no'];
		$sql="INSERT INTO cart_item(item_no,buyer)values('".$itemno."','".$username."')";
		if($con->query($sql) === TRUE){
			header('location:cart.php');
		}elseif($row['item_no'] == $row['item_no'] ){
			echo "<script type='text/javascript'>
				alert('item is already in your Cart');
				window.location=(\"sell.php\")
			</script>";
		}else{
			echo "<script type='text/javascript'>
				alert('ERROR');
				window.location=(\"sell.php\")
			</script>";
		}		
	}
?>