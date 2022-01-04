<html>
<style>

body
{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background:url(ss.jpg);
	background-size: cover;
}

.box
{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:400px;
	padding:40px;
	background:rgba(0,0,0,.8);
	box-sizing:border-box;
	box-shadow:0 15px 25 px rgba(0,0,0,.5);
	border-radius:10px;
	
}

.heading
{
	font-family:calibiri;
	font-size:10pt;
	font-weight:bold;
	margin:auto;
	width:100%;
	color:white;
	text-align:center;
	padding-bottom:10px;
	padding-top:10px;
}

.box .inputBox
{
	position:relative;
}
.box .inputBox input
{
	width:100%;
	padding:10px 0;
	font-size:16px;
	color:#fff;
	letter-spacing:1px;
	margin-bottom:30px;
	border:none;
	border-bottom:1px solid #fff;
	outline:none;
	background:transparent;
}	
.box .inputBox label
{
	position:absolute;
	top:0;
	left:0;
	letter-spacing:1px;
	padding:10px 0;
	font-size:16px;
	color:#fff;
	pointer-events:none;
	transition:.5s;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label
{
	top:-18px;
	left:0;
	color:#03a9f4;
	font-size:12px;	
}

.submitbtn
{
	margin:auto;
	width:100%;
	text-align:center;
	margin-top:20px;
}

.submitbtn input
{
	width:30%;
	height:40px;
	background-color:orange;
	color:white;
	font-size:16pt;
}

#new
{
	text-align:center;
	font-size:14pt;
	color:red;
	margin-top:40px;
}


div
{
	padding:10px 5px ;
}

.box input[type="submit"]
{
	background:transparent;
	border:none;
	outline:none;
	color:#fff;
	background:#03a9f4;
	padding:10px 20px;
	cursor:pointer;
	border-radius:5px;
}

</style>
<body bgcolor="">

<form action="s2.php" method="post">


<div class="box">

<div class="heading">
	     <center><h1>இங்கே உள்நுழைக</h1></center>
</div>

	<div class="inputBox">
					<input type="text" name="username" required="">
					<label>பயனர்பெயர்</label>
				</div>
				<div class="inputBox">
					<input type="password" name="password" required="">
					<label>கடவுச்சொல்</label>
				</div>

	<input type="submit" name="" value="உள் நுழை">
 <div id=new>
புதிய பயனர்?
<a href="s3.php">
இங்கே பதிவு செய்யவும்</a>
</div>
</div>
</form>
</body>
</html>