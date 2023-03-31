<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Parcelamento</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="valor">Valor do Produto:</label>
		<input type="text" name="valor" id="valor" required><br><br>
		<input type="submit" name="submit" value="Calcular">
	</form>
	<br>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = $_POST["valor"];
		$valor_com_juros = $valor * 1.15;
		$valor_parcela = $valor_com_juros / 5;
		$total_compra = $valor_com_juros;
		echo "Valor da Parcela: R$ " . number_format($valor_parcela, 2, ",", ".");
		echo "<br>Total da Compra: R$ " . number_format($total_compra, 2, ",", ".");
	}
	?>
</body>
</html>