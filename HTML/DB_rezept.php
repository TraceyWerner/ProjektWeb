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

	// Von Char einheit die ID bekommen
	//$einh= "SELECT ID FROM einheiten WHERE name = '$einheiten'"; 

	//if($result = $mysqli->query($einh)) {
	//	while($row = $result->fetch_array()) {
	//		$_SESSION["einheitenID"] = $row["ID"];
	//	}
	//}

	// Checken, ob es Zutat schon gibt
	$var = "SELECT name FROM zutaten WHERE name = '$name'";

	if ($result = $mysqli->query($var)) {
		while($row = $result->fetch_array()) {
			$_SESSION["zutatID"] = $row["zutatenID"];
			return true;
		}
	}

	$zutaten = "INSERT INTO zutaten (name, einheiten_ID) VALUES ('".$mysqli->real_escape_string($name)."', '$einheit')";

	// Wenn Zutat neu, hinzufügen der neuen Zutat !
 	if ($result = $mysqli->query($zutaten)) {
		 $_SESSION["zutatID"]= $row["zutatenID"];
		 return true;
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




//main

if($_REQUEST["NameZ"] && $_REQUEST["Einheit"] && $_REQUEST["Menge"]) { // Knopf machen !
	$_SESSION["menge"] = $_REQUEST["Menge"];
	$auswahl = $_REQUEST["Einheit"];
	$Z = array();

// Benötigten Zutaten einfügen in array
	if ($auswahl=="gr"){
		if(zutaten($_REQUEST["NameZ"], 1)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "ml") {
		if(zutaten($_REQUEST["NameZ"], 2)) {
			$Z[] = $_SESSION["zutatID"];
			echo $_SESSION["menge"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "L") {
		if(zutaten($_REQUEST["NameZ"], 4)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "Priese") {
		if(zutaten($_REQUEST["NameZ"], 5)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "Stück") {
		if(zutaten($_REQUEST["NameZ"], 3)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "EL") {
		if(zutaten($_REQUEST["NameZ"], 7)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
	if ($auswahl == "TL") {
		if(zutaten($_REQUEST["NameZ"], 6)) {
			$Z[] = $_SESSION["zutatID"];
			include("rezeptErstellenWeiter.php");
		}
	}
}
else {
// rezept erstellen mit Arrayzutaten
if($_REQUEST["Rname"] && $_REQUEST["Kategorie"]) {
	$Kate = $_REQUEST["Kategorie"];
	if($Kate == "Backen&Süßspeisen") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 4)) {
				if(rezeptHatZutat($_SESSION["RezeptID"], $_SESSION["zutatID"], $_SESSION["menge"])) {
					echo $_SESSION["RezeptID"]," ", $_SESSION["zutatID"], " ", $_SESSION["menge"];
					echo "JAAAAA";
				}
				else
					echo "DOOF";
					//include("startseite_pers.php");
			}
		}
	}
	if($Kate == "Hauptspeise") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 6)) {
				//if(rezeptHatZutat($_SESSION["RezeptID"], $_SESSION["zutatID"], $_SESSION["menge"]))
					include("startseite_pers.php");
				//else 
				//	echo $_SESSION["RezeptID"]," ", $_SESSION["zutatID"]," bla", $_SESSION["menge"];
			}
		}
	}
	if($Kate == "Beilagen") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 8))
				include("startseite_pers.php");
		}
	}
	if($Kate == "Getränke") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 3))
				include("startseite_pers.php");
		}
	}
	if($Kate == "Laktosefrei") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 2))
				include("startseite_pers.php");
		}
	}
	if($Kate == "Nachtisch") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 7))
				include("startseite_pers.php");
		}
	}
	if($Kate == "Vegan") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 5))
				include("startseite_pers.php");
		}
	}
	if($Kate == "Vegetarisch") {
		$schwer = $_REQUEST["schwer"];
		if(rezeptErstellen(0, $_REQUEST["Rname"],$_SESSION["userName"],$_REQUEST["Zubereitung"],$_REQUEST["Dauer"], $schwer)) {
			if(kategorie($_SESSION["RezeptID"], 1))
				include("startseite_pers.php");
		}
	}
}
}















?>
