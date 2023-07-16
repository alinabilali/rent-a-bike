<?php
require "function.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register | Rent-A-Bike</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
  
  <body>
        <div id="sWrapper">
        <center><div id="sHeader">Sign Up</div></center>
        <form action="" method="POST">
            <div class="sRows">
            <div class="sLable">User ID:</div>
            <div class="sInput">
            <input type="text" class="inputCls" name="id" required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Name:</div>
            <div class="sInput">
            <input type="text" class="inputCls" name="name" required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Email:</div>
            <div class="sInput">
            <input type="email" class="inputCls" placeholder="Enter your siswa email" name="email" pattern=".+@siswa.uthm.edu\.my" title="Please enter your siswa email." required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">IC Number:</div>
            <div class="sInput">
            <input type="text" class="inputCls" placeholder="010422050011" name="ic" required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Matric Number:</div>
            <div class="sInput">
            <input type="text" class="inputCls" name="matric" required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Password:</div>
            <div class="sInput">
            <input type="password" class="inputCls" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{11,}" title="Must contain at least one number,one Uppercase,one Lowercase,one special character and more than 10 characters." required>
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Retype Password:</div>
            <div class="sInput">
            <input type="password" class="inputCls" name="repassword">
            </div>
            </div>
            <div class="sRows">
            <div class="sLable">Security Phrase:</div>
            <div class="sInput">
            <input type="text" class="inputCls" name="security" required>
            <?php if(isset($_GET['CaptchaPass'])){ ?>
            <div class="FormElement">Message Sent</div>
            <?php } ?>
            <?php if(isset($_GET['CaptchaFail'])){ ?>
            <div class="FormElement">Captcha Failed. Please try again!</div>
            <?php } ?>
            </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LcC5V8gAAAAAMeufA7oK9yqdzcCvHRRX0inBocA"></div>
            <center>Already register? <a href="login.php">Login now.</a></center>
            <div class="sRows">
            <input type="submit" value="REGISTER" name="submit">
            </div>
        </form>
        </div>
    </body>
</html>