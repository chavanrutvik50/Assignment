<html>
	<head>
	<title>User Signup</title>
	</head>
	<body>
	<?php
		extract($_POST);
		$url='localhost';
		$username='root';
		$password='';
		$db="login";
		$conn=mysql_connect($url,$username,$password);
		mysql_select_db($db);
		if(!$conn){
			die('Could not Connect My Sql:' .mysql_error());
		}
		$rs=mysql_query("select * from details where email='".$email."'limit 1");
		if (mysql_num_rows($rs)==1)
		{
			echo "<br><br><br><div><h1>Email Id Already Exists</h1></div>";
			exit;
		}
		$cdate=date("d/m/y");
		$query="insert into details(fname,lname,email,contact,pass,cdate) values('$fname','$lname','$email','$contact','$pass','$cdate')";
		$rs=mysql_query($query)or die("Could Not Perform the Query");
		echo "<br><br><br><div class=head1><h1>Your Login ID Created Sucessfully</h1></div>";
	?>
	</body>
</html>