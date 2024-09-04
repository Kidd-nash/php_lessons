<?php

// Set the hostname as '/tmp'
$hostname = '/tmp';
// Set the database name as 'ccuser'
$dbname = 'ccuser';
// Set the username and password with permissions to the database
$username = 'ccuser';
$password = 'pass';
// Create the DSN (data source name) by combining the database type (PostgreSQL), hostname and dbname
$dsn = "pgsql:host=$hostname;dbname=$dbname";
// Create a PDO object
$db = new PDO($dsn, $username, $password);
// Terminate db connection
$db = null;