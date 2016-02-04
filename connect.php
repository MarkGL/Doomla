<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doomla";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>