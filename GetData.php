<?php 
header('Access-Control-Allow-Origin: *');
$servername = "101.32.32.30";
$username = "root";
$password = "root@Astri123456";
$dbname="GAMEDATA";

$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    echo "connection unsuccessful.";
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully in Login.php ";

$sql = "SELECT * FROM UserInfo ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row["level"];
       echo  $row["username"]. " " . $row["level"]. " " . $row["password"]. " " . $row["score"];
    }
} else {
    echo "0 results";
}
$conn->close();

echo "Hello today id ". date("Y-m-d H:i:s");
echo"game version:1.0.0.1";


?>
