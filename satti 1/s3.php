<html>
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.nav{
width:100%;
background:#000033;
height:100px;
margin-top:100px;
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
background:#669900;
transition:0.6s;
}
* {
box-sizing: border-box;
}
body {
background-color: #f1f1f1;
}
#regForm {
background-color: #ffffff;
margin: 100px auto;
font-family: Raleway;
padding: 30px;
width: 50%;
min-width: 300px;
}
h1 {
text-align: center;  
}
input {
padding: 10px;
width: 100%;
font-size: 17px;
font-family: Raleway;
border: 1px solid #aaaaaa;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
display: none;
}
button {
	width:200px;
	height:45px;
	border-radius:5px;
	font-weight:bolder;
	font-size:18px;
background-color: #4CAF50;
color: #ffffff;
border: none;
padding: 10px 30px;
font-family: Raleway;
cursor: pointer;
}
button:hover {
opacity: 0.8;
}
/* Make circles that indicate the steps of the form: */
.step {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbbbbb;
border: none;  
border-radius: 50%;
display: inline-block;
opacity: 0.5;
}
.step.active {
opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
background-color: #4CAF50;
}
</style>
<body>
<script>
functionmyFunction() {
alert("Registered Successfully!");
}
</script>
<div class="nav">
<ul>
<li><a href="user.php">பின்</a></li>
</ul>
</div>
<form id="regform" action="store1.php" method="post">
<h1>பதிவு படிவம்</h1>
<h3>பெயர்:</h3>
<p><input placeholder="முதல் பெயர் "  oninput="this.className = ''"name="firstname" required/></p>
<p><input placeholder="கடைசி பெயர்"  oninput="this.className = ''"name="lastname" required/></p>
<h3>தொடர்பு தகவல்:</h3>
<p><input type="email" placeholder="மின்னஞ்சல் முகவரி"  oninput="this.className = ''"name="email" required/></p>
<p><input placeholder="தொலைபேசி எண்"  oninput="this.className = ''"name="phone"  required pattern=[0-9]{10} required/></p>

<h3>புகுபதிவு தகவல்:</h3>
<p><input placeholder="பயனர்பெயர்"  oninput="this.className = ''" name="username" required/></p>
<p><input placeholder="கடவுச்சொல் "  oninput="this.className = ''" name="password" type="password" require/></p>
<!--<button type="submit" value="submit" >Submit</button>-->
	<button onclick="myFunction()">சமர்ப்பிக்க</button>
	<!--<input type="submit" value="submit">-->
	<br><br>
<button type="reset" value="reset">மீட்டமைக்க</button>


</form>
</body>
</html>
