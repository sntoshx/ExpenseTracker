<?php
session_start();
if($_SESSION['Name']==NULL)
header("location:index.php")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/profile.css" />
    <title>Profile - <?php echo $_SESSION['Name'] ?></title>
  </head>
  <body>
      <div class="header">
        <div class="logo">
          <span>
            EXPENSE TRACKER<span style="font-weight: 100; margin: 0 !important">™
            </span>
          </span>
        </div>
        </div>
        <div class="user-details">
          <table width=40%>
            <tr>
              <th>Name</th>
              <td><?php echo $_SESSION['Name'] ?></td>
            </tr>
            <tr>
              <th>Gender</th>
              <td><?php echo $_SESSION['Gender'] ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?php echo $_SESSION['Email'] ?></td>
            </tr>
            
          </table>
        </div>
 </body>
 </html>
        