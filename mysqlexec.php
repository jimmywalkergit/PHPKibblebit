<?php
$servername = "localhost";
$username = "root";
$password = "cit480";
$dbname = "Kibblebit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `Feedings` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "FeedID: " . $row["FeedID"]. " - KibblebitID: " . $row["KibblebitID"]. " " . $row["Time"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>