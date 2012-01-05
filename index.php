<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<title>Convertidor de Colores</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="shortcut icon"  type="image/png" href="about:blank" />
</head>
<body>

<h1><a href="#">Convertidor de colores</a></h1>
<br /><br />
<form>
	<label>
		Escribe un color CSS para convertirlo <span>puede ser: #hex, hsl(), rgba() u otro</span>:
		<input type="text" name="color" id="color" value="slategray" autofocus />
	</label>
	<output for="color"><input id="rgb" readonly /></output>
	<output for="color"><input id="hex" readonly /></output>
	<output for="color"><input id="hsl" readonly /></output>	
</form>

<script src="js/color.js"></script>

</body>
</html>