<?php
//Database connection paramaters
$servername = "localhost";  // servername
$username = "root"; // For MYSQL the predifined username is root
$password = ""; // For MYSQL the predifined password is " "(blank)

$dbname="lab_post";    //database


define("SERVERNAME","localhost");
define("USERRNAME","root");
define("PASSWORD","");
define("DATABASE","lab_post");

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "lab_post");
 
// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "Database Connected successfully ";
echo "                              ";

?>