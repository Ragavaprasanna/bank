<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Africa/Kampala");
		$amount=mysql_real_escape_string($_POST['amount']);
		$details=mysql_real_escape_string($_POST['details']);
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");
		mysql_connect("localhost", "root","") or die(mysql_error()); 
		mysql_select_db("bank") or die("Cannot connect to database"); 
		mysql_query("INSERT INTO Passbook1 (amount,date_transaction,details,user) VALUES ('$amount','$date','$details','$user')");
		Print '<script>alert("டெபாசிட்வெற்றிகரமாக .");window.location.assign("s11.php");</script>';
	
	}
	else
	{
		header("location:s131.php");
	}


 ?>