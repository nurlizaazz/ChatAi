<!-- file_/logout.php -->
<?php
session_start();
session_destroy();
header("Location: index.php?page=home");
exit();
?>