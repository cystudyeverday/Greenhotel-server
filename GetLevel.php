<?php
header('Access-Control-Allow-Origin: *');
$servername = "101.32.32.30";
$username = "root";
$password = "root@Astri123456";
$dbname="GAMEDATA";
// variable submited by user 
$loginUser=$_REQUEST['loginUser'];


//echo "loguser:".$loginUser."loginpass".$loginPass;


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    echo "connection unsuccessful.";
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully in Login.php ";

$sql = "SELECT level FROM UserInfo WHERE username='" .$loginUser."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row["level"];
       echo  $row["level"]. " " . $row["score"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>