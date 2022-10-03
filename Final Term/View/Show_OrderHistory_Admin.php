<?php
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="webtech_p";
				
				$conn=new mysqli($servername,$username,$password,$dbname);

				if($conn->connect_error)
					die( "Connection failed:".$conn->connect_error);
				else{
					$q="select OrderID,Location,Food,Payment,Time from order_customer";
					$result=$conn->query($q);
					if($result->num_rows>0)
					{
						echo "<table style='border:1px solid black;'>
										<tr>
											<th>OrderID</th>
											<th>Location</th>
											<th>Food</th>
											<th>Payment</th>
                                            <th>Time (for Pre-order)</th>
										</tr>";

						while($row=$result->fetch_assoc())
						{
							echo "<tr>
										<td>".$row["OrderID"]."</td>
										<td>".$row["Location"]."</td>
										<td>".$row["Food"]."</td>
										<td>".$row["Payment"]."</td>
                                        <td>".$row["Time"]."</td>
								   </tr>";
						}
						echo "</table>";
					}
					else
						echo "Unable to load data";
				}
			?>