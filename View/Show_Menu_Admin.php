<?php
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="webtech_p";
				
				$conn=new mysqli($servername,$username,$password,$dbname);

				if($conn->connect_error)
					die( "Connection failed:".$conn->connect_error);
				else{
					$q="select * from menu";
					$result=$conn->query($q);
					if($result->num_rows>0)
					{
						echo "<table style='border:1px solid black;'>
										<tr>
											<th>Sl</th>
											<th>Food Item</th>
											<th>BDT</th>
											<th>Description</th>
										</tr>";

						while($row=$result->fetch_assoc())
						{
							echo "<tr>
										<td>".$row["Sl"]."</td>
										<td>".$row["FoodItem"]."</td>
										<td>".$row["BDT"]."</td>
										<td>".$row["Description"]."</td>
								   </tr>";
						}
						echo "</table>";
					}
					else
						echo "Unable to load data";
				}
			?>