<?php
function listCategories($connection) {
	$categories = [];
	$result = mysqli_query($connection, "select * from categories");
	while($category = mysqli_fetch_assoc($result)) {
		array_push($categories, $category);
	}	
	return $categories;
}