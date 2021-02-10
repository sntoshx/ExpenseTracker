<?php
session_start();
if($_SESSION['Name']==NULL)
header("location:index.php")
?>
<!DOCTYPE html> 
<html>
        <head>
                <meta name="viewport" content="width=device-width, intital-scale=1.0, user-scalable=yes">
                <meta charset="utf-8"> <!--setting the character set as universal utf-8 format-->
                    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
<!--importing the title icon -->
                <link rel="stylesheet" href="welcomePage.css"> <!--connecting the css file-->
                <!--title to be displayed as tab name
                title is actually dynamic here...we are using php script to include the name from the form in title -->
                <title>Welcome - <?php 
                                if(strcasecmp($_SESSION['Gender'],"male")==0) {
                                    echo "Mr. ";
                                    echo ucwords($_SESSION['Name']);}
                                else if(strcasecmp($_SESSION['Gender'],"female")==0) {
                                echo "Ms. ";    
                                echo ucwords($_SESSION['Name']);}
                                else 
                                    echo ucwords($_SESSION['Name']);
                                ?> </title> 
                <!--the above php script capitalizes the dynamic title and welcomes the user ;) -->
        </head>
        <!--the real body starts here...no php scripting down here..may be ..very little ;) -->
        <body>
               <h1>Signed up successfully</h1>
        </body>
</html>