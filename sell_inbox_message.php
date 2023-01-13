
<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="style.css">
		<title>MY CART</title>
		<style>
			.head{
					margin-left:40%;
				}
			.logo{
				margin-left: 60%;
					margin-top:-4%;
			}
			.nav{
				position:fixed;
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
					.inbox{
					 border: none;
					 font-size: 1.6vw;
					 cursor: pointer;
					 font-family:Berlin Sans FB;
					 z-index:2;
					margin-left:14.5%;
					background-color:none;
					position:fixed;
					margin-top:2.5%;
					}	
.msg{
	height:auto;
	font-size:1.1vw;
	border-top:1px solid;
	border-right:1px solid;
	border-left:1px solid;
	border-bottom:1px solid;
	margin-top:1%;
	cursor:pointer;
}				
	</style>
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
							<a href="sell_inbox.php"><li class="view">BACK&nbsp;</a></li>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div></br></br></br></br></br>
					</div></br></br></br></br></br>
						<!--  **navigation--*-->
		
<?php
	session_start();
	$con=new mysqli('localhost','root','','modern_eniac');
		
	if(!$con){
		die("Connection Failed:".$con->connect_error());
	}	
		
	$sql = "SELECT * FROM message inner join product on message.item_no=product.item_no and msgId='".$_GET['id']."'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()) {
						
?>	
	<?php echo $row['msg'];?>
	<?php echo $row['brand'];?>
	
<?php							
								}
						      }	
							
						$con->close();	
					?>
					
    </body>

</html>