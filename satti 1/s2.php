<?php 
	session_start();
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("bank") or die("Cannot connect ot database");
	$query=mysql_query("SELECT * FROM user1 WHERE username = '$username'");
	$exists=mysql_num_rows($query);
	$table_user="";
	$table_password="";
	if($exists>0)
	{
		while($row=mysql_fetch_array($query))
		{
			$table_user=$row['username'];
			$table_password=$row['password'];
		}
		if($username== $table_user)
		{
			if($password==$table_password)
			{
				$_SESSION['user']= $username;
				header("location:s4.php");
			}
			else
			{
				Print '<script>alert("தவறான கடவுச்சொல்!");</script>';
				Print '<script>window.location.assign("s1.php");</script>';
			}
		}
	}
	else
	{
		Print '<script>alert("தவறான பயனர்பெயர்!");</script>';
		Print '<script>window.location.assign("s1.php");</script>';
	}

 ?>