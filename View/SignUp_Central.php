<?php 
       
    if (isset($_POST["btn"]))
    {   
        $usertype = $_POST['user_type'];        
        $emailid = $_POST['email'];
        $pass= $_POST['pass'];
        $uname = $_POST['name']; 
        $contactnumber= $_POST['contact'];       
        $nidnumber= $_POST['nid'];
        $useradress= $_POST['adress'];

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
                

            $sql = "INSERT INTO user_info(UserType,Email,Password,Name,ContactNumber,NID,Address) 
                    VALUES ('$usertype','$emailid','$pass','$uname',$contactnumber,$nidnumber,'$useraddress')";

            $result = $conn->query($sql);
            $conn->close();
            header("Location: SignIn_Central.php");
            exit();
         }
    }
?>

<html>
    <head>
        <title> SignUp_Central </title>

        
    </head>

<body>

<h1 style="text-align: center;"> Cloud Kitchen</h1>
<div class="hero">
        <div class="formbox2">

    <form action="SignUp_Central.php" method="post" onsubmit="return validate(this)"  novalidate>
    <h3>Sign Up!</h3>
    <div class = "new">

        <div  class = "first">
                User Type: <br> <br>
                        <input class="userType" type="radio"  name="user_type" value="Customer"/> <small>Customer</small>
                        <input class="userType" type="radio"  name="user_type" value="Rider"/> <small> Rider </small> <br>
                        <input class="userType" type="radio"  name="user_type" value="Kitchen Manager"/> <small> Kitchen Manager </small>
                        <input class="userType" type="radio"  name="user_type" value="Admin"/> <small> Admin </small>
                        <br> <br>
                        <p class="err utype"></p><br>
        </div>

        <div class = "first">
                Email:
                        <input type="text" class="input-field" id="email" name="email" placeholder="Enter your Email ID"><br><br>
                        <p class="err email"></p><br>
        </div>

        <div class = "first">
                Password:
                        <input type="password" class="input-field" id="pass" name="pass" placeholder="Enter your Password"><br><br>
                        <p class="err pass"></p><br>
        </div>
        
        <div class = "first">
                Name:
                <input type="text" class="input-field" id="name" name="name" placeholder="Enter your name"><br><br>
                <p class="err name"></p><br>
        </div>
        
        <div class = "ContactNumber">
                Contact Number:
                        <input type="integer" class="input-field" id="contact" name="contact" placeholder="Enter your contact number"><br><br>
                        <p class="err contact"></p><br>
        </div>

        <div class = "first">
                National Identity Number:
                        <input type="integer" class="input-field" id="nid" name="nid" placeholder="Enter your NID number"><br><br>
                        <p class="err nid"></p><br>
        </div>
        
        <div class = "first">
                Adress:
                        <input type="text" class="input-field" id="adress" name="adress" placeholder="Type your adress"><br><br>
                        <p class="err address"></p><br>
        </div>

        
               
        <div>
		<button type="submit" id="button1" class="submit-btn" name="btn" value="btnRegister"> Register </button>
        </div>
                <br>

        </div>

        Already have an account? <a href="SignIn_Central.php">Login</a> <br> <br>
        </div>
        </div>
        </form>

</div>

</div>


<script>

        function validate(form)
        {
                let user_type = form['user_type'];
                let email = form['email'].value;
                let pass = form['pass'].value;
                let name = form['name'].value;
                let contact = form['contact'].value;
                let nid = form['nid'].value;
                let address = form['address'];
                let flag = true;
                let ischecked = false;

                if(contact === ""){
                        document.getElementsByClassName("err contact")[0].innerHTML = "CONTACT number cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err contact")[0].innerHTML = "";
                }
                if(nid === "")
                {
                        document.getElementsByClassName("err nid")[0].innerHTML = "NID number cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err nid")[0].innerHTML = "";
                }
                if(email === "")
                {
                        document.getElementsByClassName("err email")[0].innerHTML = "EMAIL cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err email")[0].innerHTML = "";
                }
                if(name === "")
                {
                        document.getElementsByClassName("err name")[0].innerHTML = "NAME cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err name")[0].innerHTML = "";
                }
                if(pass === "")
                {
                        document.getElementsByClassName("err pass")[0].innerHTML = "PASSWORD cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err pass")[0].innerHTML = "";
                }
                if(address === "")
                {
                        document.getElementsByClassName("err address")[0].innerHTML = "ADDRESS cannot be empty";
                        flag = false;
                } else {
                        document.getElementsByClassName("err address")[0].innerHTML = "";
                }


                for(let i=0;i<user_type.length;i++){
                    if(user_type[i].checked === true){
                        ischecked = true;
                    }
                }
                if(ischecked === false){
                    
                    document.getElementsByClassName("err utype")[0].innerHTML = "USERTYPE has not been chosen yet";
                    flag = false;
                    alert(" USERTYPE not found");
                }else{
                        document.getElementsByClassName("err utype")[0].innerHTML ="";
                }
                return flag;
        }

</script>

</body>

</html>