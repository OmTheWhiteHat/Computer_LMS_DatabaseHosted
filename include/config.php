<?php

$uri = "mysql://avnadmin:AVNS_Uw1siKihRXSMYEWeAy4@clms-best-omprakashbehera-b71e.g.aivencloud.com:26728/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=main_auth";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
  $db = new PDO($conn, $fields["user"], $fields["pass"]);

  $stmt = $db->query("SELECT VERSION()");
  print($stmt->fetch()[0]);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}