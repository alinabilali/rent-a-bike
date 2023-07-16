<?php
session_start();
include "function.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login | Rent-A-Bike</title>
    <style>
	body {
  		background-color: #f4cccc;
		font-family: 'Georgia', sans-serif;
	}
	#sWrapper {
    	width:300px;
    	margin:80px auto 0px auto;
    	padding:10px;
    	border-radius: 5px;
    	-moz-border-radius:5px;
    	-webkit-border-radius:5px;
    	background-color: #f4cccc;
		overflow: auto;
	}
	#sHeader {
    	font-size:1.5em;
    	color:#000000;
	}
	.sRows {
    	margin: 10px 0px;
	}
	.sLabel {
    	color: #000000;
    	font-size:1.1em;
	}
	.inputCls {
		width: 92%;
		height: 30px;
		padding-left: 5px;
		display: block;
    	padding: 0.375rem 0.75rem;
    	font-size: 1rem;
    	font-weight: 400;
    	line-height: 1.5;
   		color: #495057;
    	background-color: #ffffff;
    	background-clip: padding-box;
    	border: 1px solid #ced4da;
    	outline: none;
    	border-radius: 0.25rem;
    	transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	}
	.seCls {
		width: 100%;
		height: 30px;
		padding-left: 5px;
		border: 1px solid #A1A1A1;
		color:#333333;
	}
	input[type="submit"] {
		width: 100%;
		height: 35px;
		background-color: #0b5394;
		border: 1px solid #1f7ab8;
		color: #fff;
		font-size: 1.2em;
		cursor: pointer;
		float: right;
	}
	</style>
  </head>
  
  <body bgcolor:"#f4cccc">
  		<center><a href=""><img src ="logo.png" width="300px"></a>
        <h1>Rent-A-Bike</h1></center>
      <div id="sWrapper">
      <center><div id="sHeader">Log In</div><br></center>
        <form action="login.php" method="POST" autocomplete="">
          <div class="sRows">
          <center><div class="sLable">User ID:</div></center>
          <div class="sInput">
          <input type="text" class="inputCls" placeholder="" name="id" required="">
          </div>
          </div>
          <div class="sRows">
          <center><div class="sLable">Password:</div></center>
          <div class="sInput">
          <input type="password" class="inputCls" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{11,}" title="Must contain at least one number,one Uppercase,one Lowercase,one special character and more than 10 characters." required>
          </div>
          </div>
          <div class="sRows">
          <center><div class="sLable">Security Phrase:</div></center>
          <div class="sInput">
          <input type="text" class="inputCls" name="security" required>
          </div>
          </div>
          <br>
          <center>Haven't created an account? <br><a href="signup.php">Register now</a></center>
          <div class="sRows">
          <input type="submit" name="login" value="LOGIN">
          </div>
        </form>
      </div>
  </body>
</html>