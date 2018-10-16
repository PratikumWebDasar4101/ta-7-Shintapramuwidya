<?php
require_once("database.php");

$conn = mysqli_connect("localhost", "root","","jurnal7");
$nim = $_POST['nim'];
$sql ="SELECT * FROM form WHERE nim LIKE '%$nim%' " ;
$result =mysqli_query($conn,$sql);
$row = mysqli_num_rows($result)
?>

<!DOCTYPE html>
<html>
		
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
	</thead>

	<tbody>
	<?php
	if ($row > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$nim =$row['NIM'];
				echo "<tr>";
				echo "<td>".$row['Nama']."</td>";
				echo "<td>".$row['NIM']."</td>";
				echo "<td>"."<a href='del.php?nim=$nim'>Delete</a> | <a href='detail.php?nim=$nim'>Detail</a></td>";
				echo "</tr>";				
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>

		</tbody>
	</table>
</body>

</html>
