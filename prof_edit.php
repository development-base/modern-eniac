<?php
	session_start();
		if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		} 

?>
<!doctype html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>EDIT PROFILE</title>
<style>
	.head{
		margin-left:60%;
	}
	.logo{
		margin-left:75%;
		margin-top:-4%;
	}	.ident{
		font-family:Berlin Sans FB;
		z-index:2;
		font-size:2vw;
		position:fixed;
		margin-left:10%;
		text-transform:uppercase;
		margin-top:2%;
		margin-left:35%;
	}
.home{
	z-index:3;
	position:fixed;
}	
	.sub{
		position:fixed;
		margin-top:2.5%;
		margin-left:10%;
		font-size:1.4vw;
		z-index:2;
		font-family:Berlin Sans FB;
	}

.identity{
	margin-left:40%;
	font-size:1.2vw;
	width:25%;
}	
input{
	font-family:Berlin Sans FB;
	font-size:1.2vw;
	width:100%;
	border:none;
	border-bottom:1px solid;
}
		.update{	
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
			width:20%;
			margin-left:40%;
		}
		.update:hover{
		  background-color: #3e8e41;
		  color: white;
		  font-size: 1.2vw;
		}
</style>
</head>
<body>
				<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<li class="ident"><?php echo $_SESSION['fname'];?> <?php echo $_SESSION['mi'];?>. <?php echo $_SESSION['lname'];?></li>
								<h1 class="head"> <li> MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
						<div class="sub">
						  <a href="profile.php"></li class="home">CANCEL EDIT</li></a>
						</div>		
					</div>		 
				<!--navigation-->
<?php
	$userId="";
	$username="";
	$lname="";
	$fname="";
	$mi="";
	$address="";
	$contact_no="";
	$email="";
	
		$con = new mysqli("localhost", "user", "1234", "modern_eniac");
			if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		}else{
		$sql = "SELECT * FROM users WHERE userId = '".$_GET['id']."'";
			$result = $con ->query($sql);
			$row = $result->fetch_assoc();
			if ($result->num_rows > 0) {
			$id = $row['userId'];
			$username = $row['username'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$mi = $row['mi'];
			$address = $row['address'];
			$email = $row['email'];
			$contact_no = $row['contact_no'];
?>
<div style="margin-top:10%;">
		<form method="POST" action="prof_update.php">
			<table class="identity">
			
				<tr><td>username:</td><td><input type="text" value="<?php echo $row['username'];?>" name="username" readonly></td></tr>
				<tr><td>lastname:</td><td><input type="text" value="<?php echo $row['lname'];?>" name="lname"></td></tr>
				<tr><td>firstname:</td><td><input type="text" value="<?php echo $row['fname'];?>" name="fname"></td></tr>
				<tr><td>middle initial:</td><td><input type="text" value="<?php echo $row['mi'];?>" name="mi"></td></tr>
				<tr><td>address:</td><td><input type="text" value="<?php echo $row['address'];?>" name="address"></td></tr>
				<tr><td>eMail:</td><td><input type="text" value="<?php echo $row['email'];?>" name="email"></td></tr>
				<tr><td>contact_no:</td><td><input type="text" value="<?php echo $row['contact_no'];?>" name="contact_no" maxlength="14"></td></tr>
				
				<tr><td colspan="2"><input type="hidden" value=<?php echo $id ?> name="userId"></td></tr>
				<tr><td colspan="2"><input type="submit" value="update" name="update" class="update"></td></tr>
			</table>	
		</form>
</div>		
<?php			
			}else{
			echo "error" . $con-> error;
		}	
		}
?>
</body>										
</html>