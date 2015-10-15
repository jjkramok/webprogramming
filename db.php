<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Voorbeelden college 6b Databases met PDO</title>
    </head>
    
    <style>
        .err { color: red; }
        body { font-family: sans-serif }
    </style>
        
    
    <body>
		<form method="get" action="">
			Afdelingnr: <input type="name" value="30" name="afdnr">
			<input type="submit">
		</form>
		
		<?php
		$afdnr = "30";
		if (isset($_GET["afdnr"])) // is er een afdeling ingevuld?
		{
			$afdnr = $_GET["afdnr"];
		}
		
        try
        {
            // 1. Verbinding maken
            $db = "mysql:host=localhost;dbname=cursus;port=3307";
            $user = "root";
            $pass = "usbw";
            $pdo = new PDO($db, $user, $pass);

            print("<h3>Namen van alle medewerkers</h3>");
            
            // 2. Query maken en uitvoeren
            $stmt = $pdo->prepare("SELECT * FROM medewerker");
            $stmt->execute();

            // 3. Resultaten uitlezen
            while ($row = $stmt->fetch())
            {
                $naam = $row["naam"]; // haal de waarde uit de kolom 'naam'
                print($naam . "<br>");
            }

            print("<h3>Naam en functie van medewerkers</h3>");
            
            // We voeren dezelfde query nog een keer uit, en halen nu meer gegevens op
            $stmt->execute();

            print("<ul>"); 
            while ($row = $stmt->fetch())
            {
                $naam = $row["naam"]; // haal de waarde uit de kolom 'naam'
                $functie = $row["functie"]; // haal de waarde uit de kolom 'functie'
                print("<li>" . $naam . ", " . $functie . "</li>");
            }
            print("</ul>");

            print("<h3>Medewerkers van afdeling ". $afdnr . "</h3>");
            
            // prepared statement
            $stmt = $pdo->prepare("SELECT * FROM medewerker WHERE afd=?");
            // koppel het vraagteken aan de variabele met het afdelingsnummer
            $stmt->execute(array($afdnr));

            while ($row = $stmt->fetch())
            {
                $naam = $row["naam"];
                print($naam . "<br>");
            }

            // INSERT-Query
            // Omdat er geen variabelen in staan, zal deze actie maar één keer worden uitgevoerd
            $sql = "INSERT INTO cursus (code, omschrijving, type, lengte) "
                    . "VALUES ('WEB','Webprogrammeren','ALG',3)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
            // hoeveel rijen zijn er toegevoegd?
            $rows = $stmt->rowCount();
            print("<p>" . $rows . " record(s) toegevoegd</p>");

            // 4. Verbinding opruimen
            $pdo = NULL;
        }
        catch (PDOException $err)
        {
            print("<p class='err'>Er is een fout opgetreden: " . $err->getMessage() . "</p>");
        }
       
		?>
    </body>
</html>
