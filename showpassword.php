<?php
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));

	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=md5($_POST['pwd']);
		echo $password;
		
	}
?>