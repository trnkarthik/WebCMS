
<script>
	


	    function validate_form()
	    {
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var rtpassword = document.getElementById("rtpassword").value;
			var email = document.getElementById("email").value;
			var rtemail = document.getElementById("rtemail").value;

			if(anything_not_blank(username,password,email)
			   &&passwords_match(password,rtpassword)
			   &&emails_match(email,rtemail))
			{
			return true;
			}
			else{
    			alert("Wrong input \nPlease recheck your input and try again.");
			return false;
			}
	    }
	    function anything_not_blank(username,password,email)
	    {
			if(username==""||password==""||email=="")
			{
			return false;
			}
			else
			{
			return true;
			}
	    }
	    function passwords_match(password,rtpassword)
	    {
			if(password==rtpassword)
			return true;
			return false;
	    }
	    function emails_match(email,rtemail)
	    {
			if(email==rtemail)
			return true;
			return false;
	    }
	    
</script> 
<div id=register_box>
	    <center>
	    <h2 style="font-weight:normal">Register Here!</h2>
	    <hr style="width: 90%">
	    </center>
	    
	    <!-- Register table comes here-->
	    
	    
	    <form action="register_new_account.php" method="post" onsubmit="return validate_form()" >

	    <table style="width: 100%;padding: 10%;padding-bottom: 6%;padding-top:8%">
			<tr  valign="baseline">
	        	<td style="width: 50%"><h3 style="font-weight:normal">Username</h3></td>
			<td style="width: 50%"><input type="text" name="username" id="username"></td>
			</tr>
			
			<tr  valign="baseline">
	        	<td style="width: 50%"><h3 style="font-weight:normal">Password</h3></td>
			<td style="width: 50%"><input type="password" name="password" id="password"></td>
			</tr>
			
			<tr  valign="baseline">
	        	<td style="width: 50%"><h3 style="font-weight:normal">Re-type Password</h3></td>
			<td style="width: 50%"><input type="password" name="rtpassword" id="rtpassword"></td>
			</tr>
			
			<tr  valign="baseline">
	        	<td style="width: 50%"><h3 style="font-weight:normal">Email</h3></td>
			<td style="width: 50%"><input type="text" name="email" id="email"></td>
			</tr>
			
			<tr  valign="baseline">
	        	<td style="width: 50%"><h3 style="font-weight:normal">Re-type Email</h3></td>
			<td style="width: 50%"><input type="text" name="rtemail" id="rtemail"></td>
			</tr>			
			
			</table>
	    
			<center>
			<hr style="width: 90%" >
			</center>
	    
			<table style="width: 100%;padding: 10%;padding-bottom:2%;padding-top:3%">
			
			<tr  valign="baseline" align="center">
	        	<td style="width: 50%"><input type="submit"
						      value="Register" id="submit"
						style="width: 50%"></td>
			<td style="width: 50%"><input type="reset" value="Clear Form" id="submit"
						style="width: 50%"></td>
			</tr>	
			
			</table>
			
			</form>
	    
</div>

         






