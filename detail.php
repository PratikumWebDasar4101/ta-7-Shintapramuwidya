<?php
session_start();
require_once"database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php 
		$nim    = $_GET['nim'];
		$sql    = "SELECT * FROM form WHERE nim='$nim' ";
		$result = mysqli_query($conn,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<tr>
			<td><a href="edit.php?nim=<?php echo $row['NIM']; ?>">Edit</td><br><br>
			<td><a href="input.html">Input</a></td><br><br>
		</tr>

		<?php
		echo "<tr>";
		echo "<td >"."<br><br>"."DETAIL DATA"."</td>";
		echo "</tr>";

		echo "<tr >";
		echo "<td colspan=4>"."NIM: "."<br>".$row['NIM']."<br><br>";
		echo "Nama: "."<br>".$row['Nama']."<br><br>";
		echo "Program Studi: "."<br>".$row['programStudi']."<br><br>";
		echo "Jenis Kelamin: "."<br>".$row['jenis_kelamin']."<br><br>";
		echo "Fakultas: "."<br>".$row['Fakultas']."<br><br>";
		echo "Asal: "."<br>".$row['Asal']."<br><br>";
		echo "Moto Hidup: "."<br>".$row['MotoHidup']."</td>";

		echo "</tr>";

		mysqli_close($conn);
		
		?>
	</table>
</body>
</html>