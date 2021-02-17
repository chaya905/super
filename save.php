<?php
	include 'database.php';
	$itemName=htmlspecialchars($_POST['itemName']);
    $category_id=htmlspecialchars($_POST['category_id']); 
	$sql = "INSERT INTO `items`( `category_id`,`itemName`) 
	VALUES ('$category_id','$itemName')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
        ?>

        
     <?php   
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>