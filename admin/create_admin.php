<?php
include '../includes/db.php';

// hash the password
$password = password_hash("Jyothika@123", PASSWORD_DEFAULT);
$email = "admin@example.com";

$stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')");
$stmt->execute([$email, $password]);

echo "Admin created successfully!";
