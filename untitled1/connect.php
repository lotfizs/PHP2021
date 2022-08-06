<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = 'slider';

// Create connection
$conn = new mysqli($servername, $username, $password, $database, 3306);

// Connection error
if ($conn->connect_error) {
    die("Connection to DB failed");

}

session_start();