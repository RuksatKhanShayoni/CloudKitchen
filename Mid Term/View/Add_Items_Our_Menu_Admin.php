
<?php
    $isPost = false;
    $item = "";
    $bdt = "";
	
	 include('Styling_Admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title> Add_Items_Our_Menu_Admin </title>
	
	
	
<body>	
	<h1 class="header">Cloud Kitchen</h1>
	
		
		<br>
		<br>
		<h2 class="top">Add Item</h2>
		<br>
		<br>
		
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="center">
				<p>Food Item: <input type="text" name="item" id="item"> </p>
				<?php 
				
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
				
				
				?>
				
				<br>
				<br>
				<br>
				<input type="submit" value="Save" name="btnSave"> <br> <br>
			</form>
			
			<form action="Our_Menu_Admin.php">
				<input type="submit" value="Cancel" name="btnCancel"> <br>
			</form>
		
			</div>

</body>

</head>

</html>

