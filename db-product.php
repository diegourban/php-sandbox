<?php
function listProducts($connection) {
	$products = [];
	$result = mysqli_query($connection, "select * from products");
	while($product = mysqli_fetch_assoc($result)) {
		array_push($products, $product);
	}	
	return $products;
}

function insertProduct($conn, $name, $price, $description) {
	$query = "insert into products (name, price, description) values('{$name}', {$price}, '{$description}')";
	return mysqli_query($conn, $query);
}

function removeProduct($conn, $id) {
	$query = "delete from products where id = {$id}";
	return mysqli_query($conn, $query);
}