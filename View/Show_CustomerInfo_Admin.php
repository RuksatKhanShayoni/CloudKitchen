<?php
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="webtech_p";
				
				$conn=new mysqli($servername,$username,$password,$dbname);

				if($conn->connect_error)
					die( "Connection failed:".$conn->connect_error);
				else{
					$q="select UserID,Email,Name,ContactNumber,NID,Address from user_info where UserType='Customer'";
					$result=$conn->query($q);
					if($result->num_rows>0)
					{
						echo "<table style='border:1px solid black;'>
										<tr>
											<th>UserID</th>
											<th>Email</th>
											<th>Name</th>
											<th>ContactNumber</th>
                                            <th>NID</th>
											<th>Address</th>
										</tr>";

						while($row=$result->fetch_assoc())
						{
							echo "<tr>
										<td>".$row["UserID"]."</td>
										<td>".$row["Email"]."</td>
										<td>".$row["Name"]."</td>
										<td>".$row["ContactNumber"]."</td>
                                        <td>".$row["NID"]."</td>
										<td>".$row["Address"]."</td>
								   </tr>";
						}
						echo "</table>";
					}
					else
						echo "Unable to load data";
				}
			?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<form onsubmit="ajax(this);return false;">
			<div class="cool2" style="text-align: center;">
				<input class="btn" style='text-align: center;' type="submit" value="See Covid Safety Protocols!" name ="btnAjax">
			</div>
			
		</form>

		<script> //Applying AJAX
			
		function ajax(form){
			const xhtp = new XMLHttpRequest(); //object that interacts with the server
			xhtp.onload = function(){
				alert(this.responseText);
			}
			xhtp.open("GET","ajax-admin.txt",true);
			xhtp.send();
		}
		</script>
</body>
</html>