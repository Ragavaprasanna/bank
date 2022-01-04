<body bgcolor=silver>
<?php
	$user=$_POST['username'];
	$gen=$_POST['gender'];
	
	$output="";
	
	if( isset($_POST['known1']) )
		$output="C";
	if( isset($_POST['known2']) )
		if(strlen($output)==0)
			$output="C++";
		else
			$output.=",C++";
	if( isset($_POST['known3']) )
		if(strlen($output)==0)
			$output="JAVA";
		else
			$output.=",JAVA";
	
	if($gen=="Male")
		echo "Mr. $user knows $output";
	else
		echo "Mrs.".$user . " knows ". $output;
	
?>
</body>