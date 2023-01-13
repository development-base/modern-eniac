<?php
	
	
	if(isset($_POST['update'])){
	if(!empty($_POST['password']) && !empty($_POST['lname']) && !empty($_POST['fname'])&& !empty($_POST['mi'])
		&& !empty($_POST['address']) && !empty($_POST['email'])&& !empty($_POST['contact_no']))
	 {
		 $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'user_registration') or die(mysqli_error($con));  
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$mi=$_POST['mi'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact'];
	

	
	$query="SELECT * FROM users WHERE (email='".$email."' or contact_no='".$contact_no."');";
	$res=mysqli_query($con,$query);
		
    if(mysqli_num_rows($res)>0)
    {
	$row = mysqli_fetch_assoc($res);
    if($email==$row['email'])
        {
			echo "Email is already taken";
        }
	elseif($contact_no==$row['contact_no'])
		{
			echo "Contact No. is already taken";
		}
	}else {
            $sql="UPDATE users SET password='".$password."',lname='".$lname."'
			,fname='".$fname."',mi='".$mi."',address='".$address."',email='".$email."',contact_no='".$contact_no."' WHERE ='".$username."'";
			$result=mysqli_query($con,$sql);
			if($result){
			echo "UPDATED SUCCESSFULlY!";
			} else {
			echo "ERROR";
			}

        }
	 
	 }
	 
	
	}
	
	
	
	
?>