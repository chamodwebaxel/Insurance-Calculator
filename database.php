<?php

/**
 * DATABASE DETAILS
 */
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWD = '';
const DB_NAME = 'insurance';


// Create connection
$conn = new mysqli(HOST, USERNAME, PASSWD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}