<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>
	<h2 style="color: #044F2B; font-weight: bold;">List Of Books</h2>
	<?php

		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`Name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
				//Table header
				echo "<th>"; echo "BookID";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Auther Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Location";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['BookID']; echo "</td>";
				echo "<td>"; echo $row['Name']; echo "</td>";
				echo "<td>"; echo $row['Author Name']; echo "</td>";
				echo "<td>"; echo $row['Edition']; echo "</td>";
				echo "<td>"; echo $row['Location']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>"
;	?>
</body>
</html>