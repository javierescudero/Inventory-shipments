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
				//array_pN[0] = c.substring(1);
				var pN = c.substring(1);
				array_pN.push(pN);
				/*for (var i = 0; i < array_pN.length; i++) {
					alert("Part Number --> " + array_pN[i]);
				}*/
				//alert("Part Number --> " + array_pN[0]);
				$('#codes').val('');

			} else if (c.charAt(0) == 'Q') {
				//array_Q[0] = c.substring(1);
				var Q = c.substring(1);
				array_Q.push(Q);
				//alert("Quantity --> " + array_Q[0]);
				$('#codes').val('');

			} else if (c.charAt(0) == 'W') {
				//array_WO[0] = c.substring(1);
				var WO = c.substring(1);
				array_WO.push(WO);
				if (array_WO.length < 1) {
					alert("Boxes: " + parseInt(boxes));
				} else {
					alert("Boxes: " + parseInt(boxes+1));
				}
				//alert("WO --> " + array_WO[0]);
				$('#codes').val('');

			}
			return false;
		});
	});
</script>
<body>
	<form id="form">
		<label for="codes">Codes</label><input type="text" id="codes" name="codes" style="width:15%"><br><br>
	</form>
</body>
</html>
