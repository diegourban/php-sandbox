<?php include("header.php");
	include("connect.php");
	include("db-product.php");

$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];

if(insertProduct($connection, $name, $price, $description)) { ?>
	<p class="text-success">Product <?php echo $name; ?>, <?= $price; ?> added with success!</p>
<?php } else { 
	$msg = mysqli_error($connection);
?>
	<p class="text-danger">Product <?= $name; ?> was not added!</p>
	<p class="text-danger">Reason: <?= $msg; ?></p>
<?php 
}
mysqli_close($connection);
?>

<?php include("footer.php"); ?>