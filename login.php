<?php
$conn=mysqli_connect("127.0.0.1","root","","expensetracker");
$email = $_POST['userEmail'];
$password=$_POST['userPassword'];
$passwordmd5=MD5($password);
?>
<?php
$sql = "SELECT user_email, user_password from user where user_email='$email' and user_password='$passwordmd5'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    session_start();
    $sql = "SELECT user_name from user where user_email='$email'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc())
    {
        $_SESSION['Name'] = $row['user_name'];
    } 
    $sql = "SELECT user_id from user where user_email='$email'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc())
    {
        $_SESSION['Id'] = $row['user_id'];
    }
    $sql = "SELECT user_gender from user where user_email='$email'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc())
    {
        $_SESSION['Gender'] = $row['user_gender'];
    }
    $_SESSION['Email'] = $email;
    header("location:panel.php");
}
else
{   
  echo '<script>alert("The username or password you entered is incorrect. Please try again!");
  window.location = "index.php";</script>';
}
?>