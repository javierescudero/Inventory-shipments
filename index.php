<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inventory Shipments</title>
	<script src="jquery-1.12.4.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){

		$('#codes').focus();

		var array_pN = new Array();
		var array_Q = new Array();
		var array_WO = new Array();

		var boxes = 1;

		$('#form').submit(function() {
			var c = $('#codes').val();
			
			if (c.charAt(0) == 'P') {
				var pN = c.substring(1);
				array_pN.push(pN);
				$('#codes').val('');

			} else if (c.charAt(0) == 'Q') {
				var Q = c.substring(1);
				array_Q.push(Q);
				$('#codes').val('');

			} else if (c.charAt(0) == 'W') {
				var WO = c.substring(1);
				array_WO.push(WO);

				if (array_WO.length >= 1) {

					alert("Boxes: " + parseInt(boxes));
					for (var i = 0; i < array_pN.length; i++) {
						$("#part_number").append('<tr><td>'+array_pN[i]+'</td></tr>');
						$("#quantity").append('<tr><td>'+array_Q[i]+'</td></tr>');
						$("#wo").append('<tr><td>'+array_WO[i]+'</td></tr>');
					};
					boxes++;
				}
				$('#codes').val('');
			}
			return false;
		});
	});
</script>
<body>
	<form id="form">
		<label for="codes">Codes</label><input type="text" id="codes" name="codes" style="width:10%"><br><br>
		<table id="table" cellpadding="3" cellspacing="3" border="1">
			<thead>
				<tr>
					<th>Part Number</th>
					<th>Quantity</th>
					<th>WO</th>
				</tr>
			</thead>
			<tbody id="body">
				<tr>
					<td id="part_number"></td>
					<td id="quantity"></td>
					<td id="wo"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
