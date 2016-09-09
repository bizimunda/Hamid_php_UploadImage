<?php

	include_once('db.php');

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		$row= mysql_fetch_object(mysql_query("SELECT * FROM tbimage WHERE id ='$id'"));
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit</title>
	</head>

	<body>
		<form action="update_product.php" method= "POST" enctype="multipart/form-data">
			<input type="file" name="image">

			<input type="hidden" value="<?php echo $id ?>" name="id">
			
			<img width="200" height="200" src="data:image/jpg;base64,<?php echo base64_encode($row->product_image)?>">
			<input type="submit" value="Upload" name="update">
		</form>
	</body>
</html>