<html>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=.5, maximum-scale=.5, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
    <title>	BUY</title>
    <style>
        
			.cho{
				margin-top:%;
				z-index:2;
				font-family: maiandra GD;
				font-size:1.2vw;
				margin-left:50%;
				position:fixed;
			}
			.ins{
				font-family: maiandra GD;
				list-style: inline;
			}
			a{
				text-decoration: none;
				paddding: 20px 10px;
			}
			a:hover{
				color:red;
			}
			.feat{
				font-size:1.2vw;
			}
			.sell{
				height:auto;
				width:5%;
				margin-left:17%;
				max-width:5%;
				margin-top:1%;
				z-index:3;
				position:fixed;
			}
			.buy{
				height:auto;
				width:6%;
				position:fixed;
				margin-left:65%;
				max-width:5%;
				margin-top:7%;
				z-index:3;
			}
			
			.ico{
				display:inline;
			}
			.back{
				font-family: maiandra GD;
				font-size:1.65vw;
				margin-top:-4.2%;
				z-index:2;
			}
			.head2{
            font-family: maiandra GD;
			position:fixed;
			margin-left: 10%;
			margin-top:%;
			z-index:2; 
			font-size: 2vw;
            }
				.dropbtn1{
				height:auto;
				width:5%;
				position:fixed;
				margin-left:17%;
				max-width:5%;
				margin-top:1%;
				z-index:3;
				cursor:pointer;
			}
.dropdown {
  position: relative;
  display: inline-block;
  margin-left:10%;
  margin-top:5%;
  

}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f1f1f1;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  width:13%;
  height: auto;
  			border-color:#4ee07f;
			background-color:#b1c0d1;
			border-style:solid;
			padding-left:;
			padding-right:;
			box-shadow: 20px 20px #5c818c;
			font-family:maiandra GD
}

.dropdown-content a {
  color: black;
  padding: 5% 5% 6% 30%;
  text-decoration: none;
  display: block;
  font-size:2vw;
  font-family:maiandra GD;
  
}
.dropdown a:hover {
background-color: #ddd;
}

.show {display: block;}
			
</style>
    </style>
  </head>
  <body>
		<nav >
		  <div class="grid-container">
				<h1 class="head"> <li>MODERN ENIACs</li></h1>
				<li><a href="index.html"><h4 class="head2">home</h4></a></li>
				<ul class="cho"></br></br>
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
						<a href="register.php">sign in</a>
						<a href="login.php">login</a>
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
		<div>	
				<div class="feat">
							<br/><br/><br/><br/><br/><br/><br/>
					<h1 class="ins">SPECIAL FEATURES</h1>
					<div>
						<a href="lenovo.html"><img src="pics/lenovo.jpg" alt="image" class="img"></a>
							<div></div>
					</div>
					<div>
						<a href="gigabyte.html"><img src="pics/Gigabyte.png"  alt="image" class="img"></a>
					</div>	
					<a href=""><img src="pics/MSI.png" alt="image" class="img"></a>
					<a href=""><img src="pics/len.jpg" alt="image" class="img"></a>
					<a href=""><img src="pics/g32.jpg" alt="image" class="img"></a>
			  </div>
			  <div class="feat">
				<h1 class="ins">OTHER PRODUCTS</h1>
			  </div>
		 </div>
  </body>	
</html>
	