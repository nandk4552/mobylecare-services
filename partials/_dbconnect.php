<?php
session_start();

// Script to connect to the database
define('SITEURL', 'http://localhost/mobylcare/');

// script to connect to the database    
// creating connection
$servername = "localhost";
$username = "root";
$password = '';
$database = "mobylcare";

$conn = mysqli_connect($servername, $username, $password, $database);


?>