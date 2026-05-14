<?php
include '../includes/config.php';
$newpass = 'admin123';
$hash = password_hash($newpass, PASSWORD_DEFAULT);
echo "New hash: $hash\n";
$sql = "UPDATE admins SET password='$hash' WHERE username='admin'";
if (mysqli_query($conn, $sql)) {
    echo "Password updated successfully.\n";
} else {
    echo "Error: " . mysqli_error($conn) . "\n";
}
?>
