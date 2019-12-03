<?php 
$sql="SELECT * FROM ";
$result = mysqli_query($conn, $sql);


	echo "<table>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["date"]."</td>";
		echo "<td>".$row["lieu"]."</td>";
		echo "<td>".$row["type_animal"]."</td>";
		echo "<td>".$row["texte_annonce"]."</td>";
		echo "<td>".$row["photo"]."</td>";
		if $row["membre"] != null{
			search($row["membre"],"membre");
			echo "<td>".$row["nom"]."</td>";
			echo "<td>".$row["mail"]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

include "include/footer.php" ?>