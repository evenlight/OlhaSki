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
$setupMySql = mysqli_query($conn, "SET SQL_BIG_SELECTS = 1" );

$error[0] = 'Я вас не знаю';
$error[1] = 'Включи куки';
$error[2] = 'Тебе сюда нельзя';
?>