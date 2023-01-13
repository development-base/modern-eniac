<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>admin_login</title>
	<style>
	body{
		font-size:1.2vw;
		font-family:Berlin Sans FB;
	}
	.head{
		margin-left:60%;
	}
	.logo{
		margin-left: 75%;
		margin-top:-4%;
	} 		
	.nav{
		position:fixed;
	}	
.log{
	position:fixed;
	z-index:2;
	margin-top:10%;
	margin-left:40%;
}
			.textbox{
				color:none;
				font-family:Berlin Sans FB;
				font-size:1.1vw;
				background:transparent;
				border:none;
				border-bottom:1px solid;
			}	
			.textbox1{
				margin-left:25%;
			}
			.sub{
				color:none;
				font-family:Berlin Sans FB;
				font-size:1.1vw;
				background:transparent;
				border:none;
				margin-left:25%;
				margin-top:3%;
				cursor:pointer;
			  background-color: green;
			  color: white;
			  padding:1% 2% 1% 2%;
			  border-radius:20%;
			  
			}	
			.sub:hover{
				background-color:red;
				border-color: #f44336;
				color: white;
			}
	</style>	
</head>
<body>
				<!--navigation-->
					<div class="nav">
						<nav ></br></br></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li> MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
	<form action="" method="POST">
				<div id="div_login" class="log">
							<div>
								username: <input type="text" class="textbox" id="txt_uname" name="username"required/>
							</div></br>
							<div>
								password: <input type="password" class="textbox" id="myinput" name="pwd"required/>
									<script>
											function myFunction() {
											  var x = document.getElementById("myinput");
											  if (x.type === "password") {
												x.type = "text";
												 } else {
													x.type = "password";
												 }
											}
									</script>
							</div><br>
							<div>
								<input type="checkbox" onclick="myFunction()" class="textbox1">Show Password</br>
								<input type="submit" value="Submit" name="login" id="but_submit" class="sub"/>
							</div></br>
				</div>
	</form>			
						  <div class="rect"></div>
						 </nav>	
						<!--navigation-->
					</div> </br></br>
	<div>				

</body>
</html>
<?php

	$con=mysqli_connect('localhost','admin','0987') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));



	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		$sql="SELECT * FROM admin WHERE username='".$username."' and password='".$pwd."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				
				session_start();
				$_SESSION['username']= $row['username'];
				$_SESSION['pwd']=$row['password'];
			echo "<script type = \"text/javascript\">
				alert(\"welcome ".$username."\");
				window.location = (\"admin.php\")
			</script>";
			}
		}else{			
			echo "<script type = \"text/javascript\">
					alert(\"invalid username or password\");
			</script>";
			}
		}


?>