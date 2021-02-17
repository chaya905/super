
<?php
	include 'database.php';
	$sql = "SELECT * FROM categories GROUP BY categoryName";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<option value=<?=$row['category_id'];?>><?=$row['categoryName'];?></option>	
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>