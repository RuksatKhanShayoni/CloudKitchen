<?php
	 include('Styling_Admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Order_History_Admin </title>
	
	
</head>

</head>

<body>

	<h1 class="header">Cloud Kitchen</h1>
		
		<br>
		<br>
		<h2 class="top">Order History</h2>


        <?php include 'See_All_Orders_ADMIN.php'; ?>

        <br>
        <br>
        <br>
        <br>
		
		<div class="center">
			<form action="Dashboard_Admin.php">
				<input type="submit" value="Go Back" name="btnSave"> <br>
			</form>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <form action="Logout_Page_Admin.php">
				<input type="submit" value="Logout" name="btnSave"> <br>
			</form>

		</div>
</body>

</html>