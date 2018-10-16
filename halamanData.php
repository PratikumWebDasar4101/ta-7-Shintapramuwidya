<?php
require_once("database.php");
?>
<!DOCTYPE html>
<html>
		
<head>

</head>
<body>
	<table border="1">

	<a href="input.html">Input Data</a>
		<br><br>

	<form action="search.php" method="Post">
		<input type="text" name="nim" placeholder="input NIM">
		<input type="submit" name="search" value="search"><br><br>
		
	</form>			

		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
	
	<?php
		$sql ="SELECT * FROM form";
		$result =mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$nim =$row['NIM'];
				echo "<tr>";
				echo "<td>".$row['Nama']."</td>";
				echo "<td>".$row['NIM']."</td>";
				echo "<td>"."<a href='del.php?nim=$nim'>Delete</a> | <a href='detail.php?nim=$nim'>Detail</a>"."</td>";
				echo "</tr>";				
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>


	</form>
</body>
</table>
</html>
