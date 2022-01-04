<html>
<body bgcolor="#99CCCC">
<?php

$host="localhost"; 
$username="root";  
$password=""; 
$db_name="bank";  
$tbl_name="register1"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO register1 (firstname,lastname,email,phone,username,password) 
values('".$firstname."','".$lastname."','".$email."',".$phone.",'".$username."',".$password.")";
$result=mysql_query($sql);

if($result){
echo "<font size=5> வெற்றிகரமாக பதிவுசெய்யவும்";
echo "<BR>";
echo "<a href='s1.php'>பின் செல்ல இங்கு கிளிக் செய்க</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
mysql_close();
?>
</body>
</html>