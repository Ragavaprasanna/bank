<?php
$host="localhost"; 
$username="root";  
$password=""; 
$db_name="bank";  
$tbl_name="transfer";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$t=$_POST['PayeeName'];
$t1=$_POST['password'];
$t2=$_POST['Address'];
$t3=$_POST['BankName'];
$t4=$_POST['FromAccount'];
$t5=$_POST['TransferAC'];
$t6=$_POST['TransferBank'];
$t7=$_POST['PhoneNo'];


$sql="INSERT INTO transfer (PayeeName,password,Address,BankName,FromAccount,TransferBank,TransferAC,PhoneNo) 
values ('".$t."',".$t1.",'".$t2."','".$t3."','".$t4."','".$t5."','".$t6."',".$t7.")";
$result=mysql_query($sql);

if($result){
echo "<font size=5> Transfer Successful";
echo "<BR>";
echo "<a href='subtran1.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
mysql_close();
?>