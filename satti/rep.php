<html>
<style>
body{
	background-image:url("ff.png");
	background-size:cover;
	font-family:verdana;
	font-size:20px;
	margin:0;
	line-height:24px;	
}


div
{
	padding:10px 5px ;
}


.box
{
	position:absolute;
	top:30%;
	left:15%;
	transform:;
	background:white;
	
}

table{
	border-collapse:;
	border:shadow;
	width:60%;
	color:black;
	font-family:monospace;
	font-size:17px;
	text-align:center;
}
	th{
		background-color:lightblue;
		color:white;
	}
	tr:nth-child(even)
	{
	background-color:#f2f2f2}
	td
{
padding:10px;
}

div
{
	padding:10px 5px ;
}

</style>
<body>


<div class="box">
<table>
<tr>
	<th>Bank Name</th>
	<th>From Account</th>
	<th>Transfer AC</th>
	<th>Transfer Bank</th>
	
</tr>
</div>
<?php
	$conn=mysqli_connect("localhost","root","","bank");
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);
	}
	$sql="SELECT BankName,FromAccount,TransferBank,TransferAC from transfer";
	$result=$conn->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr>
			<td>".$row["BankName"]."</td>
			<td>".$row["FromAccount"]."</td>
			<td>".$row["TransferAC"]."</td>
			<td>".$row["TransferBank"]."</td>
			
			</tr>";
		}
	echo "</table>";
	}
	else {
		echo "0 result";
	}
	
	$conn->close();

?>
</table>

</body>
</html>
