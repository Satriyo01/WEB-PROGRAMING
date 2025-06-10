<?php
session_start();
session_unset();
session_destroy();
header("Location: hallogin.php"); // Redirect ke halaman login setelah logout
exit();
?>
