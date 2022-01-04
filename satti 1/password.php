
<html>
<title>password updation form</title>
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
background:lightblue;
color:black;
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
  width: 85%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
select {
  padding: 10px;
  width: 85%;
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
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
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

<div class="nav">
<ul>
   <li><a href="subtran1.php">Back</a></li>
</ul>
  </div>
<form id="regform" action="pass1.php" method="post" autocomplete="off">
  <h2><center>PASSWORD UPDATION</center></h2>
  
  <br><br>
  
  <h3>Enter your username:</h3>
    <p><input placeholder="enter your username.."  oninput="this.className = ''"name="username" required/></p>
	
  
 <h3>Enter your old password:</h3>
    <p><input placeholder="enter your old password..."  oninput="this.className = ''"name="old" required/></p>
	
 
 <h3>Enter your new password:</h3>
    <p><input type="password" placeholder="enter new password.."  oninput="this.className = ''"name="new" required/></p>
	
  
  <h3>Re-Enter your new password:</h3>
    <p><input type="password" placeholder="re-enter your new password"  oninput="this.className = ''" name="new1" required/></p>
  
 

  

    <input type="submit" value="submit" ><br>
	<br>
    <input type="reset" value="reset">
  
</form>
</body>
</html>




