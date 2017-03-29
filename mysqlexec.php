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

$sql = "SELECT * FROM `Feeds` WHERE 1";
//echo "heres the feedtime" . $feedtime . "and some more";
$sql2 = "INSERT INTO `Feeds`(`KibblebitID`, `Date`, `Notes`) VALUES (12345, 'hi','fed sql')";

$insert = $conn->query($sql2);
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "FeedID: " . $row["FeedID"]. " - KibblebitID: " . $row["KibblebitID"]. " " . $row["Date"]. "<br>";

    }
} else {
    echo "0 results";
}
$conn->close();











//escapeshellcmd
//$command = ('/var/www/html/testpython.py');
//$output = shell_exec($command);

?>