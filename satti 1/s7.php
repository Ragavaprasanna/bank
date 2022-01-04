<?php
$host="localhost"; 
$username="root";  
$password=""; 
$db_name="bank";  
$tbl_name="transfer1";

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


$sql="INSERT INTO transfer1 (PayeeName,password,Address,BankName,FromAccount,TransferBank,TransferAC,PhoneNo) 
values ('".$t."',".$t1.",'".$t2."','".$t3."','".$t4."','".$t5."','".$t6."',".$t7.")";
$result=mysql_query($sql);

if($result){
echo "<font size=5>மாற்றம் வெற்றிகரமாக ";
echo "<BR>";
echo "<a href='s13.php'>பின் செல்ல இங்கு கிளிக் செய்க</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
mysql_close();
?>