<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
		
	mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("bank") or die("Cannot connect to database"); 

	$balance=0.00;
	$query=mysql_query("SELECT * from Passbook1 WHERE user='$user'");
	while($row=mysql_fetch_array($query))
		{
			$balance= $balance + $row['amount'];
		}

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Africa/Kampala");
		$amount=mysql_real_escape_string($_POST['amount']);

		
		if($amount>$balance)
		{
			
			Print '<script>alert("You do not have sufficient Funds.");;
			window.location.assign("s11.php")</script>';
			exit("You have insufficient funds!");
			//header("location: s11.php");
			
		}
		$amount=(-$amount);
		$details=mysql_real_escape_string($_POST['details']);
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");

		mysql_query("INSERT INTO Passbook1 (amount,date_transaction,details,user) VALUES ('$amount','$date','$details','$user')");
		Print '<script>alert("பதிவுசெய்யவும்பணம் எடுத்தல்.");window.location.assign("s11.php");</script>';
		
	}
	else
	{
		header("location:s131.php");
	}


 ?>
