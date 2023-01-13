<?php
	$con=new mysqli('localhost','root','','modern_eniac');	 	
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
		if(empty($uname)){
	$uname=$_POST['uname'];
	$sql="SELECT * FROM users WHERE username='".$uname."'";
	$result=$con->query($sql);
	if($result->num_rows> 0){
		echo"<table border=1>";
		echo"<caption>Account Settings<center></caption>";
		while($row=$result->fetch_assoc()){
			echo $row["username"]. $row["password"]."</td></tr>".
				 "<tr><td>Last Name: ".$row["lname"]."</td></tr>"."<tr><td>First Name: ".$row["fname"]."</td></tr>"."<tr><td>Middle Initial:".$row["mi"]."</td></tr>".
				 "<tr><td>Address: ".$row["address"]."</td></tr>"."<tr><td>Email: ".$row["email"]."</td></tr>"."<tr><td>Contact No.: ".$row["contact_no"]."</td></tr>";
				$username= $row['username'];
				
	}
	}else{
		echo "0 results";
	}
	}
?>
<html>

    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title></title>
		<style>
		
		</style>
	</head>
    <body>
	<form action="editor.php" method="POST">
			<h1><?=$_SESSION['uname'];?></h1>
			<br>
			Username:<?php echo $username;?><br>
			Password:<input type="text" name="username" maxlength="12" value="<?php echo $username;?>"><br><br>
			Last Name:<input type="text" name="username" maxlength="12" value="<?php echo $username;?>"><br><br>
			First Name:<input type="text" name="username" maxlength="12" value="<?php echo $username;?>"><br><br>
			Middle Initial:<input type="text" name="username" maxlength="12" value="<?php echo $username;?>"><br><br>
			Address:<input type="text" name="username" maxlength="12" value="<?php echo $username;?>"><br><br>
			Email:<input type="text" name="uname" maxlength="12" value="<?=$_SESSION['uname'];?>"><br><br>

			<br>
			<input type="submit" value="SELECT" name="update"> 
	</form>
	
	
    </body>
</html>