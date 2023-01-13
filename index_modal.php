<?php
	session_start();
?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
			<form action="index.php" method="POST">
								<center><h3>Login</h3></center>
				<center><div id="div_login" class="tabl">
							<div>
								<input type="text" class="textbox" id="txt_uname" name="username"placeholder="username"required/>
							</div></br>
							<div>
								<input type="password" class="textbox" id="myinput" name="pwd" placeholder="password"required/>
									<script>
											function myFunction() {
											  var x = document.getElementById("myinput");
											  if (x.type === "password") {
												x.type = "text";
												 } else {
													x.type = "password";
												 }
											}
									</script>
							</div><br>
							<div>
								<input type="checkbox" onclick="myFunction()" class="textbox">Show Password</br>
								<input type="submit" value="log in" name="login" id="but_submit" class="sub"/>
							</div></br>
							<div><p class="p">not yet a member?<a href="register.php" class="reg">register</a></p></div>
						</div></center>
			</form>	
  </div>
</div>