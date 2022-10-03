<?php
session_start();
?>
<html>

<head>
	<title> Our_Menu_Admin </title>

	<link rel="stylesheet" href="Style_Homepage.css">
    <link rel="stylesheet" href="Styling_Other.css">

</head>

	<body>

		<br>
		<br>
			<div class="formbox3">
				<div class="center">
					<h2 class="formtop">Our Menu</h2>
				<br>

					<form action="#" method="post">
		 		<?php
				include 'Show_Menu_Admin.php'; 
			?>
				</div>
			</div>
		  </div>
		</form>

		<div class="center">
			<form action="Add_Items_Our_Menu_Admin.php">

				<button type="submit" id="button1" value="Add Item">Add Item</button>
			</form>

			<button type="delete" id="button1" value="Delete Items">Delete Items</button>
			<button type="edit" id="button1" value="Edit Item">Edit Item</button>
			
		</div>

		<br>
		<br>

		<div class="center">
			<form action="Dashboard_Admin.php">
				<button type="submit" id="button3" value="Go Back">Go Back</button>
			</form>
		</div>

			<br>
			<br>
		
			<div class="center">
				<form action="Logout_Page_Admin.php">
					<button type="submit" id="button3" value="Logout">Logout</button>
				</form>
			</div>
		</div>
	</body>
</html>         