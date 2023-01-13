<div class="dropdown">
				<div id="myDropdown" class="dropdown-content">	
					<?php
	session_start();
	if(!isset($_SESSION['username'])){
    header('Location: login.php');

?>
<?php
	}
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
  mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));


	?>
<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PROFILE</title>
		
	</head>
    <body>
			<h1><a href="profile.php">back</a></h1>
			<h1><?=$_SESSION['username'];?></h1>
			<br>
			<input type="hidden" name="uname" maxlength="12" value="<?=$_SESSION['username'];?>">
			Username: <?=$_SESSION['username'];?><br>

			<!-password->
			<form action="accsettings.php" method="POST">
				Password:<input type="password" name="pwd" pattern=".{6,}"  title="at least 6 character long" value="<?=$_SESSION['pwd'];?>" required>
				<input type="submit" value="update" name="upwd">
		<?php
			if(isset($_POST['upwd'])){
				$username = $_SESSION['username'];
				$pwd=$_POST['pwd'];
				$sql="UPDATE users SET password='".$pwd."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Password updated successfully')</script>";
						$_SESSION['pwd']=$pwd;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
					echo"<script type='text/javascript'>alert('Error updating password')</script>";
					}
			}
 		?>	</form><br><br>
			
			<!-last name->
			<form action="accsettings.php" method="POST">
			Last Name:<input type="text" name="lname" maxlength="15" value="<?=$_SESSION['lname'];?>">
			<input type="submit" value="update" name="ulname">
		
		<?php
			if(isset($_POST['ulname'])){
				$username = $_SESSION['username'];
				$lname=$_POST['lname'];
				$sql="UPDATE users SET lname='".$lname."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Last name updated successfully')</script>";
						$_SESSION['lname']=$lname;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
					echo"<script type='text/javascript'>alert('Error updating lastname')</script>";
					}
			}
 		?> </form><br><br>
			
<!--first name-->			
			<form action="accsettings.php" method="POST">
			First Name:<input type="text" name="fname" maxlength="15" value="<?=$_SESSION['fname'];?>">
			<input type="submit" value="update" name="ufname">
		
		<?php
			if(isset($_POST['ufname'])){
				$username = $_SESSION['username'];
				$fname=$_POST['fname'];
				$sql="UPDATE users SET fname='".$fname."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('First name updated successfully')</script>";
						$_SESSION['fname']=$fname;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
					echo"<script type='text/javascript'>alert('Error updating first name')</script>";
					}
			}
 		?> </form><br><br>
			
<!-middle initial->			
			<form action="accsettings.php" method="POST">
			Middle Initial:<input type="text" name="mi" maxlength="1" value="<?=$_SESSION['mi'];?>">
			<input type="submit" value="update" name="umi">
		
		<?php
			if(isset($_POST['umi'])){
				$username = $_SESSION['username'];
				$mi=$_POST['mi'];
				$sql="UPDATE users SET mi='".$mi."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Middle initial updated successfully')</script>";
						$_SESSION['mi']=$mi;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
						echo"<script type='text/javascript'>alert('Error updating middle initial')</script>";
					}
			}
 		?> </form><br><br>
		
<!-address->			
			<form action="accsettings.php" method="POST">
			Address:<input type="text" name="address" maxlength="40" value="<?=$_SESSION['address'];?>">
			<input type="submit" value="update" name="uaddress">
		
		<?php
			if(isset($_POST['uaddress'])){
				$username = $_SESSION['username'];
				$address=$_POST['address'];
				$sql="UPDATE users SET address='".$address."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Address updated successfully')</script>";
						$_SESSION['address']=$address;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
						echo"<script type='text/javascript'>alert('Error updating address')</script>";
					}
			}
 		?> </form><br><br>
		
<!-email->			
			<form action="accsettings.php" method="POST">
			Email:<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?=$_SESSION['email'];?>">
			<input type="submit" value="update" name="uemail">
			
		<?php
			if(isset($_POST['uemail'])){
				$username = $_SESSION['username'];
				$email=$_POST['email'];
				$sql="SELECT * FROM users WHERE email='".$email."'";
				$result=$con->query($sql);
				
				if($result->num_rows>0){ 
				$row = $result->fetch_assoc();
				if($email==$row['email'])
				{
				echo "<script text='text/javascript'>alert('Email is already exists')</script>";
				}else{
				$sql="UPDATE users SET email='".$email."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Email successfully')</script>";
						$_SESSION['email']=$email;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
						echo"<script type='text/javascript'>alert('Error updating email')</script>";
					}
				}
			}
		}
 		?> </form><br><br>
		
<!-contact->			
			<form action="accsettings.php" method="POST">
			Contact No.:<input type="text" name="contact" pattern="[0-9+]{13}" value="<?=$_SESSION['contact'];?>">	
			<input type="submit" value="update" name="ucontact">
			
		<?php
			if(isset($_POST['ucontact'])){
				$username = $_SESSION['username'];
				$contact=$_POST['contact'];
				$sql="SELECT * FROM users WHERE contact_no='".$contact."'";
				$result=$con->query($sql);
				
				if($result->num_rows>0){ 
				$row = $result->fetch_assoc();
				if($contact==$row['contact_no'])
				{
				echo "<script text='text/javascript'>alert('Contact no. is already exists')</script>";
				}else{
				
				
				$sql="UPDATE users SET contact='".$contact."' WHERE username='".$username."'";
					if($con->query($sql)){
						echo"<script type='text/javascript'>alert('Email successfully')</script>";
						$_SESSION['contact']=$contact;
						echo "<meta http-equiv='refresh' content='0'>";
					}else{
						echo"<script type='text/javascript'>alert('Error updating email')</script>";
					}
				}
			}
		}
 		?> </form><br><br>
	
			  </div>
			  			<script>
							function myFunction() {
							  document.getElementById("myDropdown").classList.toggle("show");
							}
						</script>
			</div>
</body>			
</html>