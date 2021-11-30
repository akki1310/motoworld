<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akki";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email,image_url FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: <b>" . $row["username"]. "</b> Email :- " . $row["email"]. " Image :- <img src = ".$row["image_url"]." ><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>