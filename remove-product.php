<?php include("header.php");
include("connect.php");
include("db-product.php");

$id = $_POST['id'];
removeProduct($connection, $id);
header("Location: product-list.php?removed=true");
die(); // will not execute anything else; after location you should always call die
?>

<?php include("footer.php"); ?>