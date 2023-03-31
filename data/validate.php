<?php

require_once './connection.php';

$userID = $_POST['userID'];
$userPass = $_POST['userPass'];

$stmt = mysqli_prepare($conn, "SELECT * FROM Users WHERE userID=? AND userPass=?");
mysqli_stmt_bind_param($stmt, "ss", $userID, $userPass);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    header("LOCATION: ../dashboard/");
} else {
    header("LOCATION: ../components/404.php");
}
