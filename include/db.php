<?php

$host = 'clms-best-omprakashbehera-b71e.g.aivencloud.com';
$user = 'avnadmin';
$pass = 'AVNS_Uw1siKihRXSMYEWeAy4';
$db = 'labs';
$port = 26728;

$conn = mysqli_init();
$ca_cert_path = __DIR__ . "./ca.pem";  // Adjust this if 'ca.pem' is in a different directory
mysqli_ssl_set($conn, NULL, NULL, $ca_cert_path, NULL, NULL);
mysqli_real_connect($conn, $host, $user, $pass, $db, $port, MYSQLI_CLIENT_SSL);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>