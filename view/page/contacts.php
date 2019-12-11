<?php

$result = mysqli_query($conn, "SELECT * FROM `membre`");

	while($row = mysqli_fetch_assoc($result) && $row["isAsso"] = 1){
		echo "<table>";
		echo "<tr>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["mail"]."</td>";
		echo "<td rowspan=2>".$row["adresse"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$row["site"]."</td>";
		echo "<td>".$row["telephone"]."</td>";		
		echo "</tr>";
		echo "</table>";
		echo "<br/>";
	}


?>