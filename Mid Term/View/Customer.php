<?php

    $isPost = false;
    $location = "";
    $food = "";
    $Payment = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Page</title>
    <style>
        .head {
            text-align: center;
        }

        .first {
            width: 40%;
            float: left;
            margin-left: 5%;
            padding-left: 2%;
        }
    </style>
</head>

<body>
    <h1 class="head"><?php session_start(); echo "Welcome ".$_SESSION['username']; ?></h1>
    <h6 class="head"><?php echo "You're Logged in using email: ".$_SESSION['email']; ?></h6>
    <form action="Place_order.php" method="post">
    <div class="first">
        <h3>Choose your service location: </h3>
        <select name="location">
            <option value="0">Select</option>
            <option value="Dhanmondi">Dhanmondi</option>
            <option value="Gulshan">Gulshan</option>
            <option value="Bashundhara">Bashundhara</option>
            <option value="Mohakhali">Mohakhali</option>
            <option value="Uttara">Uttara</option>
        </select>
        <?php 
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["location"]))
                    {
                        $location = $_POST["location"];
                    }
                }
                if ($isPost == true && $location == "")
                {
                    echo "<span style = 'color:red;'>Required</span>";
                }
        ?>
        
    </div>

    <div class="first">
        <h3>Choose the food item you want to order: </h3>
        <h4>Food items:</h4>
            <input type="radio" name="food" value="Rice - 150 BDT"> Rice - 150 BDT<br>
            <input type="radio" name="food" value="Curry - 80 BDT"> Curry - 80 BDT <br>
            <input type="radio" name="food" value="Chicken Fry - 60 BDT"> Chicken Fry - 60 BDT<br>
            <input type="radio" name="food" value="Noodles - 30 BDT"> Noodles - 30 BDT <br>
            <input type="radio" name="food" value="Pizza - 500 BDT"> Pizza - 500 BDT<br>

            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["food"]))
                    {
                        $food = $_POST["food"];
                    }
                }
                if ($isPost == true && $food == "")
                {
                    echo "<span style = 'color:red;'>Required</span>";
                }
        ?>
    </div>

    <div class="first">
        <h3>Choose time of delivery: </h3>
        <select name="Time">
            <input type="time" name="time" id="time">
        </select>
    </div>

    <div class="first">
        <h3>Select type of Payment Method: </h3>
        <select name="Payment" id="">
            <option value="Cash on Delivery">Cash on Delivery</option>
            <option value="Online Payment">Online Payment</option>
        </select>

        <?php 
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["Payment"]))
                    {
                        $Payment = $_POST["Payment"];
                    }
                }
                if ($isPost == true && $Payment == "")
                {
                    echo "<span style = 'color:red;'>Required</span>";
                }
        ?>
        
    </div>

    <div style="text-align: center;">
        <input type="submit" value="Proceed Order" name ="btnSave">
    </div>

    <?php include 'Customer-Validation.php' ?>

    <div style="text-align: right;">
        <a href="Logout-Customer.php">Log Out</a>
    </div>


    <div style="text-align: right;">
        <a href="Home-Page-For-All.php">Go back to Home Page</a>
    </div>
    </form>

    <?php
        setcookie("category", "food", time()+86400, "/");
    ?>

    

</body>

</html>