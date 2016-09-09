<?php

include_once('db.php');

if(!empty($_FILES['image']['tmp_name']))
{
		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name=addslashes($_FILES['image']['name']);


		// $sql="UPDATE tbimage 
		// SET 
		// product_name='$image_name', 
		// product_image='$image'
		// WHERE id= '$id'";

		$sql = "INSERT INTO tbimage (product_name, product_image) VALUES ('$image_name', '$image');";

		if (mysql_query($sql)) {
			header('location:index.php');
		}
}

?>