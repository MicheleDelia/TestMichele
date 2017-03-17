<html>
	<head>
		<title>Form Dimostrativo Richiesta</title>
	</head>
	
<body>
	<div id="FormOutput">
		<form method="post" action="/richiesta.php" id="FormOut">
			<p>Inserisci i filtri di ricerca:<p/><br><br>
			Luogo di nascita&nbsp;<input type="text" name="L_Nascita"><br>
			Sesso:<br>
			M&nbsp;<input type="radio" name="Sesso" value="M"/>
			F&nbsp;<input type="radio" name="Sesso" value="F"/><br>
			<input type="submit" value="Invia">
		</form>
	</div>
</body>
</html>