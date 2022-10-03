<?php

session_start();


function loginValidation($conn,$mail,$pass){
	$query = "select * from user_info where Email='$mail' and Password='$pass'";
	$result = $conn->query($query);
	if($result->num_rows === 1){
		$data = $result->fetch_assoc();
		return $data;
	}
	else{
		echo"Wrong Password!";
		return Null;
	}

}


$userType = "";
if($_SERVER['REQUEST_METHOD'] === "POST")
{
	//echo 'called';
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="webtech_p";


	         
    $emailid = $_POST['email'];
    $pass= $_POST['pass'];
	$id = "";
	$conn = new mysqli($servername,$username,$password,$dbname);
	$data = loginValidation($conn,$emailid,$pass);
	$id = $data['UserID'];
	$userType = $data['UserType'];
	$name = $data['Name'];
	$email = $data['Email'];
	if(!isset($_SESSION['uname'])){
		$_SESSION['uname'] = $name;
		$_SESSION['email'] = $email; //optional
	}
	
	if($userType === 'Admin')
		
    {
        header ('Location: Dashboard_Admin.php');
		exit();
    }

	if($userType === 'Customer')
	{
		header ('Location: Customer.php');
		exit();
	}
}

?>

<html>
    <head>
        <title> SignIn_Central </title>

         <style>
            body{
                background:#362828;
				align-content:center;
            }
            .hero{
                background:#ffd480;
	            border-radius:10px;
	            box-shadow:5px 5px 5px 5px #888888;
	            overflow:hidden;
                margin: 50px 450px 100px 450px;
                padding: 20px 20px 20px 20px;
                
            }
            .err {
        		color: red;
			}
			.center{
				style="text-align: center;"
			}
        </style>

    </head>

<body>



 <div class="hero">
        <div class="formbox2">
			<h1 style="text-align: center;"> Cloud Kitchen </h1>
			<br>
			<br>
			<h3 style="text-align: center;"> Sign In </h3> <br>
    <form action="SignIn_Central.php" onsubmit="return validate(this)" method="post" novalidate>
		<div class = "center">
        Email:
		        <input style="text-align: center;" type="text" class="input-field" id="email" name="email" placeholder="Enter your Email ID"><br><br>
				<p class="err email"></p><br>
		Password:
		        <input style="text-align: center;" type="password" class="input-field" id="pass" name="pass" placeholder="Enter your Password"><br><br>
				<p class="err pass"></p><br>
                
                 <button type="submit" id="button1" class="submit-btn" name="btnLogin" value="login">Login </button>

				 <div style="text-align: right;">
        			<a class="btn" href="Homepage_New.php">Go back to Home Page</a>
    			</div>
		</div>


        </form>
</div>

</div>

<script>

        function validate(form)
        {
                let email = form['email'].value;
                let pass = form['pass'].value;
				let flag = true;

				if(email === "")
                {
                        document.getElementsByClassName("err email")[0].innerHTML = "EMAIL cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err email")[0].innerHTML = "";
                }
				if(pass === "")
                {
                        document.getElementsByClassName("err pass")[0].innerHTML = "PASSWORD cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err pass")[0].innerHTML = "";
                }

				return flag;
		}
</script>

</body>

</html>