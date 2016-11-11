<?php include("header.php")?>
	<?php
	$name = $_GET["name"];
	$price = $_GET["price"];
	?>

	<p class="alert-success">Product <?php echo $name; ?>, <?= $price; ?> added with success!</p>
<?php include("footer.php")?>