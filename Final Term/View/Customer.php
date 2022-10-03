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
    <link rel="stylesheet" href="styles.css">
    <style>
        .head {
            text-align: center;
            background:#ffd480;
            border-radius:10px;
            box-shadow:3px 5px 3px 5px #888888;
        }
        body{
                height: 100%;
                width: 100%;
                background-image: url(background.jpg);
                background-position: center;
                background-size: cover;
                opacity: 95%;
            }

        .first {
            width: 40%;
            float: left;
            margin-left: 5%;
            padding-left: 2%;
            background:#ffd480;
            border-radius:10px;
            box-shadow:5px 5px 5px 5px #888888;
        }
        .err {
        color: red;
        }
        .btn{
            background:red;
            padding:0px 3px 0px 0px; /* top | right | bottom | left */
        }

    </style>
</head>

<body>
    <h1 class="head"><?php session_start(); echo "Welcome ".$_SESSION['uname']; ?></h1>
    <h6 class="head"><?php echo "You're Logged in using email: ".$_SESSION['email']; ?></h6>

    <form onsubmit='return validation(this)' action="Place_order.php" method="post">

    <div class="first">
        <h3>Choose your service location: </h3>
            <input name='location' type="radio" id='location' value="Dhanmondi">Dhanmondi <br>
            <input name='location' type="radio" id='location' value="Gulshan">Gulshan <br>
            <input name='location' type="radio" id='location' value="Bashundhara">Bashundhara <br>
            <input name='location' type="radio" id='location' value="Mohakhali">Mohakhali <br>
            <input name='location' type="radio" id='location' value="Uttara">Uttara
            <b><p class="err l"></p></b><br>
        <?php /*
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
                } */
        ?>
        
    </div>

    <div class="first">
        <h3>Choose the food item you want to order: </h3>
        <h4>Food items:</h4>
            <input name="food" type="radio" id="food" value="Rice - 150 BDT"> Rice - 150 BDT<br>
            <input name="food" type="radio" id="food" value="Curry - 80 BDT"> Curry - 80 BDT <br>
            <input name="food" type="radio" id="food" value="Chicken Fry - 60 BDT"> Chicken Fry - 60 BDT<br>
            <input name="food" type="radio" id="food" value="Noodles - 30 BDT"> Noodles - 30 BDT <br>
            <input name="food" type="radio" id="food" value="Pizza - 500 BDT"> Pizza - 500 BDT<br>
            <b><p class="err f"></p></b><br>

            <?php /*
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
                } */
        ?>
    </div> 

    <div class="first">
        <h3>Choose time of delivery: </h3>
            <input type="text" name="time" id="time" placeholder="HOUR:MIN 24 hrs format">
        <br> Only choose for pre-order 
        <br> Minimum 45 munites needed for delivery <br> <br>
        </small>
    </div>

    <div class="first">
        <h3>Select type of Payment Method: </h3>
            <input name="Payment" type="radio" id="Payment" value="Cash on Delivery">Cash on Delivery <br>
            <input name="Payment" type="radio" id="Payment" value="Payment by Card">Payment by Card <br>
            <input name="Payment" type="radio" id="Payment" value="Payment by Mobile Banking">Payment by Mobile Banking <br> <br> <br>
            <b><p class="err p"></p></b><br>

        <?php /*
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
                } */
        ?>
        
        
    </div> <br> <br>

    <div style="text-align: right;">
        <input class="btn" type="submit" value="Proceed Order" name ="btnSave">
    </div>

    <?php //include 'Customer-Validation.php' ?>

    <div style="text-align: right;">
        <a class="btn" href="Logout-Customer.php">Log Out</a>
    </div>


    <div style="text-align: right;">
        <a class="btn" href="Homepage_New.php">Go back to Home Page</a>
    </div>
    </form>

    <?php
        setcookie("category", "food", time()+86400, "/");
    ?>

    <script>
            function validation(form)
            {

                //for radio button
                let location = form['location'];
                let food = form['food'];
                let payment = form['Payment'];

            
                
                let flag = true;
                
                let ischecked_food = false;
                let ischecked_location = false;
                let ischecked_payment = false;

                for(let i=0;i<food.length;i++){
                    if(food[i].checked === true){
                        ischecked_food = true;
                    }
                }
                if(ischecked_food === false){
                    document.getElementsByClassName("err f")[0].innerHTML = "FOOD has not been chosen yet";
                    flag = false;
                    //alert(" Food Data not found");
                } 

                for(let i=0;i<location.length;i++){
                    if(location[i].checked === true){
                        ischecked_location = true;
                    }
                }
                if(ischecked_location === false){
                    document.getElementsByClassName("err l")[0].innerHTML = "LOCATION has not been chosen yet";
                    flag = false;
                    //alert(" Location Data not found");
                } 

                for(let i=0;i<payment.length;i++){
                    if(payment[i].checked === true){
                        ischecked_payment = true;
                        
                    }
                }
                if(ischecked_payment === false){
                    document.getElementsByClassName("err p")[0].innerHTML = "PAYMENT has not been chosen yet";
                    flag = false;
                    //alert(" Payment Data not found");
                } 
            
                return flag;
            }
        </script>


    

</body>

</html>