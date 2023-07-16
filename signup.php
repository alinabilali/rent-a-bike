<?php
require "function.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register | Rent-A-Bike</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    body {
      background: #F3EEF1;
      font-family: 'Poppins', sans-serif;
    }

    #wrapper {
      width: 500px;
      margin: 0 auto 0px auto;
      padding: 40px;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
  
      overflow: auto;
      padding: 30px;
    }

    #header {
      font-size: 1.5em;
      color: #000000;
    }

    .rows {
      margin: 10px 0px;
    }

    .label {
      color: #000000;
      font-size: 1.1em;
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

    .selectCls {
      width: 100%;
      height: 30px;
      padding-left: 5px;
      border: 1px solid #A1A1A1;
      color: #333333;
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

    .btn {
      display: inline-block;
      background: #373A3C;
      color: #ffffff;
      padding: 8px 30px;
      margin: 30px 0;
      border-radius: 30px;
      transition: background 0.05s;
    }

    .btn:hover {
      background: #9A6355;
      color: #373A3C;
    }
  </style>
</head>

<body>
<center><a href=""><img src ="logo.png" width="300px"></a>
  <div id="wrapper">
    <center>
      <div id="header">Sign Up</div>
    </center>
    <form action="" method="POST">
      <div class="rows">
        <div class="label">User ID:</div>
        <div class="sInput">
          <input type="text" class="inputCls" name="id" placeholder="Your matric number" required>
        </div>
      </div>
      <div class="rows">
        <div class="label">Name:</div>
        <div class="sInput">
          <input type="text" class="inputCls" name="name" required>
        </div>
      </div>
      <div class="rows">
        <div class="label">Email:</div>
        <div class="sInput">
          <input type="email" class="inputCls" placeholder="Eg: ai200122@student.uthm.edu.my" name="email" pattern=".+@student.uthm.edu\.my" title="Please enter your student email." required>
        </div>
      </div>
      <div class="rows">
        <div class="label">IC Number:</div>
        <div class="sInput">
          <input type="text" class="inputCls" placeholder="" name="ic" required>
        </div>
      </div>
      <div class="rows">
        <div class="label">Matric Number:</div>
        <div class="sInput">
          <input type="text" class="inputCls" name="matric" placeholder="Eg: AI200122" required>
        </div>
      </div>
      <div class="rows">
        <div class="label">Password:</div>
        <div class="sInput">
          <input type="password" class="inputCls" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" title="Must contain at least one number, one uppercase letter, one lowercase letter, one special character, and be at least 8 characters long." required>
        </div>
      </div>
      <div class="rows">
        <div class="label">Retype Password:</div>
        <div class="sInput">
          <input type="password" class="inputCls" name="repassword">
        </div>
      </div>
      <div class="rows">
        <div class="label">Security Phrase:</div>
        <div class="sInput">
          <input type="text" class="inputCls" name="security" required>
          <?php if (isset($_GET['CaptchaPass'])) { ?>
            <div class="FormElement">Message Sent</div>
          <?php } ?>
          <?php if (isset($_GET['CaptchaFail'])) { ?>
            <div class="FormElement">Captcha Failed. Please try again!</div>
          <?php } ?>
        </div>
      </div>
      <div class="g-recaptcha" data-sitekey="6LcC5V8gAAAAAMeufA7oK9yqdzcCvHRRX0inBocA"></div>
      <center>
        Have an account? Login <a href="login.php">here</a>.
      </center>
      <div class="rows">
        <input type="submit" class="btn" value="REGISTER" name="submit">
      </div>
    </form>
  </div>
</body>

</html>
