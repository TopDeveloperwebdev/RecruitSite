<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FormWizard_v5</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<div class="image-holder">
			<img src="images/logo.png" alt="">
		</div>
		<?php
		include("config.php");
		if ($idioma == "Portugues")
			include("./components/form1_pt.php");
		if ($idioma == "Ingles")
			include("./components/form1_en.php");
		if ($idioma == "Espanhol")
			include("form1_sp.php");
		?>
	
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- JQUERY STEP -->
	<script src="js/jquery.steps.js"></script>

	<script src="js/main.js"></script>
	<!-- Template created and distributed by Colorlib -->
</body>

</html>