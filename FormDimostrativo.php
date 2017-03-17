<html>
	<head>
		<title>Form Dimostrativo</title>
	</head>
	
<body>
	<div id="FormInput">
		<form method="post" action="/invio_db.php" id="form">
			Nome&nbsp;<input type="text" name="Nome"/>
			<br><br>
			Cognome&nbsp;<input type="text" name="Cognome"/>
			<br><br>
			Data di nascita&nbsp;<input type="date" name="Data"><br><br>
			Luogo di nascita&nbsp;<input type="text" name="L_Nascita"><br>
			Sesso:<br>
			M&nbsp;<input type="radio" name="Sesso" value="M"/>
			F&nbsp;<input type="radio" name="Sesso" value="F"/><br>
			<input type="submit" value="Invia">
		</form>
	</div>
</body>
</html>