<?php include("header.php"); 
include("connect.php");
include("db-category.php"); 

$categories = listCategories($connection);
?>

	<h1>Product Form</h1>
	<form action="add-product.php" method="post">
		<table class="table">
			<tr>
				<td>Name</td>
				<td><input class="form-control" type="text" name="name"/></td>
			</tr>		
			<tr>
				<td>Price</td>
				<td><input class="form-control" type="number" name="price"/></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea class="form-control" name="description"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="used" value="true"> Used</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="category_id" class="form-control">
						<?php foreach($categories as $category) : ?>
							<option value="<?=$category['id']?>">
								<?=$category['name']?>
							</option>	
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Register</button>
				</td>
			</tr>
		</table>
	</form>

<?php include("footer.php"); ?>