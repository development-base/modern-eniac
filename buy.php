<html>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=.5, maximum-scale=.5, user-scalable=no"/>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="buy.css">
    <title>	BUY</title>
    <style>
		.test{
			font-size:1.1vw;
			margin-top:2%;
		}	
.prod{
	margin-top:8%;
}		
	</style>
    </style>
  </head>
  <body>
		<nav >
		  <div class="grid-container">
				<h1 class="head"> <li>MODERN ENIACs</li></h1>
				<li><a href="index.php"><h4 class="head2">home</h4></a></li>
				<ul class="cho" id="menu"></br></br>
					<li><a href="">CUSTOMER CARE </a>|</li>
					<li><a href="">ABOUT US</a>|</li>
					<li><a href="">PRIVACY AND POLICY</a></li>
				</ul>
			<img src="iro.png" class="logo">
				<div class="ico">
					<img src="pics/sell.png" onclick="myFunction()" class="dropbtn1">
				</div>
		  </div>
		  <div class="rect"></div>
			<ul>
			</ul>
		 </nav>
	  <div class="grid-container"></br>
						<!--dropdown-->
				<div class="dropdown">
						<div id="myDropdown" class="dropdown-content">	
						<a href="buy_register.php">Register</a>
						<a href="buy_login.php">login</a>
					  </div>
					  <!--dropdown-->
				</div>
				<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<div class="prod">				
				<?php
					$mysqli = new mysqli("localhost", "pj", "", "modern_eniac");
					if (mysqli_connect_errno()) {
							printf("Connect failed: %s\n", mysqli_connect_error());
					}else{
							$sql = "SELECT * FROM product inner join users on users.username=product.username 
									where item_no is not null";
							$result = $mysqli->query($sql);
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
				?>		
				<a href="buy_product_specs.php?id=<?php echo $row['item_no'];?>"><table class="test">   
					<tr><td colspan="2" class="pics"><img src="images/<?php echo $row['image'];?>" width="300px" height="200"></td></tr>
					<tr><td>Brand: <?php echo $row['brand'];?> <?php echo $row['processor'];?></td></tr>
					<tr><td>graphics: <?php echo $row['graphics'];?></td></tr>
					<tr><td>Price: Php <?php echo $row['price'];?></td></tr></a>	
					<tr><td><a href="javascript:confirm_reg(<?php echo $row['item_no']; ?>)"><submit type="submit" name="submit" value="Buy product" class="mov" id="myBtn">buy product</submit></a></td></tr>
					</table>
				<?php
							}	
						}	
					}$mysqli->close();	
				?>
</div>	
<script type="text/javascript">
	function confirm_reg(id){
		if(confirm("seems you're not a member yet. Do you want to register to procceed?"))
		{
			window.location.href='buy_register.php?id='+id;
		}
	}
</script>
  </body>	
</html>
	