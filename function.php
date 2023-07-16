<?php
require "connection.php";

// Function to generate a random salt
function generateSalt($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $salt = '';
    for ($i = 0; $i < $length; $i++) {
        $salt .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $salt;
}

// Sign up
$error;
if (isset($_POST["submit"])) {
    $user = mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $ic = mysqli_real_escape_string($connect, $_POST['ic']);
    $matric = mysqli_real_escape_string($connect, $_POST['matric']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $repassword = mysqli_real_escape_string($connect, $_POST['repassword']);
    $security = mysqli_real_escape_string($connect, $_POST['security']);

    // Data validation for email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address!')</script>";
    }

    // Data validation for matric number
    $matricPattern = '/^[A-Za-z]\d{6}$/';
    if (!preg_match($matricPattern, $matric)) {
        echo "<script>alert('Invalid matric number!')</script>";
    }

    // Blacklist detection
    $enrollmentYear = intval(substr($matric, 2, 2)); // Extract the year from the matric number
    
    if ($enrollmentYear < 16) {
        echo "<script>alert('Students enrolled before 2016 are not allowed to register!')</script>";
    } else {
        if ($stmt = $connect->prepare('SELECT * FROM regist WHERE user = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
            $stmt->bind_param('s', $user);
            $stmt->execute();
            $stmt->store_result();
            // Store the result so we can check if the account exists in the database.
            if ($stmt->num_rows > 0) {
                echo "<script>alert('User ID has been registered!')</script>";
            } else {
                if ($stmt = $connect->prepare('SELECT * FROM regist WHERE email = ?')) {
                    $stmt->bind_param('s', $email);
                    $stmt->execute();
                    $stmt->store_result();
                    if ($stmt->num_rows > 0) {
                        echo "<script>alert('Email has been registered!')</script>";
                    } else {
                        if ($user == $matric) {
                            if ($password == $repassword) {
                                $url = 'https://www.google.com/recaptcha/api/siteverify';
                                $privatekey = "6LcC5V8gAAAAACCNbwUx0uDqFBkm13U1SFj1uIsN";

                                $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
                                $data = json_decode($response);

                                if (isset($data->success) && $data->success == true) {
                                    // Generate a random salt
                                    $salt = generateSalt();

                                    // Append the salt to the password
                                    $saltedPassword = $password . $salt;

                                    // Hash the salted password using a secure hashing algorithm (e.g., bcrypt)
                                    $password_hash = password_hash($saltedPassword, PASSWORD_BCRYPT);

                                    $sql = "INSERT INTO regist (user, name, email, ic, matric, password, salt, security) VALUES ('$user', '$name', '$email', '$ic', '$matric', '$password_hash', '$salt', '$security')";
                                    $result = mysqli_query($connect, $sql);

                                    if ($result) {
                                        header("Location: login.php?CaptchaPass=True");
                                    } else {
                                        header("Location: signup.php?CaptchaFail=True");
                                        echo "<script>alert('Please tick on the reCaptcha')</script>";
                                    }
                                }
                            } else {
                                echo "<script>alert('Password does not match!')</script>";
                            }
                        } else {
                            echo "<script>alert('User ID and Matric Number do not match!')</script>";
                        }
                    }
                }
            }
        }
    }
}

// Login
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['login'])) {
        $user = mysqli_real_escape_string($connect, $_POST['id']);
        $password = $_POST['password'];

        $check_user = "SELECT * FROM regist WHERE user = '$user'";
        $result = mysqli_query($connect, $check_user);
        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
            $fetch_password = $fetch['password'];
            $fetch_salt = $fetch['salt'];

            // Append the saved salt to the entered password
            $saltedPassword = $password . $fetch_salt;

            // Verify the hashed password
            if (password_verify($saltedPassword, $fetch_password)) {
                // ... your existing code ...
            } else {
                echo "<script>alert('Incorrect User ID, Password, or Security Phrase!')</script>";
            }
        }
    }
}
?>
