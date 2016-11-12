<?php include("header.php");
include("connect.php");
include("db-product.php"); ?>

<?php
if(array_key_exists("removed", $_GET) && $_GET["removed"] == true) {
?>
	<p class="alert-success">Product removed with success.</p>
<?php
}
?>


<table class="table table-striped table-bordered">
	<?php
		$products = listProducts($connection);
		foreach($products as $product) :
	?>
	<tr>
		<td><?= $product['name']; ?></td>
		<td><?= $product['price']; ?></td>
		<td>
			<a class="btn btn-danger" href="remove-product.php?id=<?=$product['id']?>">Remove</a>
		</td>
	</tr>
	<?php
		endforeach
	?>
</table>

<?php include("footer.php"); ?>