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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
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
    	background: #fff; 
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

    .members-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .member-card {
        text-align: center;
        width: 25%;
		/* border: 1px solid red; */
		height: 300px;
	
    }

    .member-card img {
        width: 100%;
        max-width: 200px;
		height: 230px;

 
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
					<h1>Meet Our Team</h1>
				<div class="members-container">
    <div class="member-card">
        <img src="dev1.jpeg" alt="Alina Bila">
        <h3>Alina Bila</h3>
    </div>
    <div class="member-card">
        <img src="dev2.jpeg" alt="Amira Erdyna">
        <h3>Amira Erdyna</h3>
    </div>
    <div class="member-card">
        <img src="dev3.jpeg" alt="Nayli Huda">
        <h3>Nayli Huda</h3>
    </div>
    <div class="member-card">
        <img src="dev4.jpeg" alt="Wan Nur Syuhada">
        <h3>Megat Akmal Syafiq</h3>
    </div>
    <div class="member-card">
        <img src="dev5.jpeg" alt="Mohammad Muizul Amin">
        <h3>Mohammad Muizul Amin</h3>
    </div>
	<div class="member-card">
        <img src="dev6.jpeg" alt="Muhammad Aiman">
        <h3>Muhammad Aiman</h3>
    </div>
</div>

				</div>
			</div></div></div>
    
     <div class="footer">
	 <p class="copyright">MADE FOR BIS20303 WEB SECURITY BY GROUP BIW 19</p>
    </div>