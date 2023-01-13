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
		<title>sell</title>
		<style>
			.ident{
				font-family:Berlin Sans FB;
				z-index:2;
				font-size:2vw;
				position:fixed;
				text-transform:uppercase;
				margin-top:6%;
				background-color:#ffffff;	
				width:100%;
				text-align:center;
			}
			.prof{
				border:1;
				border-collapse: collapse;
			}
			a:hover{
				text-decoration:underline;
			}
			.dropdown{
				margin-left:30%;
			}
			.cart{
				z-index:2;
				cursor:pointer;
				margin-left: 29%;			
				position:fixed;
				font-size: 1.6vw;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
			}
			.search{
				z-index:2;
				cursor:pointer;
				margin-left: 42.5%;			
				position:fixed;
				font-size: 1.6vw;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
			}
			.inbox{
				z-index:2;
				cursor:pointer;
				margin-left: 36.5%;			
				position:fixed;
				font-size: 1.6vw;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
			}
			.head{
					margin-left:60%;
					font-size:2.3vw;
				}
			.logo{
				margin-left: 80%;
				margin-top:-4%;
				height:auto;
			}
			.nav{
				position:fixed;
				display:inline;
			}
			.logi{
				position:fixed;
				margin-top:1.2%;
				margin-left:2%;
				cursor:pointer;
				height:auto;
				z-index:2;
				border:none;
				padding:1.2%;
				border-radius:15%;
				font-size: 1vw;
				font-family:Berlin Sans FB;
			}
			.logi:hover{
				background-color: red;
				color:yellow;
			}
			form {
				margin-top:
			}
			.sub{
				margin-left:4%;
			}			
			.dropbtn1{
				z-index:2;
				cursor:pointer;		
				position:fixed;
				font-size: 1.6vw;
				overflow: hidden;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
				margin-left:17%;
			}		
			.stock{
				z-index:2;
				cursor:pointer;
				margin-left: 21%;			
				position:fixed;
				font-size: 1.6vw;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
			}	
			.dropdown-content {
				display: none;
				overflow: auto;
				width:40%;
				height: auto;
				font-size:1.2vw;
			}
			.dropdown-content a {
				color: black;
				padding: 50% 30%;
				text-decoration: none;
				display: block;
				font-family:Berlin Sans FB;
			}
			.dropdown a:hover {
				background-color: #ddd;
			}
			.show {
				display: block;
			}

			.form{
				padding-top:5%;
			}
			.tab{
				font-family:Berlin Sans FB;
				font-size:1.2vw;
			}
		.view{
			 border: none;
			 font-size: 1.6vw;
			 cursor: pointer;
			 font-family:Berlin Sans FB;
			 z-index:2;
			margin-left:10%;
			background-color:none;
			position:fixed;
			margin-top:2.5%;
			}

			.dropbtn2{
				z-index:2;
				cursor:pointer;
				margin-right:15% ;			
				position:fixed;
				font-size: 1.6vw;
				overflow: hidden;
				cursor: pointer;
				font-family:Berlin Sans FB;		
			}
			.inp{
				font-size:1vw;
				font-family:Berlin Sans FB;		
			}
			.stok{
				padding-top:;
				float:left;
				font-family:Berlin Sans FB;
				font-size::1vw;
				width:20%;
				height:auto;
			}
			.ta{
				float:left;
			}
			.tabl{
				width:60%;
				height:auto;
				margin-left:17%;
			}	
.prod{
	overflow:scroll;
	overflow-x:hidden;
	height:500px;
	margin-left:7%;
}	
		li:hover{
			border-bottom: 2px solid;
			border-color:#6b00b3;
			color:#6b00b3;
		}		
		</style>
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid">
							<a href="profile.php"><li onclick="myFunction1() "class="view">PROFILE&nbsp/&nbsp </li></a>
							<a href="#"><li onclick="myFunction() "class="dropbtn1">SELL&nbsp/&nbsp </li>
							<a href="stock.php"> <li class="stock">MY STOCK&nbsp/&nbsp </li></a>
							<a href="cart.php"> <li class="cart">MY CART&nbsp&nbsp/ </li></a>
							<a href="chatbox.php"> <li class="inbox">INBOX&nbsp&nbsp/</li></a>
							<a href="search.php"> <li class="search">SEARCH&nbsp/&nbsp </li></a>
							<h1 class="head"> MODERN ENIACs</h1>
							<a href="logout.php"><input type="submit" value="Logout" name="but_logout" class="logi"></a>
							<img src="iro.png" class="logo">
						  </div>
						<div class="ident">			
							<?=$_SESSION['fname'];?> <?=$_SESSION['mi'];?>. <?=$_SESSION['lname'];?>
						</div>	
						  <div class="rect"></div>
						 </nav>	
						<!--  **navigation--*-->
		<div style="margin-top:10%;">				
			<?php include ('sellForm.php');?>	
			<div class="prod">
				<?php include('sell_product2.php');?>
			</div>	
		</div>	
    </body>
</html>