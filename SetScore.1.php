<?php
$servername = "101.32.32.30";
$username = "root";
$password = "root@Astri123456";
$dbname="GAMEDATA";
// variable submited by user 
$loginUser=$_REQUEST['loginUser'];
$newLevel=$_REQUEST['userLevel'];
//$loginUser="testuser";
//$loginPass="123456";

//echo "loguser:".$loginUser."loginpass".$loginPass;


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    echo "connection unsuccessful.";
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE UserInfo SET level='".$newLevel."' WHERE username='" .$loginUser."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>