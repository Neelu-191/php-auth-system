<?php
$host = "sql108.infinityfree.com";
$user = "if0_41578654";
$pass = "PanditDarsh16";
$db   = "if0_41578654_neelu_14";

// 🔗 create connection
$conn = new mysqli($host, $user, $pass, $db);

// ❌ connection error check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ optional (recommended)
$conn->set_charset("utf8mb4");
?>