<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logged out Customer</title>
    <style>
        body{
                height: 100%;
                width: 100%;
                background-image: url(background.jpg);
                background-position: center;
                background-size: cover;
                opacity: 95%;
            }
        .cool{
                background:#ffd480;
	            border-radius:10px;
	            box-shadow:5px 5px 5px 5px #888888;
	            overflow:hidden;
                margin: 50px 200px 100px 200px;
                padding: 20px;
                
            }
    </style>
</head>
<body>
    <form>
    <div class = "cool" style="text-align: center;">
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
        <a href="SignIn_Central.php">Log In Again</a> <br> <br> <br>
    
    
        <a href="Homepage_New.php">Go back to Home Page</a>
    </div>
    </form>
</body>
</html>

