<?php
	$Nome=		($_POST["Nome"]);
	$Cognome=addslashes($_POST["Cognome"]);
	$Data=		($_POST["Data"]);
	$L_Nascita=	($_POST["L_Nascita"]);
	$Sesso=		($_POST['Sesso']);
	
	$servername = 	"localhost";
	$username=		"root";
	$password=		"password";
	$dbname = 		"db_form";
	
	$connessione = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection 127.0.0.1
	if ($connessione->connect_error) 
	{
		die("Connessione fallita: " . $connessione->connect_error);
	}
	
	$sql =	"INSERT INTO info_form (Nome, Cognome, Data_di_nascita, Luogo_di_nascita, Sesso)
			VALUES ('$Nome', '$Cognome', '$Data`', '$L_Nascita', '$Sesso')";
		   
	if ($connessione->query($sql) == TRUE) 
	{
		echo "Le informazioni sono state inserite correttamente";
	} 
	else 
	{
		echo "Errore: " . $sql . "<br>" . $connessione->error;
	}

	$connessione->close();
?>

<html>
	<head>
		<title>Form Dimostrativo</title>
	</head>
	
<body>
	<div>
		<strong>Sarai reindirizzato al form tra 10 secondi.<strong/>
		<meta http-equiv="refresh" content="5;URL=/FormDimostrativo.php">
	</div>
</body>
</html>