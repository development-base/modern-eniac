<?php
 $mysqli= new mysqli("127.0.0.1","root","","modern_eniac");
	$id = $_REQUEST['id'];
	$query = "DELETE FROM cart_item WHERE item_no = '$id'";
	$result = $mysqli -> query($query);	
	if ($result ===TRUE){
		echo"<script type =\"text/javascript\">
		alert(\"product successfully removed\");
		window.location = (\"cart.php\")
		</script>";
	}
?>