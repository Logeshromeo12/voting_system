<?php
/*$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";*/
include_once("connect.php");

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}*/
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "SELECT * FROM user where mobile = '$mobile' and role = '$role'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["mobile"]. "<br>";
  }
} else {
  echo "0 results";
}

//mysqli_close($conn);
?>