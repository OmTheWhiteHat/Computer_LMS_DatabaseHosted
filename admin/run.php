<?php
include '../include/auth_db.php';
// Query to fetch all data from a table
$sql = "SELECT * FROM users";  // Replace 'your_table_name' with your actual table name
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["username"]. " - Password: " . $row["password"].  " - Email: " . $row["rmail"]."<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
