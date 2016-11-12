<?php include("header.php");
	include("connect.php");
	include("db-product.php");

$name = $_GET["name"];
$price = $_GET["price"];

if(insertProduct($connection, $name, $price)) { ?>
	<p class="text-success">Product <?php echo $name; ?>, <?= $price; ?> added with success!</p>
<?php } else { 
	$msg = mysqli_error($conn);
?>
	<p class="text-danger">Product <?= $name; ?> was not added!</p>
	<p class="text-danger">Reason: <?= $msg; ?></p>
<?php 
}
mysqli_close($connection);
?>

<?php include("footer.php"); ?>