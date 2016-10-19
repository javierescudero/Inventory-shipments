$(document).ready(function(){

		$('#scan').focus();

		var array_pallet = new Array(), array_Q = new Array(), array_pN = new Array(), array_WO = new Array();
		var x = 0, pN, pall = array_pallet.length;
		var boxes = 1, boxesNP = 1;
		var partNumb = 0, piecesWO = 0, piecesPN = 0, piecesPNT = 0;
		var bQ = false, bP = false, bW = false;
		

		$('#form').submit(function() {
			var c = $('#scan').val();
				if (c.charAt(0) == 'T' || c.charAt(0) == 't') {
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
				} if (c.charAt(0) == 'Q' || c.charAt(0) == 'q') {
					var Q = c.substring(1);
					array_Q.push(Q);
					$('#scan').val('');
					bQ = true;
				}
				else if (c.charAt(0) == 'P' || c.charAt(0) == 'p') {
					pN = c.substring(1);
					pN = pN.replace(/'/g,' ');
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

				} else if (c.charAt(0) == 'W' || c.charAt(0) == 'w') {
					var WO = c.substring(1);
					WO = WO.replace(/0/,'');
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
							$('#formatWO').append('<tr><td class="ui-responsive ui-shadow" id="wo_'+posWO+'">'+array_WO[x]+'</td><td class="ui-responsive ui-shadow" id="piezasWO_'+posWO+'">'+parseInt(piecesWO)+'</td></tr>');
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
							$('#format').append('<tr><td class="ui-responsive ui-shadow" id="pallet_'+pos+'">'+array_pallet[pall]+'</td><td class="ui-responsive ui-shadow" id="parte_'+pos+'">'+array_pN[x]+'</td><td class="ui-responsive ui-shadow" id="boxes_'+pos+'">'+boxesNP+'</td><td class="ui-responsive ui-shadow" id="cantidad_'+pos+'">'+parseInt(array_Q[x])+'</td><td class="ui-responsive ui-shadow" id="piezas_'+pos+'">'+parseInt(piecesPN)+'</td></tr>');
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

		$('#linkSend').click(function(){
			var email = document.getElementById('emails').value;
			var rows_dataWO = document.getElementById("dataWO").rows.length;
			var rows_total = document.getElementById("total").rows.length;
			var rows_dataFormat = document.getElementById("dataFormat").rows.length;
			
			var href = "php/sendmail.php?email="+email+"&";
			var t1,t2,t3,pz,cwo,cp,cnp,cc,ccxc,cct;
			var tab1 = "tabla1=";
			var tab2 = "&tabla2=";
			var tab3 = "&tabla3=";
			if (email == 'default') {
				alert('Elige un correo...');
				return false;
			} if (array_pallet[0] == null || array_Q[0] == null || array_pN[0] == null || array_WO[0] == null) {
				alert('Datos incompletos..');
				array_pallet[0].pop();
				array_Q[0].pop();
				array_pN[0].pop();
				array_WO[0].pop();
				return false;
			} else {
				
				//Tabla 1
				href = href.concat(tab1);
				for (var i = 1; i < rows_dataWO; i++) {
					for (var j = 0; j < 2; j++) {
						if (j==0) {
							cwo = document.getElementById("dataWO").rows[i].cells[j].innerHTML;
						} else {
							pz = document.getElementById("dataWO").rows[i].cells[j].innerHTML;
						}
					};
					t1 = "<tr><td>"+cwo+"</td><td>"+pz+"</td></tr>";
					href = href.concat(t1);
				}

				//Tabla 2
				href = href.concat(tab2);
				var tPall = document.getElementById('totalPallets').innerHTML;
				var tBoxes = document.getElementById('totalBoxes').innerHTML;
				var tPieces = document.getElementById('totalPieces').innerHTML;
				t2 = "<tr><td>"+tPall+"</td><td>"+tBoxes+"</td><td>"+tPieces+"</td></tr>";
				href = href.concat(t2);

				//Tabla 3
				href = href.concat(tab3);
				for (var i = 1; i < rows_dataFormat; i++) {
					for (var j = 0; j < 5; j++) {
						if (j==0) {
							cp = document.getElementById("dataFormat").rows[i].cells[j].innerHTML;
						}
						if (j==1) {
							cnp = document.getElementById("dataFormat").rows[i].cells[j].innerHTML;
						}
						if (j==2) {
							cc = document.getElementById("dataFormat").rows[i].cells[j].innerHTML;
						}
						if (j==3) {
							ccxc = document.getElementById("dataFormat").rows[i].cells[j].innerHTML;
						}
						if (j==4) {
							cct = document.getElementById("dataFormat").rows[i].cells[j].innerHTML;
						}
						t3 = "<tr><td>"+cp+"</td><td>"+cnp+"</td><td>"+cc+"</td><td>"+ccxc+"</td><td>"+cct+"</td></tr>";
					};
					href = href.concat(t3);
				}

				document.getElementById('linkSend').href = href;
			}
		});
	});