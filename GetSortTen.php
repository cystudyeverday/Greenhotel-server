<?php
header('Access-Control-Allow-Origin: *');
$servername = "101.32.32.30";
$username = "root";
$password = "root@Astri123456";
$dbname="GAMEDATA";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully ";
//echo"\n";
$sql = "SELECT username, score  FROM UserInfo ORDER BY score DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo   $row["username"]. "?" . $row["score"]. "?";
    }
} else {
    echo "0 results";
}
$conn->close();
?>