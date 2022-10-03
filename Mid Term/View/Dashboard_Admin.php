<?php
	 include('Styling_Admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Dashboard_Admin </title>
	
</head>

<body>

	<h1 class="header">Cloud Kitchen</h1>
	
	<h4 class="head"><?php session_start(); echo "Welcome ".$_SESSION['username']; ?></h4>
		
		<h2 class="top">ADMIN DASHBOARD</h2>
		<br>
		<br>
		<div class="center">
			<form action="Our_Menu_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Our Menu" name="btnSave"> <br>
			</form>
		</div>
		<div class="center">
			<form action="Customers_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Customers Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Riders_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Riders Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Kitchen_Managers_Section_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Kitchen Managers Section" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Order_History_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Order History" name="btnSave"> <br>
				
				</form>
		</div>
		
		<div class="center">
			<form action="Financial_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Financial" name="btnSave"> <br>
			</form>
		</div>
		
		<div class="center">
			<form action="Feedback_Admin.php">
				<input style="width:300px; height:100 px;" type="submit" value="Feedback" name="btnSave"> <br>
			</form>
		</div>
		<br>
		<br>
		<br>
		
		<div class="center">
			<form action="Logout_Page_Admin.php">
				<input type="submit" value="Logout" name="btnSave"> <br>
			</form>
		</div>
		
		 <?php
        setcookie("category", "shayoni@aiub.com", time()+86400, "/");
		?>
</body>

</html>
