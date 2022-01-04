<html> 
<head>
<title>Change password</title>
<style>
body{
margin:0;
background:url('water.jpg');
background-size:cover;
}
.nav{
width:100%;
background:#000033;
height:100px;
margin-top:50px;
opacity:0.6 ;
}
ul {
	list-style:none;
	padding:0;
	margin:0;
	position:absolute;
}
li {
	float:left;
	margin-top:30px;
}
a{
width:150px;
color:white;
display:block;
text-decoration:none;
font-size:20px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:century gothic;
font-weight:bold;
}
a:hover{
background:lightblue;
color:black;
transition:0.6s;
}
</style>
</head>
<body>
<div class="nav">
<ul>
<li><a href="password.php">Back</a></li>
<li><a href="hfile4.php">Home</a></li>
</ul>

</div>
<br><br><br><br>
</body>
</html>


<?php
$con=mysql_connect("localhost","root","");
mysql_select_db('bank',$con);
$x=$_POST["old"];
$y=$_POST["new1"];
$z=$_POST["username"];

$s="select * from account where password='".$x."' and username='".$z."'";
//echo $s;
$s1=mysql_query($s);
$s2=mysql_fetch_array($s1);
$k=$s2['password'];
$h=$s2['username'];
echo $k;
if (($x==$k)&& ($z==$h))
{	
$res="UPDATE account set password='".$y."' where username='".$z."'";
mysql_query($res);
if(mysql_query($res))
//header("refresh:1; url=eventupdate.php");
echo "<br>";
echo "<h1>Password updated successfully";
}
else
{	
echo " <h1>Password  failed to be updated";
}
	mysql_close($con);



?>