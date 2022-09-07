<?php  

// $server = "sql300.epizy.com";
// $username = "epiz_32538366";
// $password = "seeVWAgCG6hUK";
// $dbname = "epiz_32538366_my_db";

// $conn  = mysqli_connect($server, $username, $password, $dbname);

// if (!$conn) {
// 	echo "Connection failed!";


$sname = 'localhost';
$uname = 'root';
$password = '';

$db_name = 'my_db';
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo 'Connection failed!';
}
