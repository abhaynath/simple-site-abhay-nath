<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


$servername = "sql312.epizy.com";
$username = "epiz_26830995";
$password = "T0jt57n7Zhb1";
$dbname = "epiz_26830995_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, email,name, password  FROM users";
$result = $conn->query($sql);
$emparray = array();
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
}

echo json_encode($emparray);
$conn->close();
