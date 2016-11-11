<?php include("header.php")?>
	<h1>Formulario de Produto</h1>
	<form action="add-product.php">
		Nome: <input type="text" name="nome"><br/>
		Preco: <input type="number" name="preco"><br/>
		<input type="submit" value="Cadastrar">
	</form>
<?php include("footer.php")?>