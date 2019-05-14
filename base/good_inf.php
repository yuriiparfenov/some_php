<?php
	include 'base/config.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM goods WHERE id = $id";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_row($result);
	$name = $row[1];
	$price = number_format($row[2], 2, ',', ' ');
	$information = $row[4];
	$link = $row[3];
	echo "<td class='border1'>";
			echo "<div class = 'product_icon'>";
				echo "<a href='good_info.html?id=$id' target=$target>";
				echo "<div align='center' class = 'pr_items'>";
				echo "<span height='29' colspan='2' align='left' class='heading2'>$name</span><br>";
				echo "<img src= $link width='156' height='152'>";
				echo "<p>$information</p>";
				echo "</div>";


				echo "</a>";
				echo "<div align='center'>";
				echo "<span height='29' colspan='2' align='center' class='heading2'>$price руб </span><input type='button' value='Купить' align='right'>";
				echo "</div>";
			echo "</div>";
			echo "</td>";	
?>