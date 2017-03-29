<!DOCTYPE html>
<html>

</html>
<?php
include("config.php");

   session_start();

$uname = mysqli_real_escape_string($db, $_POST['username']);
$pword = mysqli_real_escape_string($db, $_POST['password']);
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$lname = mysqli_real_escape_string($db, $_POST['lname']);
$kibbleid = mysqli_real_escape_string($db, $_POST['kibbleid']);


$sql = "INSERT INTO user (username, password, fname, lname, kibbleid) VALUES ('$uname', '$pword','$fname', '$lname', '$kibbleid')";

if(mysqli_query($db, $sql)){

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}

   mysqli_close($db);
header("Location: C:\wamp64\www\kibblebit\workspace\login.php");
?>
