<?php
session_start();
echo "Session ID: " . session_id() . "<br>";
echo "admin_id: " . (isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : "NOT SET");
?>
