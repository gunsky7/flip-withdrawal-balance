<?php

include("config.php");

// Create connection
$conn = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE " . DB_NAME;
if ($conn->query($sql) === TRUE) {
    echo "Database " . DB_NAME . " created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

// Create connection
$conn = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE " . DB_TABLE_NAME . " (
    `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `transaction_id` bigint(15) UNSIGNED NOT NULL,
    `amount` int(11) NOT NULL,
    `status` varchar(20) NOT NULL,
    `timestamp` varchar(20) NOT NULL,
    `bank_code` varchar(20) NOT NULL,
    `account_number` varchar(20) NOT NULL,
    `beneficiary_name` varchar(50) NOT NULL,
    `remark` varchar(255) NOT NULL,
    `receipt` varchar(255) DEFAULT NULL,
    `time_served` varchar(20) NOT NULL,
    `fee` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

if ($conn->query($sql) === TRUE) {
    echo "Table ". DB_TABLE_NAME ." created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
