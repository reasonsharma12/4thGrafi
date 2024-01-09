<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "user_info";
$con = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if (!con) {
    die("something went wrong;");
}
?>