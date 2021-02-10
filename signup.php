<?php
$conn=mysqli_connect("127.0.0.1","root","","expensetracker");
$Name = $_POST['uName'];
$Gender = $_POST['uGender'];
$Email = $_POST['uEmail'];
$Password=$_POST['uPassword'];
$Passwordmd5=MD5($Password);
?>

<?php
$sql= "SELECT user_email from user where user_email = '$Email'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
{
    echo '<script>alert("User is already registered.\nPress OK to go back.");
    window.location = "index.php";</script>';
}
else
{
    $Name = strtolower($Name);
    $Name = ucwords($Name);
    $Gender = strtolower($Gender);
    $Gender = ucwords($Gender);
    $Email = strtolower($Email);

    session_start();
    $sql = "INSERT INTO user (`user_name`,`user_email`,`user_password`,`user_gender`) VALUES ('$Name','$Email','$Passwordmd5','$Gender')";
    $result = mysqli_query($conn,$sql);
    $sql = "SELECT user_id from user where user_email='$Email'";
    $result = mysqli_query($conn,$sql);
    $_SESSION['Name'] = $Name;
    $_SESSION['Gender'] = $Gender;
    $_SESSION['Email'] = $Email;
    while($row = $result->fetch_assoc())
    {
        $_SESSION['Id'] = $row['user_id'];
    }
    $temp = "table" . $_SESSION['Id'];
    $_SESSION['Table'] = $temp;

    $sql = "CREATE TABLE $temp (
        tr_id int NOT NULL AUTO_INCREMENT,
        tr_date date,
        tr_time time,
        tr_amt varchar(255), 
        amt int, 
        tr_reason varchar(255),
        PRIMARY KEY(tr_id)
        )";

    $result = mysqli_query($conn,$sql);
    header("location:home.php");
}
?>