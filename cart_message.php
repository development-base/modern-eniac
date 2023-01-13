
<?php
session_start();

$con=new mysqli('localhost','root','','modern_eniac');
if(!$con){
	die("connection Failed:".$con->connect_error());
} 
if(!isset($_POST['buy this product'])){
		$buyer=$_SESSION['username'];
		$sql="INSERT INTO message(buyer)values('".$_SESSION['username']."')";
			if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
		if($con->query($sql) === TRUE){	
			header('location:cart.php');
		}else{
			echo '".error."';
			}
		}
	}
}	
?>