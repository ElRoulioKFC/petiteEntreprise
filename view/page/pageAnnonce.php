<?php 
$result = mysqli_query($conn, "SELECT * FROM `annonces`");


	echo "<table>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["date"]."</td>";
		echo "<td>".$row["place"]."</td>";
		echo "<td>".$row["type"]."</td>";
		echo "<td>".$row["body"]."</td>";
		echo "<td>".$row["photo"]."</td>";
		if ($row["idmembre"] != null){
			search($row["membre"],"membre");
			echo "<td>".$row["nom"]."</td>";
			echo "<td>".$row["mail"]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>