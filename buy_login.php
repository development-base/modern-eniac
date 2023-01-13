<!doctype html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<style>.head{
					margin-left:40%;
				}
			.logo{
				margin-left: 60%;
					margin-top:-4%;
			}

			.feat{
				font-size:1.2vw;
			}
			.ico{
				display:inline;
			}
			.nav{
				position:fixed;
				margin-top:-9%;
			}
		body{
			font-family:Berlin Sans FB;
		}
		form{
			padding-top:5%;
			margin-top:10%;
		}
		.tabl{
			border-style:1px solid;
			padding-top:3%;
			padding-bottom:3%;
			padding-left:3%;
			padding-right:3%;
			margin-left:40%;
			margin-right:40%;
			font-family:Berlin Sans FB;
			font-size:1.3vw;
			background-color:#f2f2f2;
		}
			.sub{
				font-family:Berlin Sans FB;
				cursor:pointer;
				font-size:1.1vw;
			}
			.textbox{
				color:none;
				font-family:Berlin Sans FB;
				font-size:1.1vw;
				background:transparent;
				border:none;
				border-bottom:1px solid;
			}	
			input[type=text]:focus,input[type=password]:focus{
			  background-color: f2f2f2;
			  outline: none;
			}
.reg{
	font-size:1vw;
}
	</style>
</head>
<body>

							<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li>MODERN ENIACs</li></h1>
								<li><a href="buy.php"><h4 class="head2">back</h4></a></li>
							<img src="iro.png" class="logo">

						  </div>
						  <div class="rect"></div>
						 </nav>
					</div>
						<!--  ****-->

	<form action="login.php" method="POST">

				<center><div id="div_login" class="tabl">
							<div>
								<input type="text" class="textbox" id="txt_uname" name="username"placeholder="username"required/>
							</div></br>
							<div>
								<input type="password" class="textbox" id="myinput" name="pwd" placeholder="password"required/>
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
								<input type="checkbox" onclick="myFunction()" class="textbox">Show Password</br>
								<input type="submit" value="Submit" name="login" id="but_submit" class="sub"/>
							</div></br>
							<div><p class="p">not yet a member?<a href="register.php" class="reg">register</a></p></div>
				</div>
	</form>
	
</body>
</html>
<?php

	$con=mysqli_connect('localhost','pj','') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));



	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		$sql="SELECT * FROM users WHERE username='".$username."' and password='".$pwd."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){

				session_start();
				$_SESSION['username']= $row['username'];
				$_SESSION['pwd']=$row['password'];
				$_SESSION['lname']=$row['lname'];
				$_SESSION['fname']=$row['fname'];
				$_SESSION['mi']=$row['mi'];
				$_SESSION['address']=$row['address'];
				$_SESSION['email']=$row['email'];
				$_SESSION['contact']=$row['contact_no'];
				
			echo "<script type = \"text/javascript\">
				alert(\"welcome ".$_SESSION['fname']." ".$_SESSION['mi']." ".$_SESSION['lname']."\");
				window.location = (\"sell.php\")
			</script>";
			}
		}else{
				echo"Invalid username and password";
			}
		}


?>
