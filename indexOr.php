<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inventory Shipments</title>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){

		$('#codes').focus();

		var array_P = new Array();
		var array_pN = new Array();
		var array_Q = new Array();
		var array_WO = new Array();

		var boxes = 1, pallets = 1;

		$('#form').submit(function() {
			var c = $('#codes').val();

				if (c.charAt(0) == 'T') {
					var P = c.substring(1);
					array_P.push(P);
					$('#codes').val('');
					alert("Pallet: " + parseInt(pallets));
					pallets++;

				} else if (c.charAt(0) == 'P') {
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
						boxes++;
					}
					$('#codes').val('');
					for (var i = 0; i < array_pN.length; i++) {
						//$("#body").remove();
						$("#body").append('<tr><td>'+array_P[i]+'</td>'+'<td>'+array_pN[i]+'</td>'+'<td>'+array_Q[i]+'</td>'+'<td>'+array_WO[i]+'</td></tr>');
						/*$("#part_number").append('<tr><td>'+array_pN[i]+'</td></tr>');
						$("#quantity").append('<tr><td>'+array_Q[i]+'</td></tr>');
						$("#wo").append('<tr><td>'+array_WO[i]+'</td></tr>');*/
					};
				}

			return false;
		});

		$('#saveData').click(function(){
			$('#data').tableExport({type:'excel',escape:'false'});
		});

	});
</script>
<body>
	<form id="form" >
		<label for="codes">Codes</label><input type="text" id="codes" name="codes" style="width:10%"><br><br>
		<input type="button" value="Save and Export" id="saveData"><br><br>
	</form>
		<div id="divData">
			<table id="data" cellpadding="1" cellspacing="1" border="1">
				<thead>
					<tr>
						<th>Pallet</th>
						<th>Part Number</th>
						<th>Quantity</th>
						<th>WO</th>
					</tr>
				</thead>
				<tbody id="body">
					<!--<tr>
						<td id="part_number"></td>
						<td id="quantity"></td>
						<td id="wo"></td>
					</tr>-->
				</tbody>
			</table>
		</div>
</table>
</body>
</html>
