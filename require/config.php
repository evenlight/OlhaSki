<?php
    $servername = "mysql.9246099050.myjino.ru";
    $username = "046015069_dev";
    $password = "Poison70";
    $dbname="9246099050_olhadb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_close($conn);
mysqli_set_charset($conn, "utf8");
?>