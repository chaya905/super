<?php
	include 'database.php';
    $category_name=$_POST['category_name'];
	$sql = "SELECT itemName, categoryName FROM items i inner join categories c on i.category_id=c.category_id ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {    
		while($row = $result->fetch_assoc()) {
            if ($row['categoryName']===$category_name) {
           ?>	   
            <tr>     
                <td><?=$row['itemName'];?></td>
            </tr>
           <?php	}}}
	
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>