<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index2.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: homepage.html');
}
?>
<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="style.css">
		<title>sell</title>
		<style>
			.head{
					margin-left:40%;
				}
			.logo{
				margin-left: 60%;
					margin-top:-4%;
			}
			.ins{
				font-family: maiandra GD;
				list-style: inline;
			}
			
			.feat{
				font-size:1.2vw;
			}
			.dropbtn{
				height:auto;
				width:5%;
				position:fixed;
				margin-left:50%;
				max-width:5%;
				margin-top:6.5%;
				z-index:3;
				cursor:pointer;
			}
			.buy{
				height:auto;
				width:6%;
				position:fixed;
				margin-left:44%;
				max-width:5%;
				margin-top:6.5%;
			}
			.ico{
				display:inline;
			}
			.nav{
				position:fixed;
			}
		</style
	</head>
    <body>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li>MODERN ENIACs</li></h1>
								
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>
						<!--  ****-->
    </body>
</html>