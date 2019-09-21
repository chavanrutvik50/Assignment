<?php
	$url='localhost';
	$username='root';
	$password='';
	$db="login";
	$conn=mysql_connect($url,$username,$password);
	mysql_select_db($db);

	if(!$conn){
		die('Could not Connect My Sql:' .mysql_error());
	}
	extract($_POST);

	if(isset($submit))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		date_default_timezone_set('Asia/Kolkata');
		$date=date("d/m/y h:i:s a");
		$rs=mysql_query("select * from details where email='".$email."' and pass='".$pass."'limit 1");
		$getll = mysql_query("select lastlogin from details where email = '".$email."' ");
		list($lastlogin) = mysql_fetch_row($getll);
		$_SESSION['lastlogin'] = $lastlogin;
		$updatelog = mysql_query("update details set lastlogin='".$date."' WHERE email='".$email."' ");

		if(mysql_num_rows($rs)==1)
		{
			$_SESSION["login"]=$email;
		}
		else
		{
			$found="N";
		}
	}
	if (isset($_SESSION["login"]))
	{
		if(! $rs ) {
		die('Could not get data: ' . mysql_error());
	}

	while($row = mysql_fetch_assoc($rs))
	{
		echo "<center>
				<table border=1>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Id</th>
						<th>Contact</th>
						<th>Account created date</th>
						<th>Last login Date and Time</th>
					</tr>
					<tr>
						<td>{$row['fname']}</td>
						<td>{$row['lname']}</td>
						<td>{$row['email']}</td>
						<td>{$row['contact']}</td>
						<td>{$row['cdate']}</td>
						<td>{$row['lastlogin']}</td>
					</tr>
				</table>
			</center> ";    
	}

	exit;
	}
?>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<title>Login</title>
	</head>
	<body>
		<div class="container" style="width: 500px;">
			<br/>
			<center> <h1>Login</h1> </center>
			<div class="container-fluid">
			<form name="form1" method="post">
				<div class="form-group">
					<label for="email2">User Name</label>
					<input type="email" class="form-control" name="email" id="email2" placeholder="Enter Email Id">
				</div>
				<div class="form-group">
					<label for="pass2">Password</label>
					<input type="password" class="form-control" name="pass" id="pass2" placeholder="Password">
				</div>
				<input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login">
				<?php
					if(isset($found))
					{
						echo '<p>Invalid email id or password<br>Please try again</p>';
					}
				?>
			</form>
			</div>
		</div>
	</body>
</html>