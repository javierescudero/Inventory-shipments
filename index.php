<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inventory Shipments</title>
</head>
<body>
	<?php
	if (isset($_POST["iniciar"])) {
		$number_part = array($_POST["part_number"]);
		$quantity = array($_POST["quantity"]);
		$wo = array($_POST["wo"]);

		$lenght = sizeof($number_part);

		/*for($i=0;$i<=$lenght;$i++){
		    echo $array[$i]
		}*/

		echo "".$number_part[0];
	}
	?>
	<form action="" method="post">
		<input type="number" id="" name="" value="Nuevo Pallet" min="0"><br><br>
		<label for="part-number">Part Number</label><input type="text" id="part_number" name="part_number"><br>
		<label for="quantity">Quantity</label><input type="text" id="quantity" name="quantity"><br>
		<label for="wo">W.O.</label><input type="text" id="wo" name="wo"><br>
		<input type="submit" id="" name="iniciar" value="Guardar">
	</form>
</body>
</html>