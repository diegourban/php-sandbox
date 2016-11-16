<?php include("header.php"); 
include("connect.php");
include("db-category.php");
include("db-product.php");

$id = $_GET['id'];
$product = findProduct($connection, $id);
$used = $product['used'] ? "checked='checked'" : "";
$categories = listCategories($connection);
?>

	<h1>Editing Product</h1>
	<form action="edit-product.php" method="post">
		<input type="hidden" name="id" value="<?=$product['id']?>">
		<table class="table">
			<tr>
				<td>Name</td>
				<td><input class="form-control" type="text" name="name" value="<?=$product['name']?>"/></td>
			</tr>		
			<tr>
				<td>Price</td>
				<td><input class="form-control" type="number" name="price" value="<?=$product['price']?>"/></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea class="form-control" name="description"><?=$product['description']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="used" <?=$used?> value="true"> Used</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="category_id" class="form-control">
						<?php foreach($categories as $category) : 
							$thisIsTheCategory = $product['category_id'] == $category['id'];
							$selected = $thisIsTheCategory ? "selected='selected'" : "";
							?>
							<option value="<?=$category['id']?>" <?=$selected?>>
								<?=$category['name']?>
							</option>	
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Edit</button>
				</td>
			</tr>
		</table>
	</form>

<?php include("footer.php"); ?>