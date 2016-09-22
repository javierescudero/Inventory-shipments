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
		//var t = c.trim();
		var str = '';
		var array = [];
		$('#form').submit(function() {
			var c = $('#codes').val().concat(',');
			var t = c.trim();
			
			if (t.charAt(0) == 'P') {
				str = str + t;
				alert("NP = " + t);
				$('#codes').val('');
			} else if (t.charAt(0) == 'Q') {
				str = str + t;
				alert("Q = " + t);
				$('#codes').val('');
			} else if (t.charAt(0) == 'W') {
				str = str + t;
				alert("WO = " + t);
				$('#codes').val('');

				//array[0] = str;
				alert("strSplit = " + str.split(','));
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
