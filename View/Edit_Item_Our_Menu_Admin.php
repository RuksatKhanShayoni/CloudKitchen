<?php 
    if (isset($_POST["btnAddItem"]))
    {
        $itemname = $_POST["item"];
        $pricebdt = $_POST["bdt"];
        $description = $_POST["desp"];
        

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

            $sql = "UPDATE INTO menu(FoodItem,BDT,Description) VALUES ('".$itemname."',".$pricebdt.",'".$description."') WHERE Sl = $sl";
            $result = $conn->query($sql);
         }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
    
     <link rel="stylesheet" href="Style_Homepage.css">
    <link rel="stylesheet" href="Styling_Other.css">


</head>
<body>


    <hr>
    <form action="#" method = "post">
        <div class ="hero">
            <div class="formbox">
                <div class="formtop"> EDIT ITEM </div>
                    <div class="input-group">

        <?php
            include 'Show_Menu_Admin.php';
        ?>

        <br>

        Edit Item No.: <input type="number" name="Edit Item" id="edititem"> <br> <br>

        



        Food Item: <input type="text" name="item" id="item"> <br> <br>
        BDT: <input type="number" name="bdt" id="bdt"> <br> <br>
        Description: <input type="text" name="desp" id="desp"> <br> <br>

        <input type="submit" value="Save" name = "btnSaveItem">
        </div>

    <?php
        if(isset($_POST["btnSaveItem"]))
            {
                echo"Item Updated Successfully!";
            }
    ?>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</body>
</html>