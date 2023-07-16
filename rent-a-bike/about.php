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
<title>About | Rent-A-Bike</title>
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
                      <div class="container-developer">
        				<h1 class="title-about"><a style="color: #000">OUR DEVELOPER</a></h1>
        				<div class="row-about">
          					<div class="column-about">
            					<center><img src="dev1.jpg" width="25%" border="2px"></center><br />
                                <center><h3>Nor Aisyah Najwa</h3></center><br /><br /><br />
                                <center><img src="dev2.jpg" width="25%" border="2px"></center><br />
                                <center><h3>Nik Nurhani Nadirah</h3></center><br /><br /><br />
                                <center><img src="dev3.jpg" width="25%" border="2px"></center><br />
                                <center><h3>Nurin Nabilah</h3></center><br /><br /><br />
                                <center><img src="dev4.jpg" width="25%" border="2px"></center><br />
                                <center><h3>Wan Nur Syuhada</h3></center><br /><br /><br />
                                <center><img src="dev5.jpg" width="25%" border="2px"></center><br />
                                <center><h3>Muhammad Amirul</h3></center><br />
          					</div>
                		</div>
                	</div>
				</div>
			</div></div></div>
    
     <div class="footer">
            <p class="copyright">BIS20303 WEB SECURITY GROUP 2</p>
    </div>