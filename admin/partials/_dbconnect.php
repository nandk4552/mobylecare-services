<?php

// Start Session
session_start();

// Script to connect to the database
define('SITEURL', 'http://localhost/mobylcare/');


// creating connection
$servername = "localhost";
$username = "root";
$password = '';
$database = "mobylcare";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));
