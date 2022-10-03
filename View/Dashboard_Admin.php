<html>

<head>
    <title> Dashboard_Admin </title>

    <link rel="stylesheet" href="Style_Homepage.css">
    <link rel="stylesheet" href="Styling_Other.css">

</head>

<body>

<div class="hero">

	<br>
	<br>
	<br>

		<div class="center">
 			<div class="formtop"><?php session_start(); echo "Welcome Admin ".$_SESSION['uname']; ?></div> 
		</div>

	<br>
	<br>
					<form action="Our_Menu_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnMenu"> Our Menu </button>
					</form>
				<br>

					<form action="Customer_Section_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnCustomer"> Customers Section </button>
					</form>
		
      			<br>

					<form action="Rider_Section_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnRider"> Rider Section </button>
					</form>
				<br>

					<form action="KitchenManager_Section_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnManager"> Kitchen Manager Section </button>
					</form>
				<br>
					<form action="Order_History_Admin.php">

					<button type="submit" id="button2" class="submit-btn" name="btnHistory"> Order History </button>
					</form>
				<br>
					<form action="Financial_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnFinancial"> Financial </button>
					</form>
				<br>
					<form action="Feedback_Admin.php">
						<button type="submit" id="button2" class="submit-btn" name="btnFeedback"> Feedback </button>
					</form>
				<br>
				
					<form action="Logout_Page_Admin.php">
						<button type="submit" id="button3" class="submit-btn" name="btnLogout"> Logout </button>
					</form>
				
							<?php
							setcookie("category", "shayoni@aiub.com", time()+86400, "/");
							?>

</div>

</body>


</html>