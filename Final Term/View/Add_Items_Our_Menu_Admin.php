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

            $sql = "INSERT INTO menu(FoodItem,BDT,Description) VALUES ('".$itemname."',".$pricebdt.",'".$description."')";
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
    <form onsubmit='return validate(this)' action="#" method = "post">
        <div class ="hero">
            <div class="formbox">
                <div class="formtop"> ADD ITEM </div>
                    <div class="input-group">
        <div>Food Item: <input type="text" name="item" id="item"> <br>
                        <b><p class="err item"></p></b><br>
        </div>
        <div>BDT: <input type="number" name="bdt" id="bdt"> <br>
                        <b><p class="err bdt"></p></b><br> <br>
        </div>
        <div>Description: <input type="text" name="desp" id="desp"> <br> 
                        <b><p class="err desp"></p></b><br> 
        </div>
        
        

        <input type="submit" value="Add Item" name = "btnAddItem">
        </div>

    <?php
        if(isset($_POST["btnAddItem"]))
            {
                echo"Item Added Successfully!";
            }
    ?>
                    </div>
                </div>
            </div>
        </div>
        
    </form>

<script>

    function validate(form)
    {
            let item = form['item'].value;
            let bdt = form['bdt'].value;
            let desp = form['desp'].value;
            let flag = true;

            if(item === "")
            {
                    document.getElementsByClassName("err item")[0].innerHTML = "FOOD ITEM cannot be empty";
                    flag = false;
            } else {
                    document.getElementsByClassName("err item")[0].innerHTML = "";
            }
            if(bdt === "")
            {
                    document.getElementsByClassName("err bdt")[0].innerHTML = "PRICE cannot be empty";
                    flag = false;
            } else {
                    document.getElementsByClassName("err bdt")[0].innerHTML = "";
            }
            if(desp === "")
            {
                    document.getElementsByClassName("err desp")[0].innerHTML = "DESCRIPTION cannot be empty";
                    flag = false;
            } else {
                    document.getElementsByClassName("err desp")[0].innerHTML = "";
            }

            return flag;
    }
</script>

<?php /*
				
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["item"]))
                    {
                        $id = $_POST["item"];
                    }
                }
                if ($isPost == true && $item == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
				
				?>
				
				<p>BDT: <input type="number" name="bdt" id="bdt"></p>
				<?php 
                
				if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["bdt"]))
                    {
                        $pass = $_POST["bdt"];
                    }
                }
                if ($isPost == true && $bdt == "")
                {
                    echo "<span style = 'color:red;'>Required</span>";
                }
				?>
				
				<?php
				if(isset($_POST["btnSave"]))
				{
					if ($item != "" && $bdt != "")
					{
						
						header('Location:Our_Menu_Admin.php');
					}
					
					else
					{
					
					}
				}
				?>
				
				<?php
				if(isset($_POST["btnSave"]))
				{	
				if(file_exists('Add_Items_Our_Menu_Admin.json'))
              {
                   $current_data = file_get_contents('Add_Items_Our_Menu_Admin.json');
                   $array_data = json_decode($current_data, true);
                   $extra = array(
                         "item" =>     $_POST['item'],
                         "bdt" =>     $_POST['bdt']
                   );
                   $array_data[] = $extra;
                   $final_data = json_encode($array_data);
                   if(file_put_contents('Add_Items_Our_Menu_Admin.json', $final_data))
                   {
                       include 'Show-Added-Admin.php';
                   }
              }
              else
              {
                   echo "JSON File not exits";
              }
				}
				
				*/
				?>

</body>
</html>