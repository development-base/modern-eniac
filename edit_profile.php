<!doctype html>
<html>
<head>
	<title>edit_profile</title>
</head>
<body>
<?php
	$userId="";
	$username="";
	$password="";
	$lname="";
	$fname="";
	$mi="";
	$address="";
	$email="";
	$contact_no="";
	$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
	
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
		}else
			$sql = "SELECT * FROM users where userId='". $_GET['id'] ."'";
			$result = $mysqli->query($sql);
			$row = $result->fetch_assoc();
			if ($result->num_rows > 0) {
					$userId=$row['userId'];
					$username=$row['username'];
					$password=$row['password'];
					$lname=$row['lname'];
					$fname=$row['fname'];
					$mi=$row['mi'];
					$address=$row['address'];
					$email=$row['email'];
					$contact_no=$row['contact_no'];
			} else {
				echo "0 results";
			}
	}			
	$mysqli->close();
?>
	<form method="post" action="profile_update.php">
		<table>
			<tr><td>Username:</td><td><input type="username" name="username" value=<?php echo $username ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="username" autocomplete="off" required></td>
			<td>Password:</td><td><input type="password" name="password" value=<?php echo $password ?> placeholder="password" maxlength="10" autocomplete="off" required></td>
			</tr><tr></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lname" value=<?php echo $lname ?> placeholder="last name" maxlength="15" autocomplete="off"  required></td>
			<td>First Name:</td><td><input type="text" name="fname" value=<?php echo $fname		?> placeholder="first name" maxlength="15" autocomplete="off" required></td>
			</tr><tr></tr>
			<td>Middle Initial:</td><td><input type="text" name="mi" value=<?php echo $mi ?> placeholder="middle initial" maxlength="1" autocomplete="off" required></td>
			<td>Address:</td><td><input type="text" name="address" value=<?php echo $address ?> placeholder="address" maxlength="40" autocomplete="off" required></td>
			<tr><tr></tr>
			<tr>
			<td>Email:</td><td><input type="email" name="email" value=<?php echo $address ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email" autocomplete="off" required></td>
			<td>Contact No:</td><td><input type="text" name="contact_no" value=<?php echo $contact_no ?> pattern="[0-9+]{13}" title="Invalid Contact No."value="+63" maxlength="13"autocomplete="off" ></td>
			<tr>
			<th colspan="4"><h4><input type="submit" value="update"></h4></th>
		</table></br></br>
	 </form>
</html>