<?php
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location:index.php");  
	}	
?>	
<?php
 $mysqli= new mysqli("127.0.0.1","root","","modern_eniac");
	$id = $_REQUEST['id'];
	$query = "DELETE FROM messages WHERE sender = '$id' and receiver = '".$_SESSION['username']."'";
	$result = $mysqli -> query($query);	
	if ($result ===TRUE){
		echo"<script type =\"text/javascript\">
		alert(\"convo successfully removed\");
		window.location = (\"chatbox.php\")
		</script>";
	}else{
		 echo "Error: " . $query . "<br>" . $mysqli->error;
	}
?>
<!doctype html>
<html>
<head>
</head>
<body>
	
</body>
</html>