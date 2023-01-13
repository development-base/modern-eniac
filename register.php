<!doctype html>
<head>
  <title>Register</title>
  <meta name="keyword" content="buy,sell,buy and sell">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
  <style>
	body{
		font-family:Berlin Sans FB;
		font-size:1.2vw;
	}
	table{
		border-style:solid;
		padding-left:5%;
		padding-right:5%;	
		margin-top:10%;
	}
	form{
		padding-top:5%;
	}
	.nav{
		margin-top:-2%;
	}
	input{
		font-size:1vw;
		font-family:Berlin Sans FB;
		border:none;
		border-bottom:1px solid;	
	}
.sub {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.sub:hover {
  background-color: #555555;
  color: white;
}		
  </style>
</head>
<body>
					<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
								<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<li><a href="index.php">
							<h4 class="head2">home</h4></a></li>
							<img src="iro.png" class="logo">
								
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>
						<!--  ****-->
<div class="table">
<form action="" method="POST">
	<center>
	
	<table class="sign">
		<th colspan="4"><h1>Sign Up</h1></th>
		<tr><td>Username:</td><td><input type="username" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" required></td>
		<td>Password:</td><td><input type="password" name="password" maxlength="10" autocomplete="off" required></td>
		</tr><tr></tr>
		<tr><td>Last Name:</td><td><input type="text" name="lname" maxlength="15" autocomplete="off"  required></td>
		<td>First Name:</td><td><input type="text" name="fname"  maxlength="15" autocomplete="off" required></td>
		</tr><tr></tr>
		<td>Middle Initial:</td><td><input type="text" name="mi" maxlength="1" autocomplete="off" required></td>
		<td>Address:</td><td><input type="text" name="address" maxlength="40" autocomplete="off" required></td>
		<tr><tr></tr>
		<tr>
		<td>Email:</td><td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" required></td>
		<td>Contact No:</td><td><input type="text" name="contact_no" pattern="[0-9+]{13}" title="Invalid Contact No."value="+63" maxlength="13"autocomplete="off" ></td>
		<tr>
		<th colspan="4"><h4><input type="submit" value="Register" name="submit" class="sub"></h4></th>
 </table></br></br>
 <?php
	
	if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['password']) 
		&& !empty($_POST['lname']) && !empty($_POST['fname'])&& !empty($_POST['mi'])
		&& !empty($_POST['address']) && !empty($_POST['email'])&& !empty($_POST['contact_no']))
	 {

	$username=$_POST['username'];
	$password=$_POST['password'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$mi=$_POST['mi'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));
	
	$query="SELECT * FROM users WHERE (username='".$username."' or email='".$email."' or contact_no='".$contact_no."');";
	$res=mysqli_query($con,$query);

    if(mysqli_num_rows($res)>0)  
    { 
	$row = mysqli_fetch_assoc($res);
	if($username==$row['username'])
		{
			echo "Username is already exists";
		}
    elseif($email==$row['email'])
        {
			echo "Email is already exists";
        }
	elseif($contact_no==$row['contact_no'])
		{
			echo "Contact No. is already exists";
		}
	}else { 
            $sql="INSERT INTO users(username,password,lname,fname,mi,address,email,contact_no) VALUES('".$username."','".$password."','".$lname."'
			,'".$fname."','".$mi."','".$address."','".$email."','".$contact_no."')";
			$result=mysqli_query($con,$sql);  
			if($result === TRUE ){  
			echo "<script type=\"text/javascript\">
			alert(\"Registration Successful. You can now login\");  
			window.location=(\"index.php\")
			</script>";
			} else {  
			echo "ERROR";  
			}
		
        }
	}
	}
?>
  </center>
</form>
</body>
</html>
 
