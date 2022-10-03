<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logged out Customer</title>
</head>
<body>
    <div style="text-align: center;">
        <h2>You have been logged out!</h2>
        <h6 style="text-align:center;">
        <?php
        if (isset($_COOKIE['category']))
        {
            $food = $_COOKIE['category'];
            echo "We are always with your preference of: ".$food;
        }
        
        ?>
        </h6>
        <br> <br> <br>
        <a href="Login_Page_Customer.php">Log In Again</a> <br> <br> <br>
    </div>
    <div style="text-align: center;">
        <a href="Home-Page-For-All.php">Go back to Home Page</a>
    </div>
</body>
</html>

