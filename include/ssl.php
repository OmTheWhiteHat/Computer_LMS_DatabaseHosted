<?php 

// Replace with your hosted database credentials
$host = 'clms-best-omprakashbehera-b71e.g.aivencloud.com';
$user = 'avnadmin';
$pass = 'AVNS_Uw1siKihRXSMYEWeAy4';
$port = 26728;

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, './ca.pem', NULL, NULL);
mysqli_real_connect($conn, $host, $user, $pass, $db, $port, MYSQLI_CLIENT_SSL);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>