<?php
$mysqli = new mysqli('localhost', 'root', '', 'bank', 3306, '/data/data/com.termux/files/usr/var/run/mysqld/mysqld.sock');

$full_name = $_POST['full_name'];
$mobile = $_POST['mobile'];

$account_number = 'AC' . rand(10000000, 99999999);
$customer_id = 'CID' . rand(100000, 999999);

$stmt = $mysqli->prepare("INSERT INTO users (full_name, mobile, account_number, customer_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $full_name, $mobile, $account_number, $customer_id);
$stmt->execute();
$stmt->close();

echo "<h2>Account Created</h2>";
echo "Account Number: $account_number<br>";
echo "Customer ID: $customer_id<br>";
echo "<a href='search.html'>Go to Search Page</a>";
?>
