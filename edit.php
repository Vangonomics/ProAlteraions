<?php
include('connect.php');

$brandname = $_POST['brandName'];
$productname = $_POST['productName'];
$category = $_POST['category'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$id = $_POST['productID'];

$sql = "UPDATE Inventory
		brandName=?, productName=?, category=?, price=?, picture=?
		WHERE productID=?";

$q = $db->prepare($sql);
$q->execute($brandname,$productname,$category,$price,$picture,$id);
header("location: inventory.php");
?>
