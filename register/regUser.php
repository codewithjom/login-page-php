<?php

require_once '../data/connection.php';

$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$userPass = htmlspecialchars($_POST['userPass']);
$adminPass = htmlspecialchars($_POST['adminPass']);

$stmt = mysqli_prepare($conn, "SELECT * FROM Users WHERE userID='3000' AND userPass=?");
mysqli_stmt_bind_param($stmt, "s", $adminPass);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $stmt = mysqli_prepare($conn, "INSERT INTO Users(firstname, lastname, userPass) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $userPass);
    mysqli_stmt_execute($stmt);
    header("LOCATION: ../dashboard/");
} else {
    header("LOCATION: ../components/404.php");
}
