<?php
session_start();
if (isset($_POST["submit"])) {
    $category= $_POST['selection'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	
	  
	switch($category)
     {
      case "user": 	 
           $conn = new mysqli("localhost","root","","reservation");
           
		   if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          }  	   
           $sql = "Select * from user where email = '$email' and password= '$password'";		  
		   $user = $conn->query($sql);
		  
      if ($user->num_rows > 0) {
   
	   while($result = $user->fetch_assoc()) {    
	      
			      
		  $id = $result["RegId"];
          $firstname = $result["firstname"];
		  $lastname = $result["lastname"];
		  $middlename = $result["middlename"];
          $email = $result["email"];
		  
          $_SESSION["firstname"] = $firstname;
		  $_SESSION["lastname"] = $lastname;
		  $_SESSION["middlename"] = $middlename;
		  $_SESSION["RegId"] = $id;
	     
			 header('location: user.php'); 
			 exit;

		 $conn->close();
		 }	
		
	
			
	} else {
      echo "<script type = \"text/javascript\">
											alert(\"Invalid Email or Password !\");
										
											</script>";
    }
	break;	
   case "admin":
     $conn = new mysqli("localhost","root","","reservation");
           
		   if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          }   
     
	 $sql = "Select * from admin where  username = '$email' and password= '$password'";		  
	 $user = $conn->query($sql);
		  
      if($user->num_rows > 0) {
	   
	   while($result = $user->fetch_assoc()) {  		 
		
		
	    $id = $result["Admin_No"];          	
		$email = $result["username"]; 
		$_SESSION["Admin_No"] = $id; 
		$_SESSION["username"] = $email;  
		
		 header('location: admin.php'); 
		exit;
		
		$conn->close();
		 }	  
		
				
	} else {
      echo "<script type = \"text/javascript\">
											alert(\"Invalid Email or Password !\");
											
											</script>";
    }break;
	
	default:
	  break;
   $conn->close();
}	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type ="text/css "href="style.css">
	 
	 <script>  
		function loginvalidation(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
		var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        var valid = true;

        if(email == ""){
        	   valid = false;
              document.getElementById('email_error').innerHTML = "required.";
		}else {
            if(!emailRegex.test(email)){
                valid = false;
                document.getElementById('email_error').innerHTML = "invalid.";
            }
          }
		  
        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }else{
		  document.getElementById('password_error').innerHTML = "";
		}
        return valid;
    }
    </script>
	 
</head>
   
<body>

<div class="row2">
<div class="header ">
  <div>
     <h2>Car Rental</h2>
  </div>
    
 </div>


 
	    <ul>            
                <li><a href="index.php">Home</a></li>
                 <li><a href="#news">About Us</a></li>
				 <li><a href="#news">Contact Us</a></li>
          </ul>   
</div>

			
             
                     <fieldset>
					      <legend>Log In</legend> 
                     </div>
                    </div>
                   </div>
		       </fieldset>	
             </form>

		
	   
</div>
</div>

<div class="footer">
 <h6 class>Copyright &copy; 2019 Glen Mondia </h6>
</div>

</body>
</html>