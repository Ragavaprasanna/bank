<html>
	<head>
	<title>Money in the Bank</title>
<style>
body{
		background-image:url('212.jpg');
		background-size:cover;
	}
.container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}

form{
	
	align-content: right;
}
input{
	align-content: right;
	margin:5px;
}

h3{
	color:#1f00a8;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #f57a00;
	text-align: center;
	color:white;
}



.button:hover {
  background: #8a4500;
}


body{
	background-color: PaleTurquoise;
}
    body
    {
    background-color : PaleTurquoise ;
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >பணம் எடுத்தல்</h2>
		<h3> வணக்கம் <?php Print "$user" ?></h3>
		<a href="s131.php" >பின் செல்ல இங்கு கிளிக் செய்க..</a><br/>
		<br/><br/>
		<form action="s12.php" method="POST">
			நீங்கள் எவ்வளவு பணத்தை திரும்பப் பெற விரும்புகிறீர்கள்: <br><input type="number" name="amount" required="required" /><br/>
			<br>சில விவரங்களைச் சேர்க்கவும்: <br><input type="text" name="details"/><br/>
			<input type="submit" class="button" value="பணம் எடு"/>
		</form>
		<br/>
		<p>தயவுசெய்து உங்களிடம் இருப்பதைவிட அதிகமாக பணம் எடுக்காதீர்கள் .</p>


	</div>
	</body>
	
</html>
