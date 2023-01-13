<!doctype html>
<html>
<head>
	<title>products</title>
</head>
<body>
	<center><div>
		<?php
			$mysqli = new mysqli("127.0.0.1", "root", "", "modern_eniac");
			// Check servernameconnection
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
			}else{
					$sql = "SELECT * FROM product";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					echo "<table border=1>";
						echo "<tr><th>brand</th>
							<th>processor</th><th>price</th><th>ram</th><th>graphics</th>
							<th>os</th><th>HDD</th></tr>";
						while($row = $result->fetch_array()) {
							echo "<tr><td>". $row[1]."</td><td>". $row[2]."</td><td>".$row[3] ."</td><td>". $row[5]."</td><td>". $row[6]."</td>
							<td>". $row[7]."</td><td>". $row[8]."</td></tr>";
						}
						} else {
							echo "0 results";
						}
						
			}
			$mysqli->close();
		
		?>
	</div>	
</body>
</html>