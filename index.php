<!DOCTYPE html>
<html>
<head>
	<title>indexpage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<style>
		.sign{
			margin-top:11%;
			position:fixed;
			margin-left:43%;
			font-size:1.2vw;
		}
	body{
		font-family:Berlin Sans FB;
		font-size:1.2vw;
	}
	table{
		border-style:solid;
		padding-left:5%;
		padding-right:5%;	
		margin-top:10%;
	}
	form{
		padding-top:5%;
	}
	.nav{
		margin-top:-2%;
	}
	input{
		font-size:1vw;
		font-family:Berlin Sans FB;
	}	
	body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 3; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  padding: 1%;
  border: 1px solid #888;
  width: 20%;
  z-index:3;
  margin-left:40%;
  position:fixed;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 2vw;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
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
.login{
	height:auto;
	width:5%;
	position:fixed;
	margin-left:50%;
	max-width:5%;
	margin-top:6.5%;
	z-index:3;
	cursor:pointer;
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
	padding-top:5%;
	padding-bottom:3%;
	padding-left:3%;
	padding-right:3%;
	font-family:Berlin Sans FB;
	font-size:1.3vw;
}
.sub{
	font-family:Berlin Sans FB;
	cursor:pointer;
	font-size:1.1vw;
}
.textbox{
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

.sign{
	margin-top:11%;
	position:fixed;
	margin-left:43%;
	font-size:1.2vw;
}
	</style>
</head>
<body><!--navigation-->
				
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li>MODERN ENIACs</li></h1>
								<img src="iro.png" class="logo">
								<div class="ico">
									<a href="buy.php"><img src="pics/buy.png" class="buy"></a>
									<img src="pics/sell.png" class="login" id="myBtn">
									
										<div class="sign"><p>not yet a member?<a href="register.php">register</a></p></div>
									
								</div>
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>	 
						<!--  ****-->	
	<?php include ('index_modal.php');?>	
	<?php include ('index_ext.php');?>	
</body>
</html>
