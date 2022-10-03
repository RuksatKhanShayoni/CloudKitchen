<?php 
    //Storing Report to Admin If an
        if (isset($_POST["btnReport"]))
        {
            $CustomerReport = $_POST["report"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webtech_p";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error)
            {
                die ("Connection failure!!!!".$conn->connect_error);
            }
            else
            {
                
                $sql = "INSERT INTO report_customer(CustomerReport) VALUES ('$CustomerReport')";
                echo "Report has been sent to ADMIN!";
                $result = $conn->query($sql);
                var_dump($result);
                exit();

            }
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Report for Customer to Admin</title>
        <style>
            body{
                height: 100%;
                width: 100%;
                background-image: url(background.jpg);
                background-position: center;
                background-size: cover;
                opacity: 95%;
            }
            .report{
                background:#ffd480;
	            border-radius:10px;
	            box-shadow:3px 5px 3px 5px #888888;
	            overflow:hidden;
                margin: 10px 200px 20px 200px; /* top | right | bottom | left */
                padding: 20px;
                
            }
            .report2{
                background:#ffd480;
	            border-radius:10px;
	            box-shadow:3px 5px 3px 5px #888888;
	            overflow:hidden;
                margin: 10px 200px 50px 200px; /* top | right | bottom | left */
                padding: 2px;
                
            }
            #btn{
                background:#ff4d4d;
            }
        </style>
    </head>
    <body>
        <form action="#">
            <br><br><br><br><br><br><br>
            <div class="report" style="text-align: center;">
            If you face any problem, you can report here to ADMIN:<br> <br>
            <input type="text" style="width:100%;" name="report" id='report' placeholder="Report any Problem here"> <br> <br>
            <input id="btn" type="submit" value="Report Problem" name ="btnReport">
            
        </div> <br> <br>
        </form>

        <form action="Customer.php">
            <div class="report2" style="text-align: center;">
            <input id="btn" type="submit" value="Back to Customer Dashboard">
            </div>
        </form>
        

        
        
    </body>
    </html>