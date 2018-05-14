<html>
<body>
	<?php
	session_start();
	include("connect.php");
	?>
	
	<link rel="stylesheet" type="text/css" href="inventory.css">
		

		<table border="1" cellspacing="0" cellpadding="4">
				<thead>
					<tr>
						<th>Brand Name</th>
						<th>Product Name</th>
						<th>Category</th>
						<th>Price</th>
						<th>Picture</th>
					</tr>
				</thead>
			<tbody>
				<?php include('connect.php');
				$result = $db->prepare("SELECT * FROM Inventory ORDER BY productID DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++)
				{ ?>
					<tr class="record">
						<td><?php echo $row['brandName']; ?></td>
						<td><?php echo $row['productName']; ?></td>
						<td><?php echo $row['category']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><img src="Pictures/products/<?php echo $row['picture'] ?> "width="100" height="75";></td>
						<td><a href="editform.php?id=<?php echo $row['productID']; ?>"><input type="button" value="Edit"></a> &nbsp;&nbsp;| &nbsp; <a href="delete.php?id=<?php echo $row['productID']; ?>"><input type="button" value="Delete"></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<br/>
		<p><a href="add.php">Add New Product</a></p>
		<br/>
	
</body>	

</html>