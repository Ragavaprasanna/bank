<?php

?>

<html>
<title>E-PORT BANKING</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.nav{
width:100%;
background:#000033;
height:100px;
margin-top:50px;
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

#levForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 50%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
	padding: 10px;
	width: 50%;
	font-size: 17px;
	font-family: Raleway;
	border: 1px solid #aaaaaa;
	height: 30px;
}
select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
textarea {
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
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<body>
<!--<script>
function myFunction() {
    alert("Registered Successfully!");
}
</script>-->
<div class="nav">
<ul>
  <li><a href="subtran1.php">Back</a></li> 
  
</ul>
  </div>

<form id="levForm" action="tt.php" method="post" autocomplete="off">
  <h1>Transfer Form</h1>
  <!-- One "tab" for each step in the form: -->
  
  <h3>Payee name</h3>
    <p><input placeholder="Enter your name" oninput="this.className = ''" name="PayeeName" required/></p>
  
  <h3>password</h3>
  <p><input placeholder="Enter your password" oninput="this.className = ''" name="password" required/></p>
  
  <h3>
    <label></label>
    <label for="male">
	</label>Address</h3>
<p>
      <textarea rows="6" cols="50" placeholder="Description..." oninput="this.className = ''" name="Address" required/>      
</textarea>
  </p>
  <h3>Bank Name:</h3>
  <p><input type="text" placeholder="Enter bank name" oninput="this.className = ''" name="BankName" required/></p>
  
   <h3>From Account</h3>
    <h3>
      <!--<input type="button" name="test" id="test" value="run" />-->
      <input type="text" placeholder="Enter your account no" oninput="this.className = ''" name="FromAccount" required/>
    </h3>
    <p><strong>Transfer AC</strong></p>
    <p>
      <input type="text" placeholder="Enter your Transfer AC" oninput="this.className = ''" name="TransferAC" required/>
    </p>
    <p><strong>Transfer Bank</strong></p>
    <p>
      <input type="text" placeholder="Enter transfer Bank" oninput="this.className = ''" name="TransferBank" required/>
    </p>
    <p><strong>Phone No</strong></p>
    <p>
      <input type="text" placeholder="Enter Phone No" oninput="this.className = ''" name="PhoneNo" required/>
    </p>
    <p><!--<button onclick="myFunction()">Submit</button>-->
	  <br>
      <br>
      <!--<input type="reset" value="reset">-->
</p>
    <input type="submit" value="Apply" >
</form>
</body>
</html>

