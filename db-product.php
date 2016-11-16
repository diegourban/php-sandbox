<?php
function listProducts($connection) {
	$products = [];
	$result = mysqli_query($connection, "select p.*, c.name as category_name from products as p join categories as c on c.id = p.category_id");
	while($product = mysqli_fetch_assoc($result)) {
		array_push($products, $product);
	}	
	return $products;
}

function insertProduct($conn, $name, $price, $description, $category_id, $used) {
	$query = "insert into products (name, price, description, category_id, used) values('{$name}', {$price}, '{$description}', {$category_id}, {$used})";
	return mysqli_query($conn, $query);
}

function editProduct($conn, $id, $name, $price, $description, $category_id, $used) {
	$query = "update products set name = '{$name}', price = {$price}, description = '{$description}', category_id = {$category_id}, used = {$used} where id = {$id}";
	return mysqli_query($conn, $query);
}

function removeProduct($conn, $id) {
	$query = "delete from products where id = {$id}";
	return mysqli_query($conn, $query);
}

function findProduct($conn, $id) {
	$query = "select * from products where id = {$id}";
	$result = mysqli_query($conn, $query);
	return mysqli_fetch_assoc($result);
}