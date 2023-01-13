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
		<title>search</title>
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
			.search{
				z-index:2;
				margin-left: 20%;			
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
			.sub{
				margin-left:4%;
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

			.searchengine{
				margin-top:5%;
				padding: 10px;
				font-size: 15px;
				color: white;
				background: yellow;
				border: none;
				border-radius: 10px;
				margin-right:85%;
				
			}
			@media screen and (max-width: 900px) {
			.searchengine {
				margin-top:5%;
				margin-right:55%;
			
			}
			@media screen and (max-width: 500px) {
			.searchengine {
				margin-top:-5%;
				margin-right:10%;
			
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
.prod{
	margin-top:10%;
}	
.searchbtn{
	
}	
		</style>
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid">
							<a href="sell.php"><li class="view">BACK&nbsp;</a></li>
								<form action="" method="GET" class="search">
								<input type="hidden" name="username" value="<?=$_SESSION['username'];?>">
								<input type="submit" name="search" value="SEARCH" style="font-size:1vw;cursor:pointer;">
								<input type="text" name="specs" placeholder="SEARCH KEYWORD" class="searchbtn" 
								style="background:transparent;border:none;border-bottom:2px solid;font-size:1.2vw;
					 font-family:Berlin Sans FB;">
								</form>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						<div class="ident">			
							<?=$_SESSION['fname'];?> <?=$_SESSION['mi'];?> <?=$_SESSION['lname'];?>
						</div>	
						  <div class="rect"></div>
						 </nav>
						<!--  **navigation--*-->
					</div>	<br><br><br><br><br><br><br><br>
	<div style="overflow:scroll;height:540px; overflow-x:hidden;">	
		<div style="">				
			<?php include ('searchengine.php');?>	
		</div>	
	</div>	
    </body>
</html>