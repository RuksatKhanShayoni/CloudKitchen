<?php
    $isPost = false;
    $id = "";
    $pass = "";

     include('Styling_Admin.php');
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login_Page_Admin </title>


    <style> 
    input[type=submit]
    {
  background-color: #68991c;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
    }
    </style>
	
</head>

<body>



	<form action="#" method="post">

		<h1 class="header">Cloud Kitchen</h1>

		
			<br>
			<h2 class="top">ADMIN LOGIN</h2>
			<br>
			<br>
			<div class="center">
				<p>Login ID: <input type="text" name="id" id="id"> </p>
				<?php 
				
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["id"]))
                    {
                        $id = $_POST["id"];
                    }
                }
                if ($isPost == true && $id == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
				
				?>
				
				<p>Password: <input type="password" name="pass" id="pass"></p>
				<?php 
                
				if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["pass"]))
                    {
                        $pass = $_POST["pass"];
                    }
                }
                if ($isPost == true && $pass == "")
                {
                    echo "<span style = 'color:red;'>Required</span>";
                }
				?>
				
				<?php
				if(isset($_POST["btnSave"]))
				{
					if ($id=="ADMIN" && $pass=="ADMIN")
					{
						session_start();
						$_SESSION['username'] = "Shayoni";
						header('Location:Dashboard_Admin.php');
					}
					
					else
					{
						echo("Incorrect username or password");
					}
				}
				?>
				
				<br>
				<br>
				<br>
				<input  type="submit" value="Login" name="btnSave"> <br> <br> <br><br>
		
			</div>

            <div class = "top">
                <a href="Home-Page-For-All.php">Go Back to Home Page</a>
            </div>
	</form>	

</body>

</html>
