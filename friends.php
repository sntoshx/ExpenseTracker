<?php
$conn=mysqli_connect("127.0.0.1","root","","expensetracker");
session_start();

if($_SESSION['Name']==null)
    echo '<script>window.location.href = "index.php";</script>';


else {
$f_mail = $_POST['friends-email'];
$currency = $_POST['currency'];
$amount = $_POST['amount'];

$sql = "SELECT user_name, user_id from user where user_email='$f_mail'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
//defining friend's details to be written in DB based on the email of friend entered by user
    $f_receiver = "";
    $f_sender = $_SESSION['Name'];
    $f_id = "";
    $row = $result->fetch_assoc();
    $f_id = $row['user_id'];
    $f_receiver = $row['user_name'];
    $fullname = $f_receiver;

    $f_receiver = explode(" ",$f_receiver)[0];
    $f_sender = explode(" ",$f_sender)[0];
////////////////////////////////////
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
    $g_amount = $fin_amount;
////////////////////////////////////
    $mode = "withdrawl";

    if($mode == "deposit")
    $fin_amount = "+".$fin_amount;
    else
    $fin_amount = "-".$fin_amount;

    $tmp = $_SESSION['Table'];

    $sql = "INSERT INTO $tmp values (null,'$the_date', '$the_time', '$fin_amount', $g_amount,'$f_receiver')";
    $result = mysqli_query($conn, $sql);

    $tmp =  "table".$f_id;
    $fin_amount = "+".$amount;

    $sql = "INSERT INTO $tmp values (null,'$the_date', '$the_time', '$fin_amount', $g_amount, '$f_sender')";
    mysqli_query($conn, $sql);
    echo '<script>alert("Money sent to '.$fullname.' successfully.")</script>';
    echo '<script>window.location.href = "panel.php";</script>';
}

else{
    echo '<script>alert("The email you provided does not exist. Please check with your friend or ask them to sign up!")</script>';
    echo '<script>window.location.href = "panel.php";</script>';
}
}
?>