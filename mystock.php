<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
	} 
	$con=mysqli_connect('localhost','user','1234') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));



		
		$userID=$_SESSION['userID'];
		$sql="SELECT * FROM product WHERE userID='".$userID."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){

				echo $row['item_no']."<br>".		
					$row['brand']."<br>".
					$row['processor']."<br>".
					$row['price']."<br>".
					$row['condition']."<br>".
					$row['RAM']."<br>".
					$row['graphics']."<br>".
					$row['OS']."<br>".
					$row['HDD']."<br>"."<br>"."<br>"."<br>";
				
				
				
			}
		}else{
				echo"error";
			}
		


?>