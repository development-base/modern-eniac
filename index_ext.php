

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php

	$con=mysqli_connect('localhost','user','1234') or die(mysqli_error());
    mysqli_select_db($con,'modern_eniac') or die(mysqli_error($con));


	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
		$sql="SELECT * FROM users WHERE username='".$username."' and password='".$pwd."'";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){

				$_SESSION['username']= $row['username'];
				$_SESSION['pwd']=$row['password'];
				$_SESSION['lname']=$row['lname'];
				$_SESSION['fname']=$row['fname'];
				$_SESSION['mi']=$row['mi'];
				$_SESSION['address']=$row['address'];
				$_SESSION['email']=$row['email'];
				$_SESSION['contact']=$row['contact_no'];
				
			echo "<script type = \"text/javascript\">
				alert(\"welcome ".$_SESSION['fname']." ".$_SESSION['mi']." ".$_SESSION['lname']."\");
				window.location = (\"sell.php\")
			</script>";
			}
		}else{			
			echo "<script type = \"text/javascript\">
					alert(\"invalid username or password please try again\");
				</script>";
			}
		}


?>