<html>
<style>
body{
	background-image:url("pc.jpg");
	background-size:cover;
}

#box
{
	width:400px;
	margin:auto;
	background-color:silver;
	
}
div
{
	padding:5px 5px 5px 5px;
}
</style>
<body>
<form action="new.php" method="post">
<div id="box">

<div>
	<h1>Interent Banking System</h1>
</div>
<div>
	create account
</div>
<div>
	<input type=text name=username autofocus>
</div>
<div> Password </div>
<div> <input type=password name=password></div>

<div>
<input type=submit value="Login">
<a href=reg.php>Create Account</a>
</div>
</div>
</form>
</body>
</html>