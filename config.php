<?php
$servername = "mars.cs.qc.cuny.edu";
$username = "abcd1234";
$password = "12345678";
$dbname = "1bcd1234";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
