<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Kibblebit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$feedtime = date("D M d, Y G:i");

$sql = "SELECT * FROM `Feedings` WHERE 1";
//$sql2 = "INSERT INTO `Feeds`(`KibblebitID`, `Date`, `Notes`) VALUES ('12345'," .$feedtime . ",'fed')";

//$insert = $conn->query($sql2);
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

//escapeshellcmd
//$command = ('/var/www/html/testpython.py');
//$output = shell_exec($command);

?>