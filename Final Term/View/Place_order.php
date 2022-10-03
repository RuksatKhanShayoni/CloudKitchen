<?php 
    if (isset($_POST["btnSave"]))
    {
        $Location = $_POST["location"];
        $Food = $_POST["food"];
        $Payment = $_POST["Payment"];
        $Time = $_POST["time"];
            
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webtech_p";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn -> connect_error)
        {
            die ("Connection failure!!!!".$conn->connect_error);
        }
        else
        {
            echo "<div style='text-align: center;'>Order stored in Database Successfully!</div>";
            $sql = "INSERT INTO order_customer(Location, Food, Payment, Time) VALUES ('".$Location."','".$Food."','".$Payment."','".$Time."')";
            $result = $conn->query($sql);

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Place Order</title>
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
            .cool2{
                background:#ffd480;
	            border-radius:10px;
	            box-shadow:3px 5px 3px 5px #888888;
	            overflow:hidden;
                margin: 10px 200px 50px 200px; /* top | right | bottom | left */
                padding: 2px;
                
            }
            .btn{
                background:#ff4d4d;
            }
    </style>
</head>
<body>
    
    <div class="cool" style="text-align: center;">

    <h2 style="text-align: center;">Checkout your order:</h2> <br>
    
    <?php 
    echo "<h4>Location of order: ".$_POST['location']."</h4>";
    //echo "<br>"; 
    echo "<h4>Food ordered: ".$_POST['food']."</h4>";
    //echo "<br>"; 
    echo "<h4>Payment method: ".$_POST['Payment']."</h4>";
    //echo "<br>"; 
    echo "<h4>Order Time: ".$_POST['time']."</h4>";
    echo "<br>"; 
    ?>
    
    
    <?php include 'Place_order_json_code.php' ?>

   
        
    <form action="report-customer.php">
        <input class="btn" type="submit" value="Report Problem" name ="btnReport">
    </form>

    
    <a class="btn" href="Customer.php">Go back to Customers Page</a>
    
    </div>


    <form onsubmit="ajax(this);return false;">
        <div class="cool2" style="text-align: center;">
            <input class="btn" style='text-align: center;' type="submit" value="See Covid Safety Protocols!" name ="btnAjax">
        </div>
        
    </form>

    <script> //Applying AJAX
        
    function ajax(form){
        const xhtp = new XMLHttpRequest();
        xhtp.onload = function(){
            alert(this.responseText);
        }
        xhtp.open("GET","ajax.txt",true);
        xhtp.send();
    }
    </script>
    

</body>
</html>