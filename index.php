<?php
include_once('db.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$d=mysql_query("DELETE FROM tbimage WHERE id='$id'");
	if($d)
	{
		header('location:index.php');

	}
}
?>
<html>
<head>
	<title>Upload</title>
</head>
<body>

	<form action="insert_product.php" method= "POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" value="Upload" name="save">
	</form>

	<table>
		<thead>
			<th>ID</th>
			<th>Product Name</th>
			<th>Product Image</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
			$sql=mysql_query("SELECT * FROM tbimage");

			while ($row=mysql_fetch_object($sql)) 
			{
				?>
				<tr>
					<td><?php $row->id ?></td>
					<td><?php $row->product_name ?></td>
					<?php 
					echo '<td><img width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($row->product_image).'"/></td>';
					?>
					<td>
						<a href="edit.php?id=<?= $row->id ?>">Edit</a> | <a href="index.php?id=<?=$row->id ?>">Delete</a>
					</td>
				</tr>

				<?php
			}
			?>

		</tbody>
	</table>
</body>
</html>