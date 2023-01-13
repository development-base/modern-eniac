
<!doctype html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>chatbox/message</title>
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
.mess{
	display:inline-block;
	width:11%;
	margin-top:-1%;
}		
mes:hover{
	background-color:red;
}
.x{
	color: red;
	font-size:2vw;	
	background:transparent;
	float:right; 	
	border:none;
	cursor:pointer;
	padding-top:-1px;
}

img{
	width:80%;
	height:auto;
	margin-left:10%;
}
.name{
	font-size:1vw;
	text-align:center;
	font-family:Berlin Sans FB;
}
.empty{
	margin-top:50%;
	font-family:Berlin Sans FB;
	width:100%;
	margin-left:35%;
}
</style>
<script type="text/javascript">
	function confirm_delete(id){
		if(confirm("are you sure to remove this entry?"))
		{
			window.location.href='chatbox_delete.php?id='+id;
		}
	}
</script>
<head>
<body>
						<!--navigation-->
					<div class="nav">
						<nav ><br><br>
						  <div class="grid-container">
							<a href="sell.php"><li class="view">BACK&nbsp;</a></li>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
						<!--  **navigation--*-->		
						
<div>		
<center><P style="font-size:2vw;font-family:Berlin Sans FB;margin-top:8%;">MESSAGES</P></center>
<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
	}
	$con=new mysqli('localhost','user','1234','modern_eniac');
	if(!$con){
		die("Connection Failed:".$con->connect_error());
	}
	$sql= "SELECT DISTINCT sender,receiver FROM messages WHERE receiver='".$_SESSION['username']."'";
	$result=$con->query($sql);
	if($result->num_rows > 0){
		while($row=$result->fetch_array()){
		
?>						
	<table class="mess">
	<tr><td>
		<form action="chatbox_delete.php" method="$_POST" onsubmit="return confirm('confirm delete this convo/request?')">
			<input type="hidden" name="id" value="<?php echo $row['sender']?>">
			<input type="submit" value="&times;" class="x">
		</form></a></td>
	</tr>
	<tr><td><a href="conversation.php?sender=<?php echo $row['sender'];?>"><img src="mail.png" width="100px" height="50px"></a></td></tr>
	<tr><td class="name"><?php echo $row['sender']?></td></tr>
	</table>
<?php
		}
	}else{
		?>
		<div class="empty">INBOX EMPTY</div>
	<?php
	}
?>
</div>
</body>
</html>
