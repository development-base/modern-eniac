<?php
 session_start();
		if(!isset($_SESSION['username'])){  
		header("location:index.php");  
		} 
		$mysqli = new mysqli("localhost", "user", "1234", "modern_eniac");
		// Check servernameconnection
		if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		}else{
		$sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) 
									{			
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>PROFILE</title>
	<style>
	.head{
		margin-left:60%;
	}
	.logo{
		margin-left:75%;
		margin-top:-4%;
	}
	.nav{
		position:fixed;
	}	
	body {font-family: Berlin Sans FB;}

	.sub{
		position:fixed;
		margin-top:2.5%;
		margin-left:10%;
		font-size:1.4vw;
		z-index:2;
	}
	.ident{
		font-family:Berlin Sans FB;
		z-index:2;
		font-size:2vw;
		position:fixed;
		margin-left:10%;
		text-transform:uppercase;
		margin-top:2%;
		margin-left:35%;
	}
.identity{
	margin-left:40%;
	font-size:1.2vw;
	width:30%;
	margin-top:10%;
	background-color:#ffffe6;
}	
</style>
</head>
<body>
				<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li> MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
				<!--navigation-->	
				
						<div class="sub">
						  <a href="sell.php"></li class="home"> BACK&nbsp </li>/</a>
						  </li class="home"><a href="prof_edit.php?id=<?php echo $row['userId'];?>"> EDIT PROFILE </a></li></a>
						</div>					
						<div class="ident">			
							<?php echo $_SESSION['fname'];?> <?php echo $_SESSION['mi'];?>. <?php echo $_SESSION['lname'];?>	
						</div>	
					</div>	<br><br><br><br>
								<div style="margin-top;">
											<table class="identity">
												<tr><td>username:&nbsp&nbsp  </td><td><?php echo $row['username'];?></td></tr>
												<tr><td>lastname:&nbsp&nbsp </td><td><?php echo $row['lname'];?></td></tr>
												<tr><td>firstname:&nbsp&nbsp </td><td><?php echo $row['fname'];?></td></tr>
												<tr><td>middle initial:&nbsp&nbsp</td><td><?php echo $row['mi'];?></td></tr>
												<tr><td>address:&nbsp&nbsp </td><td><?php echo $row['address'];?></td></tr>
												<tr><td>eMail:&nbsp&nbsp </td><td><?php echo $row['email'];?></td></tr>
												<tr><td>contact_no:&nbsp&nbsp </td><td><?php echo $row['contact_no'] ;?></td></tr>
											</table>
								</div>	
								<?php	}  
									}
						}
						$mysqli->close();
					?> 	
					
</body>
</html>
<?php
if(isset($_GET['id'])){
	$id=$_POST['userId'];
	$username = $_POST['username'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mi = $_POST['mi'];
	$address = $_POST['address'];
	$contact_no = $_POST['contact_no'];
	$email=$_POST['email'];
}

?>