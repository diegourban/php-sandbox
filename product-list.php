<?php include("header.php"); ?>
<?php include("connect.php");

$result = mysqli_query($connection, "select * from products");
while($product = mysqli_fetch_assoc($result)) {
	echo $product['name'] . "<br/>";
}
?>

<?php include("footer.php"); ?>