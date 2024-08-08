<?php
session_start();

$mysqli = new mysqli("195.35.59.14","u121755072_chipotleria","T>C~5g3u[h5","u121755072_chipotleria");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
// $userid = $_SESSION["UserID"];

print_r($_SESSION);

echo "SID: ".SID."<br>session_id(): ".session_id(); 
echo "<br>COOKIE: ".$_COOKIE["PHPSESSID"];
?>