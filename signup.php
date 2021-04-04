<?php include('nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<div class="Panel panel-success">
	<div class="panel-heading">	
	<h1>Registeration Form</h1></div>
	<div class="panel-body">
	<form action="enter_data2.php" method="post">
		<table class="table">
			<tr>
				<td>Enter Name :</td>
				<td><input type="text" name="name" placeholder="Full Name"></td>
			</tr>
			<tr>
				<td>Enter Phone Number</td>
				<td><input type="Number" name="ph_no" placeholder="10 digit Number"></td>
			</tr>
			<tr>
				<td>Set Username :</td>
				<td width="200px"><input onkeyup="check()" id="u_name" type="text" name="u_name" placeholder="Enter Username" >
				<span id ="res" style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Set Password :</td>
				<td><input type="Password" name="pw" placeholder="Enter Password"></td>
			</tr>
			<tr>
				<td>Mail-Id</td>
				<td><input type="text" name="mail" placeholder="abc@xyz.com"></td>
			</tr>
			<tr>
				<td>Select State :</td>
				<td><select name="state">
					<option>Jharkhand</option>
					<option>West bengal</option>
					<option>Odisha</option>
					<option>Maharashtra</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Your Address : </td>
				<td><textarea rows="5" name="add"></textarea></td>
			</tr>	
		</div>		
			<tr>
				<td colspan="2" align="Center"><button class="btn btn-success" type="submit">Submit</button></td>
			</tr>
		</table>
	</form>
	<script type="text/javascript">
		function check()
		{
			p=document.getElementById('u_name').value;
			http=new XMLHttpRequest();
			http.open("GET","verify.php?msg="+p);
			http.send();
			http.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					document.getElementById('res').innerHTML=this.responseText;
				}

			}
		}
	</script>
</body>
</html>