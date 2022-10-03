<?php
    $isPost = false;
    $email = "";
    $pass = "";
    $user_type = "";
    $name = "";
    $phone = "";
	$nid = "";
	$address = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cloud Kitchen</title>
    <style>
        .top {
            text-align: center;
        }

        .h4 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .center {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }

        #right {
            text-align: center;
            font-size: x-small;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h1 class="top">Cloud Kitchen</h1>
        <hr>
        <h2 class="top">Welcome to Bangladesh's First Homemade Food Delivery Service</h2>
        <h4 class="h4">Where You Can Enjoy Food, also can Earn!</h4> <br> <br>
        <h4 class="h4">Sign Up NOW! It's FREE</h4>

        <div class="center">
        
            <p>Email: <input type="text" name="email" id="email"> 
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["email"]))
                    {
                        $email = $_POST["email"];
                    }
                }
                if ($isPost == true && $email == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>
			
			<p>Password: <input type="password" name="pass" id="pass">
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
            </p>
			
			<p>Name: <input type="text" name="name" id="name"> 
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $name = true;
                    if (isset($_POST["name"]))
                    {
                        $name = $_POST["name"];
                    }
                }
                if ($isPost == true && $name == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>

            <p>Phone Number: <input type="text" name="phone" id="phone"> 
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $phone = true;
                    if (isset($_POST["phone"]))
                    {
                        $phone = $_POST["phone"];
                    }
                }
                if ($isPost == true && $phone == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>
            
			<p>NID: <input type="text" name="nid" id="nid"> 
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $nid = true;
                    if (isset($_POST["nid"]))
                    {
                        $phone = $_POST["nid"];
                    }
                }
                if ($isPost == true && $nid == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>
			
			<p>Address: <textarea name="address" id="address" cols="30" rows="3"></textarea> 
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $address = true;
                    if (isset($_POST["address"]))
                    {
                        $phone = $_POST["address"];
                    }
                }
                if ($isPost == true && $address == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>

            <p>
                User type:
                <input type="radio" name="user_type" value="Customer"> Customer
                <input type="radio" name="user_type" value="Rider"> Rider
                <input type="radio" name="user_type" value="Kitchen_Manager"> Kitchen Manager <br>
            
            <?php 
                if (isset($_POST["btnSave"]))
                {
                    $isPost = true;
                    if (isset($_POST["user_type"]))
                    {
                        $user_type = $_POST["user_type"];
                    }
                }
                if ($isPost == true && $user_type == "")
                {
                    echo "<span style = 'color:red;'>Required </span>";
                }
            ?>
            </p>
            <input type="submit" value="Sign Up" name="btnSave"> <br> <br>

            <?php
				if(isset($_POST["btnSave"]))
				{
					if ($name != "" && $email !="" && $pass !="" && $user_type != "" && $phone != "")
					{
                        if ($user_type == "Customer")
                        {
                            header('Location:Login_Page_Customer.php');
                        }
                        if ($user_type == "Rider")
                        {
                            header('Location:login_rider.php');
                        }
                        if ($user_type == "Kitchen_Manager")
                        {
                            header('Location:Kitchen_Manager.php');
                        }
                        
						
                    }
				}
			?>

            

            Already have account?
            <a href="Login-For-All.php">Login</a> 
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

            For Admin Login
            <a href="Login_Page_Admin.php">Click here</a>



        </div>

        <p id="right">@All rights reserved to Cloud Kitchen Developers</p>

    </form>
</body>

</html>