<?php
    session_start();
    session_unset();
    session_destroy();

    include('Styling_Admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout_Page_Admin</title>
</head>
<body>
    <div style="text-align: center;">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <h2>You have been logged out from Admin!</h2>
        <h6 style="text-align:center;"> 
       
	   <?php
        if (isset($_COOKIE['category']))
        {
            $email = $_COOKIE['category'];
            echo "You were logged in from ".$email;
        }
        
        ?>
		
        </h6>
        <br> <br> <br>
        <a href="Login_Page_Admin.php">Login again!</a> <br> <br> <br>
    </div>
    <div style="text-align: center;">
        <a href="Home-Page-For-All.php">Go back to Home Page</a>
    </div>
</body>
</html>

