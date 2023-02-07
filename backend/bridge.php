<?php
include 'connection.php';
session_start();
$conn = new mysqli($host, $database, $username, $passwordDB);
if ($conn->connect_errno) {
    echo "ERROR AL CONECTARSE";
    exit();
}
?>