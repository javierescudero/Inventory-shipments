<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inventory Shipments</title>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<!--<script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>-->

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script type="text/javascript">
	$(document).ready(function(){

		$('#scan').focus();

		var array_pallet = new Array(), array_Q = new Array(), array_pN = new Array(), array_WO = new Array();
		var x = 0, pN, pall = array_pallet.length;
		var boxes = 1, boxesNP = 1;
		var partNumb = 0, piecesWO = 0, piecesPN = 0, piecesPNT = 0;
		var bQ = false, bP = false, bW = false;

		$('#form').submit(function() {
			var c = $('#scan').val();
				if (c.charAt(0) == 'T') {
					var pallet = c.substring(1);
					$('#scan').val('');
					if (array_pallet[0] == null) {
						array_pallet.push(pallet);
					} else {
						var index = array_pallet.indexOf(pallet);
						if (index > -1) {
							alert('This pallet number already exists\nTry with other pallet number');
							return false;
						} else {
							array_pallet.push(pallet);
							pall++;
						}
					}
				} if (c.charAt(0) == 'Q') {
					var Q = c.substring(1);
					Q.replace(/0/,'');
					array_Q.push(Q);
					$('#scan').val('');
					bQ = true;
				}
				else if (c.charAt(0) == 'P') {
					pN = c.substring(1);
					$('#scan').val('');
					if (bQ == true) {
						bP = true;
						if (array_pN[0] == null) {
							array_pN.push(pN);
							piecesPN = array_Q[0];
							piecesPNT = array_Q[0];
						} else {
							array_pN.push(pN);
							piecesPN = 0;
							piecesPNT = 0;
							boxesNP = 0;
							for (var i = 0; i < array_pN.length; i++) {
								if (pN == array_pN[i]) {
									piecesPN = parseInt(piecesPN) + parseInt(array_Q[i]);
									boxesNP++;
								} else {
								}
								piecesPNT = parseInt(piecesPNT) + parseInt(array_Q[i]);
							};
						}
					} else {
						alert('WARNING:\nDebes escanear primero la cantidad.');
					}

				} else if (c.charAt(0) == 'W') {
					var WO = c.substring(1);
					$('#scan').val('');
					if (bP == true) {
						bQ = false;
						bP = false;
						if (array_WO[0] == null) {
							array_WO.push(WO);
							piecesWO = array_Q[0];
						} else {
							array_WO.push(WO);
							piecesWO = 0;
							for (var i = 0; i < array_WO.length; i++) {
								if (WO == array_WO[i]) {
									piecesWO = parseInt(piecesWO) + parseInt(array_Q[i]);
								} else {
								}
							};
						}
					} else {
						alert('WARNING:\nDebes escanear primero el numero de parte.');
						return false;
					}
					
					function buscarNP(noParte){
						for (var i = 0; i < array_pN.length; i++) {
							if (noParte == array_pN[i]) {
								return i;
							} else{
							}
						};
					}

					function contarNP(noParte) {
						var cont = 0;
						for (var i = 0; i < array_pN.length; i++) {
							if (noParte == array_pN[i]) {
								cont++;
							} else{
							}
						};
						return cont;
					}

					function buscarWO(wo){
						for (var i = 0; i < array_WO.length; i++) {
							if (wo == array_WO[i]) {
								return i;
							} else{
							}
						};
					}

					function contarWO(wo) {
						var cont = 0;
						for (var i = 0; i < array_WO.length; i++) {
							if (wo == array_WO[i]) {
								cont++;
							} else{
							}
						};
						return cont;
					}

					var pos = buscarNP(pN), cont = contarNP(pN);
					var posWO = buscarWO(WO), contWO = contarWO(WO);

					//Piezas por WO
					for (var i = 0; i < array_WO.length; i++) {
						if (contWO == 1) {
							$('#formatWO').append('<tr><td id="wo_'+posWO+'">'+array_WO[x]+'</td><td id="piezasWO_'+posWO+'">'+parseInt(piecesWO)+'</td></tr>');
							contWO++;
						} else {
							if (WO == array_WO[i]) {
								document.getElementById('wo_'+posWO+'').innerHTML = array_WO[i];
								document.getElementById('piezasWO_'+posWO+'').innerHTML = parseInt(piecesWO);
							} else {
							}
						}
					};

					//Contidad por numero de parte
					for (var i = 0; i < array_pN.length; i++) {
						if (cont == 1) {
							$('#format').append('<tr><td id="pallet_'+pos+'">'+array_pallet[pall]+'</td><td id="parte_'+pos+'">'+array_pN[x]+'</td><td id="boxes_'+pos+'">'+boxesNP+'</td><td id="cantidad_'+pos+'">'+parseInt(array_Q[x])+'</td><td id="piezas_'+pos+'">'+parseInt(piecesPN)+'</td></tr>');
							cont++;
						} else {
							if (pN == array_pN[i]) {
								document.getElementById('pallet_'+pos+'').innerHTML = array_pallet[pall];
								document.getElementById('parte_'+pos+'').innerHTML = array_pN[x];
								document.getElementById('boxes_'+pos+'').innerHTML = boxesNP;
								document.getElementById('cantidad_'+pos+'').innerHTML = parseInt(array_Q[x]);
								document.getElementById('piezas_'+pos+'').innerHTML = parseInt(piecesPN);
							} else {}
						}
					};

					document.getElementById('totalBoxes').innerHTML = boxes;
					document.getElementById('totalPallets').innerHTML = parseInt(pall+1);
					document.getElementById('totalPieces').innerHTML = parseInt(piecesPNT);

					boxes++;
					x++;
				}
			return false;
		});

		$('#saveData').click(function(){
			
			//$('table').tableExport({type:'excel',escape:'false'});
		});
		$('#delete').click(function(){
			/*$('tbody').remove();
			$('#scan').val('');*/
		});

		/*function toJSONLocal (date) {
		    var local = new Date(date);
		    local.setMinutes(date.getMinutes() - date.getTimezoneOffset());
		    return local.toJSON().slice(0, 10);
		}

		var today = new Date().toISOString().slice(0, 10);
		document.getElementById('date').innerHTML = today;*/
	});
