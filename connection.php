<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ws_project";

if(!$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}
?>