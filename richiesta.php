<?php
		/*$Nome=		($_POST["Nome"]);
		$Cognome=	($_POST["Cognome"]);
		$Data=		($_POST["Data"]);*/
		$L_Nascita=	($_POST["L_Nascita"]);
		$Sesso=		($_POST['Sesso']);

		$servername = 	"localhost";
		$username=		"root";
		$password=		"password";
		$dbname = 		"db_form";

		$connessione = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if ($connessione->connect_error) 
		{
			die("Connessione fallita: " . $connessione->connect_error);
		}

		$sql =	"SELECT * FROM info_form 
				WHERE Luogo_di_nascita='$L_Nascita' AND Sesso='$Sesso'";
		

		if ($result=$connessione->query($sql)) {
			// output data of each row
			echo "<table>";
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr>
						<td>".$row["Nome"]."</td><td>".$StripCognome=stripslashes($row["Cognome"])."</td><td>".$row["Data_di_nascita"]."</td><td>".$row["Luogo_di_nascita"]."</td><td>".$row["Sesso"]."</td>
					<tr/>";
			}
			echo "</table>";
		} else {
			echo "0 risultati";
		}

		if ($connessione->query($sql) == TRUE) 
		{
			echo "Query eseguita correttamente";
		} 
		else 
		{
			echo "Errore: " . $sql . "<br>" . $connessione->error;
		}
				
		$connessione->close();
?>

<html>
 <head>
  <link href="css_Style.css" rel="stylesheet" type="text/css">
 </head>
</html>