<?php include("header.php")?>

	<?php
	$name = $_GET["name"];
	$price = $_GET["price"];

	$conn = mysqli_connect('localhost', 'root', '', 'store');

	$query = "insert into products (name, price) values('{$name}', {$price})";

	if(mysqli_query($conn, $query)) { ?>
		<p class="alert-success">Product <?php echo $name; ?>, <?= $price; ?> added with success!</p>
	<?php } else { ?>
		<p class="alert-danger">Product <?= $name; ?> was not added!</p>
	<?php }

	mysqli_close($conn);
	?>

<?php include("footer.php")?>