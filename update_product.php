<?php

// include_once('db.php');

// if(isset($_GET['id']))
// {
// 	$id=$_GET['id'];

// 	$row= mysql_fetch_object(mysql_query("SELECT * FROM tbimage WHERE id ='$id'"));
// }


?>


<?php

include_once('db.php');


if(isset($_POST['update']))
{
	$id=$_POST['id'];
	if(!empty($_FILES['image']['tmp_name']))
	{
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);

			

			$sql="UPDATE tbimage 
			SET 
			product_name='$image_name', 
			product_image='$image'
			WHERE id= '$id'";

			if (mysql_query($sql)) {
				header('location:index.php');
			}
	}
	else{		
		header('location:edit.php?id='.$id);
	}


}

?>