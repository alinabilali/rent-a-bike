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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">   
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <style>
		*{
    	margin : 0;
    	padding: 0;
    	box-sizing: border-box; 
	}
	body{
		font-family: 'Poppins', sans-serif;	}
	
	.navbar{
    	display: flex;
    	align-items: center;
    	padding: 20px;
		width:100%;
		background: #fff;
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
    	color: #9A6355;
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
		background: #F3EEF1;
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
    	background: #9A6355;
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
    	background: #fff; 
	}
	.header .row{
    	margin-top: 70px;
	}
	.footer{
    	background: #373A3C;
    	color: #ffffff;
    	font-size: 14px;
    	padding: 30px 0;
	}
	.footer p{
    	color: #ffffff;
		text-align:center;
	}
	#rent-form {
    display:block;
	}

	.rent-body {
    	margin: 0;
 	
    	font-size: 1rem;
    	font-weight: 400;
    	line-height: 1.5;
    	color: #212529;
    	text-align: left;
    	background-color: #F3EEF1;
    	padding: 50px 150px 100px 100px;
    	border: 1px solid #ced4da;
    	border-radius: 0.25rem;
    	max-width: 100%;
	}

	.rent-form-group {
    	margin-bottom: 1rem;
	}

	.rent-input-group {
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

	.rent-form-control {
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

	.rent-form-control:focus {
    	border: 1px solid #313131;
	}

	select.rent-form-control[size], select.rent-form-control[multiple] {
    	height: auto;
	}

	textarea.rent-form-control {
    	font-family: -apple-system, Georgia, sans-serif;
    	height: auto;
	}

	label.rent-label {
    	display: inline-block;
    	margin-bottom: 0.5rem;
	}

	.rent-btn {
    	display: inline-block;
    	font-weight: 400;
    	color: #373A3C;
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
    	.rent-btn {
        	transition: none;
    	}
	}

	.rent-btn:hover {
    	color: #3d85c6;
    	text-decoration: none;
	}

	.rent-btn:focus, .rent-btn.focus {
    	outline: 0;
    	box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
	}	

	.rent-btn-primary {
    	color: #ffffff;
    	background-color: #373A3C;
    	border-color: #373A3C;
		
	}

	.rent-btn-primary:hover {
    	color: #373A3C;
    	background-color: #9A6355;
    	border-color: #9A6355;
	}

	.rent-btn-primary:focus, .rent-btn-primary.focus {
    	color: #fff;
    	background-color: #373A3C;
    	box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
	}

	.rent-btn-lg, .rent-btn-group-lg>.rent-btn {
    	padding: 0.5rem 1rem;
    	font-size: 1.25rem;
    	line-height: 1.5;
    	border-radius: 0.3rem;
	}

	.rent-btn-block {
    	display: block;
    	width: 115%;
	}

	.rent-btn-block+.rent-btn-block {
    	margin-top: 0.5rem;
	}

	input[type="submit"].rent-btn-block, input[type="reset"].rent-btn-block, input[type="button"].rent-btn-block {
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
</div>
</div>
            <div class="row">
        		<div class="col-2">
           		  <h1>Rent your bike here</h1>
                  <center><img src="type.jpg" width="400" height="500"/></center>
</div>
<div class="col-2">
                  <div class="rent-body">
        			<div id="rent-form">
                   <center><form>
                   	<div class="rent-form-group">
                   		<label for="Name" class="rent-label">Name: </label>
                   		<input type="text" id="Name" placeholder="Your name" name="Name" class="rent-form-control" required>
                    </div>
                    <div class="rent-form-group">
                   		<label for="Matric" class="rent-label">Matric Number: </label>
                    	<input placeholder="Eg: AI200122"  type="text" id="Matric" name="Matric" class="rent-form-control" required>
                    </div>
                    <div class="rent-form-group">
					<label for="Type" class="rent-label">Type of Bike:</label>
<select id="Type" name="Type" class="rent-form-control" required>

    <option value="Road Bike">Road Bike</option>
	<option value="Cruiser Bike">Cruiser Bike</option>
    <option value="Fixed Gear">Hybrid Bike</option>
	<option value="Mountain Bike">Mountain Bike</option>
	<option value="BMX Bike">BMX Bike</option>
    <option value="Touring Bike">Cruiser Bike</option>
	<option value="Recumbent Bike">BMX Bike</option>
	<option value="Folding Bike">Cruiser Bike</option>
	<option value="Utility Bike">Cruiser Bike</option>


    <!-- Add more options as needed -->
</select>
                	</div>
                    <div class="rent-form-group">
                    	<label for="Duration" class="rent-label">Duration: </label>
                    	<input type="text" id="Duration" placeholder="Duration bike rented" name="Duration" class="rent-form-control" required>
                	</div>
                    <div class="rent-form-group">
                    	<label for="RM" class="rent-label">Amount (RM): </label>
                    	<input type="text" id="RM" name="RM" class="rent-form-control" required>
                	</div>
                    <div class="rent-form-group">
                		<button type="submit" id="rent-button" class="rent-btn rent-btn-primary rent-btn-lg rent-btn-block">Submit</button>
           	 		</div>
                    </form></center>
		</div>
        </div>
        </div></div></div></div>
    </div>
     <div class="footer">
	 <p class="copyright">MADE FOR BIS20303 WEB SECURITY BY GROUP BIW 19</p>
    </div>
</body>