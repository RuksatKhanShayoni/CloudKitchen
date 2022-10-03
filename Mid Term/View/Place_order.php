<!DOCTYPE html>
<html lang="en">
<head>
    <title>Place Order</title>
</head>
<body>
    <h2 style="text-align: center;">Checkout your order:</h2> <br>
    <div style="text-align: center;">
    
    <?php 
    echo "<h4>Location of order: ".$_POST['location']."</h4>";
    echo "<br>"; 
    echo "<h4>Food ordered: ".$_POST['food']."</h4>";
    echo "<br>"; 
    echo "<h4>Payment method: ".$_POST['Payment']."</h4>";
    echo "<br>"; 
    echo "<h4>Order Time: ".$_POST['time']."</h4>";
    echo "<br>"; 
    ?>
    </div>
    
    <?php include 'Place_order_json_code.php' ?>
    
    <div style="text-align: center;">
    
    <a href="Customer.php">Go back to Customers Page</a>
    
    </div>
    

</body>
</html>