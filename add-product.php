<?php include("header.php")?>

<?php

function insertProduct($conn, $name, $price) {
	$query = "insert into products (name, price) values('{$name}', {$price})";
	return mysqli_query($conn, $query);
}

$name = $_GET["name"];
$price = $_GET["price"];
$conn = mysqli_connect('localhost', 'root', '', 'store');

if(insertProduct($conn, $name, $price)) { ?>
	<p class="text-success">Product <?php echo $name; ?>, <?= $price; ?> added with success!</p>
<?php } else { 
	$msg = mysqli_error($conn);
?>
	<p class="text-danger">Product <?= $name; ?> was not added!</p>
	<p class="text-danger">Reason: <?= $msg; ?></p>
<?php 
}
mysqli_close($conn);
?>

<?php include("footer.php")?>