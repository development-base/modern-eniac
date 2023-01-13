
<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: homepage.html');
}
?>
<!doctype html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="style.css">
		<title>sell</title>
		<style>
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
				margin-top:-1%;
			}
			.logi{
				position:fixed;
				margin-top:1.2%;
				margin-left:2%;
				cursor:pointer;
				height:auto;
				z-index:2;
				border:none;
				padding:1.2%;
				border-radius:15%;
				font-size: 1vw;
				font-family:Berlin Sans FB;
			}
			.logi:hover{
				background-color: red;
				color:yellow;
			}
			form {
				margin-top:
			}
			.sub{
				margin-left:4%;
			}			
			.view{
				z-index:2;
				cursor:pointer;
				margin-right:5% ;			
				position:fixed;
				font-size: 1.6vw;
				overflow: hidden;
				cursor: pointer;
				font-family:Berlin Sans FB;		
				margin-top:2.5%;
			}
			.dropdown {
				position: relative;
				margin-left:15%;
				width:50%;
			}

			.dropdown-content {
				display: none;
				background-color: #f1f1f1;
				overflow: auto;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				width:45%;
				height: auto;
				border-color:#4ee07f;
				background-color:#b1c0d1;
				border-style:solid;
				padding-top:3%;
				padding-bottom:3%;
				box-shadow: 20px 20px #5c818c;
			}

			.dropdown-content a {
				color: black;
				padding: 50% 30%;
				text-decoration: none;
				display: block;
				font-size:2vw;
				font-family:Berlin Sans FB;
			}
			.dropdown a:hover {
				background-color: #ddd;
			}

			.show {
				display: block;
			}

			.form{
				padding-top:5%;
			}
			.tab{
				font-family:Berlin Sans FB;
			}
		.view{
			 border: none;
			 font-size: 1.6vw;
			 width: 8%;
			 height:auto;
			 cursor: pointer;
			 font-family:Berlin Sans FB;
			 z-index:2;
			margin-left:10%;
			background-color:none;
			position:fixed;
			margin-top:2.5%;
			}

		</style>
	<!--<script>
	     alert("Welcome!")
	</script>-->
	</head>
    <body>
						<!--navigation-->
					<div class="nav">
						<nav ></br></br>
						  <div class="grid-container">
						  <li class="view" onclick="myFunction()">PROFILE</li>
						  <li onclick="myFunction()" class="dropbtn">SELLZ</li>
							<h1 class="head"> <li>MODERN ENIACs</li></h1>
							<a href="homepage.html"><input type="submit" value="Logout" name="but_logout" class="logi"></a>
							<img src="iro.png" class="logo">
						  </div>
						  <div class="rect"></div>
						 </nav>	
					</div>
						<!--  ****-->
						<br><br><br><br>
								

			
			<div class="dropdown"> 		
				<div id="myDropdown" class="dropdown-content">				
				<?php
						$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
						// Check servernameconnection
						if (mysqli_connect_errno()) {
								printf("Connect failed: %s\n", mysqli_connect_error());
						}else{
								$sql = "SELECT * FROM users";
								$result = $mysqli->query($sql);
								if ($result->num_rows > 0) {
								// output data of each row
								echo "<table border=1>";
									echo "<tr><th>username</th><th>Last Name</th>
										<th>First Name</th><th>M.i</th><th>address</th><th>email</th>
										<th>contact no.</th></tr>";
									while($row = $result->fetch_array()) {
										echo "<tr><td>". $row[0]."</td><td>". $row[1]
										."</td><td>".
										$row[3] ."</td><td>". $row[4]."</td><td>". $row[5]."</td><td>". $row[6]."</td><td>". $row[7]."</td></tr>";
									}
								echo "</table>";
									} else {
										echo "0 results";
									}
									
						}
						$mysqli->close();
					?>
									<script>
										function myFunction() {
										  document.getElementById("myDropdown").classList.toggle("show");
										}
									</script>
					</div>
				</div>	
			</div>
    </body>
</html>