</script>
<body>
	<div class="form">
		<form id="form">
			<h1>REPORTE DE EMBARQUES</h1>
			<!--<div id="divDate">
				<label id="date"></label>
			</div><br><br>-->
			<select id="emails" name="emails">
			  <option value="daniel">daniel.hernandez@emerson.com</option>
			  <option value="luis">luis.aguilar@emerson.com</option>
			  <option value="nerit">nerit.paz@emerson.com</option>
			</select><br><br>
			<input type="text" id="scan" name="scan"><br><br>
			<input type="button" value="Enviar a correo" id="saveData"><br><br><br><!--<input type="button" value="Borrar Informacion" id="delete"><br><br><hr><br>-->
		</form>
	</div>
	<div class="divTables">

		<div class="divDataWO">
			<label><b>Piezas por WO</b></label>
			<table id="dataWO">
				<thead>
					<tr>
						<th><b>WO</b></th>
						<th><b>Piezas</b></th>
					</tr>
				</thead>
				<tbody id="formatWO">
				</tbody>
			</table>
		</div><br>

		<div class="divTotal">
			<label><b>Piezas Totales</b></label>
			<table id="total">
				<thead>
					<tr>
						<th><b>Pallets</b></th>
						<th><b>Cajas</b></th>
						<th><b>Piezas</b></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="totalPallets"></td>
						<td id="totalBoxes"></td>
						<td id="totalPieces"></td>
					</tr>
				</tbody>
			</table>
		</div><br>

		<div class="divData">
			<label><b>Piezas por No. Parte</b></label>
			<table id="dataFormat">
				<thead>
					<tr>
						<th><b>Pallet</b></th>
						<th><b>No. Parte</b></th>
						<th><b>Cajas</b></th>
						<th><b>Cantidad por Caja</b></th>
						<th><b>Cantidad Total</b></th>
					</tr>
				</thead>
				<tbody id="format">
				</tbody>
			</table>
		</div>
	</div>

	
</body>
</html>
