<?php
$mysqli = new mysqli('localhost', 'root', '', 'bank', 3306, '/data/data/com.termux/files/usr/var/run/mysqld/mysqld.sock');
$mobile = $_POST['mobile'];

$result = $mysqli->query("SELECT * FROM users WHERE mobile = '$mobile'");

if ($row = $result->fetch_assoc()) {
    echo "<h2>Account Details</h2>";
    echo "Full Name: " . $row['full_name'] . "<br>";
    echo "Account Number: " . $row['account_number'] . "<br>";
    echo "Customer ID: " . $row['customer_id'] . "<br>";
} else {
    echo "No account found for this mobile number.";
}
?>
