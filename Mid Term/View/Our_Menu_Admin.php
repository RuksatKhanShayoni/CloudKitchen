<?php
	 include('Styling_Admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Our_Menu_Admin </title>
	
</head>


<body>

	<h1 class="top">Cloud Kitchen</h1>
	
        <hr>
		
		<br>
		<br>
		<h2 class="top">Our Menu</h2>
		<br>
		
		<div class="center">
		<?php
			$jsondata = file_get_contents("Add_Items_Our_Menu_Admin.json");



			$json = json_decode($jsondata,true);
			



			print_r($json);
		
		?>

		<br>
		<br>
		<br>
		<br>

			
		</div>
        <?php
		
		
		?>
		
		
		<div class="center">
			<form action="Add_Items_Our_Menu_Admin.php">
				<input type="submit" value="Add Items" name="btnAdd">
			</form>
			<?php
			//<input type="submit" value="Delete Items" name="btnDelete">  
			//<input type="submit" value="Edit Menu" name="btnEdit">
			?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		
			<form action="Dashboard_Admin.php">
				<input type="submit" value="Go Back" name="btnSave"> <br>
			</form>

			<br>
			<br>

			<form action="Logout_Page_Admin.php">
				<input type="submit" value="Logout" name="btnSave"> <br>
			</form>
		</div>
</body>

</html>