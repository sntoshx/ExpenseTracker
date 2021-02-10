<?php
$conn=mysqli_connect("127.0.0.1","root","","expensetracker");
session_start();

if($_SESSION['Name']==null)
    header("location:index.php");

else {
$currency = $_POST['currency'];
$amount = $_POST['amount'];
$mode = $_POST['mode'];
$reason = $_POST['payment-category'];
$fin_amount = "";

date_default_timezone_set('Asia/Kolkata');

$the_date = date("Y-m-d");
$the_time = date("H:i:s");
if($currency=="Dollar")
$fin_amount = 73*$amount;
else if($currency=="Euro")
$fin_amount = 90*$amount;
else if($currency=="Rupee")
$fin_amount = $amount;
else
$fin_amount = 100*$amount;

if($mode == "deposit")
$fin_amount = "+".$fin_amount;
else
$fin_amount = "-".$fin_amount;

$tmp = $_SESSION['Table'];
$sql = "INSERT INTO $tmp values (null,'$the_date', '$the_time', '$fin_amount','$amount', '$reason')";
$result = mysqli_query($conn, $sql);

echo '<script>window.location.href="panel.php"</script>';
}

?>