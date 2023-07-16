<?php
session_start();
include("function.php");
if(isset($_SESSION['id']) !== true) {
	header("Location: login.php");
	die;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rent-A-Bike</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <style>
		*{
    	margin : 0;
    	padding: 0;
    	box-sizing: border-box; 
	}
	body{
    	font-family: 'Georgia', sans-serif;
	}
	.navbar{
    	display: flex;
    	align-items: center;
    	padding: 20px;
	}
	nav{
 	   flex: 1;
	   text-align: right;
	}
	nav ul{
    	display: inline-block;
    	list-style-type: none;
	}
	nav ul li{
    	display: inline-block;
    	margin-right: 20px;
	}
	h1{
		text-align: center;
	}
	a.b{
    	color: #f4cccc;
	}
	a{
    	text-decoration: none;
    	color: #000000;
	}
	a:hover{ 
    	color: #f3f6f4;
	}
	.container{
    	max-width: 1300px;
    	margin: auto;
    	padding-left: 25px;
    	padding-right: 25px;
	}
	.row{
    	display: flex;
    	align-items: center;
    	flex-wrap: wrap;
    	justify-content: space-around; 
	}
	.col-2{
    	flex-basis: 50%;
    	min-width: 300px;
	}
	.col-2 h1{
    	font-size: 50px;
    	line-height: 60px;
    	margin: 25px 0;
    	color: #000000;
	}
	.btn{
    	display: inline-block;
    	background: #0b5394;
    	color: #ffffff;
    	padding: 8px 30px;
    	margin: 30px 0;
    	border-radius: 30px;
    	transition: background 0.05s;
	}
	.btn:hover{
    	background: #3d85c6;
	}
	.header{
    	background: #f4cccc; 
	}
	.header .row{
    	margin-top: 70px;
	}
	.footer{
    	background: #073763;
    	color: #ffffff;
    	font-size: 14px;
    	padding: 60px 0 20px;
	}
	.footer p{
    	color: #ffffff;
		text-align:center;
	}
	#fcf-form {
    display:block;
	}

	.fcf-body {
    	margin: 0;
 	
    	font-size: 1rem;
    	font-weight: 400;
    	line-height: 1.5;
    	color: #212529;
    	text-align: left;
    	background-color: #f4cccc;
    	padding: 50px 150px 100px 100px;
    	border: 1px solid #ced4da;
    	border-radius: 0.25rem;
    	max-width: 100%;
	}

	.fcf-form-group {
    	margin-bottom: 1rem;
	}

	.fcf-input-group {
    	position: relative;
    	display: -ms-flexbox;
    	display: flex;
    	-ms-flex-wrap: wrap;
    	flex-wrap: wrap;
    	-ms-flex-align: stretch;
    	align-items: stretch;
    	width: 100%;
		margin-left:10px;
	}

	.fcf-form-control {
    	display: block;
    	width: 115%;
    	height: calc(1.5em + 0.75rem + 2px);
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

	.fcf-form-control:focus {
    	border: 1px solid #313131;
	}

	select.fcf-form-control[size], select.fcf-form-control[multiple] {
    	height: auto;
	}

	textarea.fcf-form-control {
    	font-family: -apple-system, Georgia, sans-serif;
    	height: auto;
	}

	label.fcf-label {
    	display: inline-block;
    	margin-bottom: 0.5rem;
	}

	.fcf-btn {
    	display: inline-block;
    	font-weight: 400;
    	color: #212529;
    	text-align: center;
    	vertical-align: middle;
    	cursor: pointer;
    	-webkit-user-select: none;
    	-moz-user-select: none;
    	-ms-user-select: none;
    	user-select: none;
    	background-color: transparent;
    	border: 1px solid transparent;
    	padding: 0.375rem 0.75rem;
    	font-size: 1rem;
    	line-height: 1.5;
    	border-radius: 0.25rem;
    	transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s 		ease-in-out;
	}

	@media (prefers-reduced-motion: reduce) {
    	.fcf-btn {
        	transition: none;
    	}
	}

	.fcf-btn:hover {
    	color: #3d85c6;
    	text-decoration: none;
	}

	.fcf-btn:focus, .fcf-btn.focus {
    	outline: 0;
    	box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
	}	

	.fcf-btn-primary {
    	color: #ffffff;
    	background-color: #073763;
    	border-color: #073763;
		
	}

	.fcf-btn-primary:hover {
    	color: #fff;
    	background-color: #3d85c6;
    	border-color: #3d85c6;
	}

	.fcf-btn-primary:focus, .fcf-btn-primary.focus {
    	color: #fff;
    	background-color: #f7931e;
    	border-color: #f7931e;
    	box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
	}

	.fcf-btn-lg, .fcf-btn-group-lg>.fcf-btn {
    	padding: 0.5rem 1rem;
    	font-size: 1.25rem;
    	line-height: 1.5;
    	border-radius: 0.3rem;
	}

	.fcf-btn-block {
    	display: block;
    	width: 115%;
	}

	.fcf-btn-block+.fcf-btn-block {
    	margin-top: 0.5rem;
	}

	input[type="submit"].fcf-btn-block, input[type="reset"].fcf-btn-block, input[type="button"].fcf-btn-block {
    	width: 100%;
	}
	</style>
</head>
<body>
	<div class="header">
        <div class="container">
    		<div class="navbar">
            	<div class="logo">
                	<a href=""><img src ="logo.png" width="200px"></a>
            	</div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="rent.php">Rent-A-Bike</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="logout.php"">Logout</a></li>
                </ul>
            </nav>
        	</div>
            <div class="row">
        		<div class="col-2">
           		  <h1>Rent-A-Bike</h1>
                  <center><img src="type.jpg" width="400" height="500"/></center>
                  <div class="fcf-body">
        			<div id="fcf-form">
                   <center><form>
                   	<div class="fcf-form-group">
                   		<label for="Name" class="fcf-label">Name: </label>
                   		<input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                    <div class="fcf-form-group">
                   		<label for="Matric" class="fcf-label">Matric Number: </label>
                    	<input type="text" id="Matric" name="Matric" class="fcf-form-control" required>
                    </div>
                    <div class="fcf-form-group">
                    	<label for="Type" class="fcf-label">Type of Bike:</label>
                    	<input type="text" id="Type" name="Type" class="fcf-form-control" required>
                	</div>
                    <div class="fcf-form-group">
                    	<label for="Duration" class="fcf-label">Duration: </label>
                    	<input type="text" id="Duration" name="Duration" class="fcf-form-control" required>
                	</div>
                    <div class="fcf-form-group">
                    	<label for="RM" class="fcf-label">Amount (RM): </label>
                    	<input type="text" id="RM" name="RM" class="fcf-form-control" required>
                	</div>
                    <div class="fcf-form-group">
                		<button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
           	 		</div>
                    </form></center>
		</div>
        </div>
        </div></div></div></div>
    </div>
     <div class="footer">
            <p class="copyright">BIS20303 WEB SECURITY GROUP 2</p>
    </div>
</body>