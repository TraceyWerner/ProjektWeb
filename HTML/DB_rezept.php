<?php
// DB-Objekt für MySQL, Server, Nutzername, Passwort, Datenbankname
$mysqli = mysqli_connect("141.64.86.18", "sose18_web_projekt_1", "projekt", "sose18_web_projekt_1");
// Datenbannk erstellen

// Verbindung prüfen
if (mysqli_connect_errno()) {
	printf("Connect failed: %s<br/>", mysqli_connect_error());
	exit();
}

session_start();

//if(!isset($_SESSION["zutatID"]))
//	$_SESSION["zutatID"] = array();


// *****************
// rezept erstellen
// *****************
function rezeptErstellen($bild,$name,$ersteller,$zubereitung,$Dauer,$schwierigkeit) {
	global $mysqli;

	$rezept = "INSERT INTO rezepte (bild, name, ersteller, zubereitung, Dauer, schwierigkeit) VALUES ('$bild', '".$mysqli->real_escape_string($name)."', '".$mysqli->real_escape_string($ersteller)."', '".$mysqli->real_escape_string($zubereitung)."','$Dauer', '".$mysqli->real_escape_string($schwierigkeit)."')";

	$ID = "SELECT rezeptID FROM rezepte WHERE name = '$name'";

	// neues Rezept in DB einfügen
	if ($result = $mysqli->query($rezept)) {
		if($ergebnis = $mysqli->query($ID)) {
			while($row = $ergebnis->fetch_array()) {
				$_SESSION["RezeptID"] = $row["rezeptID"];
				return true;
			}
		}
	}
	return false;
}// rezeptErstellen


// ****************
// zutaten einfügen
// ****************
function zutaten($name, $einheit) {
	global $mysqli;

	// Checken, ob es Zutat schon gibt
	$var = "SELECT zutatenID FROM zutaten WHERE name = '$name'";

	if ($result = $mysqli->query($var)) {
		while($row = $result->fetch_array()) {
			$_SESSION["zutatID"] = $row["zutatenID"];
			//$_SESSION["zutatID"][$row["zutatenID"]] = array();
			//$_SESSION["zutatID"][$row["zutatenID"]]["menge"] = $_SESSION["menge"];
			//$_SESSION["zutatID"][$row["zutatenID"]]["einheit"] = $_REQUEST["Einheit"];
			return true;
		}
	}

	$zutaten = "INSERT INTO zutaten (name, einheiten_ID) VALUES ('".$mysqli->real_escape_string($name)."', '$einheit')";

	// Wenn Zutat neu, hinzufügen der neuen Zutat !
 	if ($result = $mysqli->query($zutaten)) {
 		if($ergebnis = $mysqli->query($var)) {
			while($row = $ergebnis->fetch_array()) {
				$_SESSION["zutatID"]= $row["zutatenID"];
				return true;
			}
		}
	}
	return false;
} //zutaten



// ***************************
// Rezept mit Zutat verknüpfen
// ***************************
function rezeptHatZutat($rezeptID, $zutatID, $menge) {
	global $mysqli;
	$rezHatZut = "INSERT INTO rezepte_hat_zutaten(rezepte_rezeptID, zutaten_zutatenID, menge) VALUES ('$rezeptID', '$zutatID', '$menge')";

	// Zutat mit Rezept koppelen
	if($result = $mysqli->query($rezHatZut)) {
		return true;
	}
	return false;
}


// *********
// Kategorie
// *********
function kategorie($rezept,$kateg) {
	global $mysqli;

	$kat = "INSERT INTO rezepte_hat_kategorie(rezepte_rezeptID, kategorie_kategorieID) VALUES ('$rezept','$kateg')";

	if($result = $mysqli->query($kat)) {
		return true;
	}
	return false;
}
echo "Request: <pre>";
var_dump($_REQUEST);
echo "</pre>Session<pre>";
var_dump($_SESSION);
echo "</pre>";


//main
$knopf = $_REQUEST["knopf"];
if ($knopf == "zutat") {
	$_SESSION["menge"] = $_REQUEST["Menge"];
	$_SESSION['auswahl'] = $_REQUEST["Einheit"];
	$Z = array();
	// Benötigten Zutaten einfügen in array
	//if ($auswahl=="gr"){
		if(zutaten($_REQUEST["NameZ"], $_SESSION['auswahl'])) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
}
// rezept erstellen mit Arrayzutaten
if($knopf == "rezept") {
	$_SESSION["KategorieID"] = $_REQUEST["Kategorie"];
	$schwer = $_REQUEST["schwer"];
	if(rezeptErstellen($_REQUEST["bild"],$_REQUEST["Rname"],$_SESSION["name"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"],$schwer)) {
		if(kategorie($_SESSION["RezeptID"], $_SESSION["KategorieID"])) {
			if(rezeptHatZutat($_SESSION["RezeptID"], $_SESSION["zutatID"], $_SESSION["menge"])) {
				include("startseite_pers.php");
			}
			else {
				echo "DOOF";
				ECHO $_SESSION["RezeptID"]," ", $_SESSION["zutatID"]," ", $_SESSION["menge"];
			}
		}
	}
}



















?>
