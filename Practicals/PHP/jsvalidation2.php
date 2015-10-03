<html>
	<head>
		<title>Client Validations</title>
		<script type="text/javascript">
		var name = "";
		var gender = "";
		var city = "";
		var share = new Array();
		var username = "";
		var password = "";

		function validateForm()
		{
			var flag = true ;
			clearErrors();
			name = document.getElementById("txtName").value;
			gender = document.forms["frmRegistration"].rbGender.value;
			city = document.forms["frmRegistration"]["cmbCity"].value;
			username = document.forms["frmRegistration"]["txtUsername"].value;
			password = document.forms["frmRegistration"]["txtPassword"].value;
			if( cbFacebook.checked )
			{
				share[0] = document.forms["frmRegistration"]["cbFacebook"].value;
			}
			if( cbGoogle.checked )
			{
				share[1] = document.forms["frmRegistration"]["cbGoogle"].value;
			}
			if( cbTwitter.checked )
			{
				share[2] = document.forms["frmRegistration"]["cbTwitter"].value;
			}

			if( name == "" )
			{
				document.getElementById("msgName").innerHTML = "<p style=color:blue><i> Name is Required.</i></p>";
				flag = false ;
			}
			if ( gender == "" )
			{
				document.getElementById("msgGender").innerHTML = "<p style=color:blue><i>Gender is Required.</i></p>";
				flag = false;
			}
			if( city == "" )
			{
				document.getElementById("msgCity").innerHTML = "<p style=color:blue><i>City is Required.</i></p>";
				flag = false;	
			}
			
			if (share.length == 0 ) 
			{
				document.getElementById("msgShare").innerHTML = "<p style=color:blue><i>You must share your Registration.</i></p>";
				flag = false;	
			}

			if( username == "" )
			{
				document.getElementById("msgUsername").innerHTML = "<p style=color:blue><i>Username is Required.</i></p>";
				flag = false;		
			}

			if( username.length < 6 )
			{
				document.getElementById("msgUsername").innerHTML = "<p style=color:blue><i>Username is greater or equal to 6 Characters long.</i></p>";
				flag = false;		
			}
			if( password == "" )
			{
				document.getElementById("msgPassword").innerHTML = "<p style=color:blue><i>Password is Required.</i></p>";
				flag = false;	
			}
			if( password.length < 8 )
			{
				document.getElementById("msgPassword").innerHTML = "<p style=color:blue><i>Password is greater or equal to 8 Characters long.</i></p>";
				flag = false;		
			}
			return flag;
		}
		function clearErrors()
		{
			document.getElementById("msgName").innerHTML = "";
			document.getElementById("msgGender").innerHTML = "";
			document.getElementById("msgCity").innerHTML = "";
			document.getElementById("msgShare").innerHTML = "";
			document.getElementById("msgUsername").innerHTML = "";
			document.getElementById("msgPassword").innerHTML = "";
		}
		function validation()
		{
			if (validateForm()) {
				window.location = "sumofdigit.php";
			}
		}
		function test()
		{
			alert("hi");
		}
		</script>
<?php
	/*
	if( isset($_REQUEST['btnRegister']))
	{
		echo "Server Side validation<br>";
		if($_REQUEST['txtName']=="")
			$error="please enter name<br/>";
		if($_REQUEST['txtUsername']=="")
			$error.="please enter User Name<br/>";
			
		if($error!="")
			echo $error;
				
	}
	*/
?>
	</head>
	<body>
        <script type="text/javascript">
		   document.write("Welcome, you have Javascript on.")
		</script>
		
		<noscript>
			<?php include("phpvalidation.php"); ?>
			<form id="frmRegistration1" name="frmRegistration" method="POST" >
			
            <style type="text/css">
				#frmRegistration2 { display:none;disable }
			</style>
        </noscript>
        
         
         <form id="frmRegistration2" name="frmRegistration" method="POST" onsubmit="return validateForm()">
         
			<table>
				<tr>
					<td>Enter Name</td>
					<td><input type="text" id="txtName" name="txtName" value="<?php if( isset($name) ) echo $name; ?>"></td>
					<td id="msgName">
						<?php
							if( isset($msgForName) )
							{
								echo "$msgForName";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="rbGender" id="rbGender_1" value="Male" <?php if($gender == "Male") echo "checked" ; ?> >Male
						<input type="radio" name="rbGender" id="rbGender_2" value="Female" <?php if($gender == "Female") echo "checked" ; ?> >Female
					</td>
					<td id="msgGender">
						<?php
							if( isset($msgForGender) )
							{
								echo "$msgForGender";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>City</td>
					<td>
						<select id="cmbCity" name="cmbCity">
							<option value="">--Select--</option>
							<option value="Ahmedabad" <?php if($city == "Ahmedabad") echo "selected"; ?> >Ahmedabad</option>
							<option value="Surat" <?php if($city == "Surat") echo "selected"; ?> >Surat</option>
							<option value="Vadodara" <?php if($city == "Vadodara") echo "selected"; ?> >Vadodara</option>
							<option value="Rajkot" <?php if($city == "Rajkot") echo "selected"; ?> >Rajkot</option>
						</select>
					</td>
					<td id="msgCity">
						<?php
							if( isset($msgForCity) )
							{
								echo "$msgForCity";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Share with</td>
					<td>
						<input type="checkbox" name="cbFacebook" id="cbFacebook" value="Facebook" 
						<?php foreach ($share as $s) {
							if ($s == "Facebook") {
								echo "checked";
							}
						}?> > Facebook
						<input type="checkbox" name="cbGoogle" id="cbGoogle" value="Google"
						<?php foreach ($share as $s) {
							if ($s == "Google") {
								echo "checked";
							}
						}?> > Google+
						<input type="checkbox" name="cbTwitter" id="cbTwitter" value="Twitter"
						<?php foreach ($share as $s) {
							if ($s == "Twitter") {
								echo "checked";
							}
						}?> > Twitter
					</td>
					<td id="msgShare">
						<?php
							if( isset($msgForShare) )
							{
								echo "$msgForShare";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="txtUsername" id="txtUsername" value="<?php if( isset($username) ) echo $username; ?>">
					</td>
					<td id="msgUsername">
						<?php
							if( isset($msgForUsername) )
							{
								echo "$msgForUsername";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="txtPassword" id="txtPassword">
					</td>
					<td id="msgPassword">
						<?php
							if( isset($msgForPassword) )
							{
								echo "$msgForPassword";
							}
						?>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" id="btnRegister" name="btnRegister" value="Register">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>