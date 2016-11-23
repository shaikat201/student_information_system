<html>
	<head>
		<title>Admin_Login Form</title>
	</head>
	
	<style type='text/css'>
	body{
		background:url('images/reg.jpg');
		
		
	}
	.large { 
margin-top: 125px;
   
}
	</style>
	
<body>
<BR><BR>
<h1><center><font color=white><B><U>Welcome to "STUDENT INFORMATION SYSTEM" admin panel</U></B></font></center></h1>
<div class="large"> 
	<form  method='post' action = 'admin_login.php'>
	
	
	<table margin top="66" cellspacing="15" width='35%' border='5%' BORDERCOLOR=black align='center'>
	
		<tr>
		<td colspan='5' align='center'><h1><u><font color=white>Admin Login</font></u>
		</tr>
		<tr>
		<td align='center'><b><font color=white>Admin name:</font></b></td>
		<td align='center'><input type='text' name='admin_name'/></td>
		</tr>
		
		<tr>
		<td align='center'><b><font color=white>Admin password:</font></b></td>
		<td align='center'><input type='password' name='admin_pass'/></td>
		</tr>
		
		<tr>
		<td colspan='8' align='center'><input type='submit' name='admin_login' 
		value='Login for access'/></td>
		</tr>
		
	
	</table>
	</form>
	</div>
</body>
</html>
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("department");
	
if(isset($_POST['admin_login'])){
	$admin_name = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	$query = "select * from admin where admin_name='$admin_name' AND 
	admin_pass ='$admin_pass'";
	
	$run = mysql_query($query);
	
	if (mysql_num_rows($run)>0){
		
		echo"<script>window.open('classes.php','_self')</script>";
	}
	else{
		echo"<script>alert('Name or Password is wrong')</script>";
}
}

?>