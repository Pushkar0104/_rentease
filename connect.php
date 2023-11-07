<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rent_ease";


$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
}

?>

