<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login_page";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected!";
