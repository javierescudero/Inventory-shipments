<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inventory Shipments</title>
	<script src="jquery-1.12.4.min.js"></script>
	<script language="javascript">
		$(document).ready(function() {
		     $("#saveData").click(function(event) {
			     $("#datos_a_enviar").val( $("<div>").append( $("#table").eq(0).clone()).html());
			     $("#form").submit();
			});
		});
	</script>
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
						boxes++;
					}
					$('#codes').val('');
					for (var i = 0; i < array_pN.length; i++) {
						//$("#body").remove();
						$("#part_number").append('<tr><td>'+array_pN[i]+'</td><td>');
						$("#quantity").append('<tr><td>'+array_Q[i]+'</td></tr>');
						$("#wo").append('<tr><td>'+array_WO[i]+'</td></tr>');
					};
				}

			return false;
		});

		$("#saveData").click(function (e) {
		    window.open('data:application/vnd.ms-excel,' + $('#divData').html());
		    e.preventDefault();
		});

	});
</script>
<body>
	<form id="form" method="post" action="export_excel.php">
		<label for="codes">Codes</label><input type="text" id="codes" name="codes" style="width:10%"><br><br>
		<input type="button" value="Save and Export" id="saveData"><br><br>
		<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
		
		<div id="divData">
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
		</div>

	</form>
</body>
</html>
