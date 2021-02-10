<?php
session_start();
session_unset();
$conn=mysqli_connect("127.0.0.1","root","","expensetracker");

echo '<script>window.location="index.php"</script>';
?>