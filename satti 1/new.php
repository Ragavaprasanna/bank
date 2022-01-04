<?php
$t=$_POST['username'];
$t1=$_POST['password'];
$f=1;

$con = mysql_connect("localhost",'root',"");
if(!$con)
{
echo "no connection";
}
mysql_Select_db('bank',$con);
$m="select * from account where username='".$t."' and password=".$t1."";
$r=mysql_query($m);
while($r1=mysql_fetch_array($r))
{
$f=0;
header('Location: hfile4.php');
exit();
}
if($f!=0)
{
	echo "Invalid user";
}
mysql_close($con);
?>