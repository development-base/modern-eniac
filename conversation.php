
<!doctype html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>conversation</title>
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
.reply{
	height:auto;
	font-size:1.1vw;
	margin-left:;
	position:fixed;
}
.rep{
	background-color:transparent;		
	width:30%;
	font-size:1.1vw;
	position:fixed;
	margin-top:1%;
}
.rep1{
	height:auto;
	width:10%;
	font-size:1.1vw;
	position:fixed;
	margin-left:10%;
	margin-top:5.5%;
			font-family: Berlin Sans FB;
			background-color: #ddd;
			border: none;
			color: black;
			padding-left:1%;
			padding-right:%;
			padding-bottom:1%;
			padding-top:1%;
			transition: 0.3s;
			border-radius:10%;
}	
.rep1:hover{
		  background-color: #3e8e41;
		  color: white;
}	
.tab{
	width:100%;
	float:right;
	font-size:1.1vw;
	background-color: #ddd;
	border-bottom: 1px solid #ddd;
	font-family: Berlin Sans FB;
	height:auto;

}
.con{
	margin-top:10%;
	overflow:scroll;
	height:300px;
	overflow-x:hidden;
	background-color:#ddd	;
	width:60%;
	float:right;
	margin-right:5%;
}
.chat{
	position:fixed;
	z-index:3;
	margin-top:10%;
}
</style>
</head>
<body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
							<a href="chatbox.php"><li class="view">BACK&nbsp;</a></li>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
							</nav>	
						<!--  **navigation--*-->
	
<form action="replybox.php" method="POST" class="chat">
	<tr><td><textarea name="msg" cols="40" rows="3" class="rep" required placeholder="write here..."></textarea></td></tr>
	<tr><td><input type="submit" name="reply" value="reply" class="rep1"></td></tr>
</form>	
<div class="con">			
	<?php
		session_start();
		if(!isset($_SESSION['username'])){  
			header("location:index.php");  
		}
		$con=new mysqli('localhost','user','1234','modern_eniac');
		if(!$con){
			die("Connection Failed:".$con->connect_error());
		}
		if(!empty($_GET['sender'])){
		$_SESSION['user_chat']=$_GET['sender'];
		}
		$sql = "SELECT * FROM messages WHERE sender='".$_SESSION['user_chat']."' AND receiver='".$_SESSION['username']."' 
		or sender='".$_SESSION['username']."' AND receiver='".$_SESSION['user_chat']."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_array()){
	?>
		<table class="tab"  style="border-collapse:collapse;">	
				<tr><td style="width:20%;"><?php echo $row['sender'];?></td>
					<td> <?php echo $row['msg'];?></td>
					<td style="width:17%;"><?php echo $row['date'];?></td>
				</tr>
				<?php
						}
					}
				?>

		</table>
</div>	
	

</body>
</html>