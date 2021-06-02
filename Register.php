<?php
header('Access-Control-Allow-Origin: *');
$servername = "101.32.32.30";
$username = "root";
$password = "root@Astri123456";
$dbname="GAMEDATA";
// variable submited by user 
$loginUser=$_REQUEST['loginUser'];
$loginPass=$_REQUEST['loginPass'];
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
echo "Connected successfully in Regist.php ";

$sql = "SELECT password FROM UserInfo WHERE username='" .$loginUser."'";
$result = $conn->query($sql); 


if ($result->num_rows > 0) { 
    // output data of each row
   
        //username already exist
        echo"username is taken by others";
    
} else {

//unique username;
    echo"creating user...";
    $sql2=$sql = "INSERT INTO UserInfo(username, password, score)
    VALUES ('".$loginUser."', '".$loginPass."',0)";
    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
$conn->close();
?>