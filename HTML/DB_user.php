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

// **************************
// Einloggen check
// **************************
function einloggen($name,$passwort) {
	global $mysqli;
	$log = false;
	$query =  "SELECT name FROM login WHERE name = '$name' AND passwort = '$passwort'";

	// SELECT-Anfrage schicken
	if ($result = $mysqli->query($query)) {

		// Schleife über Ergebnis, als Array abholen
		// Spaltenname ist Index
		while($row = $result->fetch_array()) {
			$log = true;
			$_SESSION["name"] = $row["name"];
			return true;
		}
		// Ergebniszwischenspeicher freigeben
		$result->close();
	}
	return false;
}// einloggen


// **************************
// Passwort Wiederherstellung
// **************************
function antwortCheck($name,$antwort) {
	global $mysqli;
	// Vergessenes Passwort wiederherstellen vom User X mit der Antwort Z 
	$query = "SELECT login.passwort FROM login WHERE login.antwort = '$antwort' AND login.name = '$name'";
	printf("<b>Jetzt wird folgendes ausgeführt:</b> <i>%s</i><br>", $query);

   if ($result = $mysqli->query($query)) {

 		while($row = $result->fetch_array()) {
  			printf("Das Passwort von User $name ist : %s %s <br/>",@$row["name"],$row["passwort"], @$row["frage"],@$row["antwort"]);
  		}
	}
} // antwortCheck

function passwortWiederherstellen($Name,$Antwort) {
	global $mysqli;
	// Frage des Users X einblenden bei Passwort Wiederherstellung
	$name = $Name;
	$antwort = $Antwort;
	$query = "SELECT frage FROM login WHERE name = '$name'";
	printf("<b>Jetzt wird folgendes ausgeführt:</b> <i>%s</i><br>", $query);

	// SELECT anfgare schicken
	if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_array()) {
  			printf("Die Frage vom User $name ist : %s %s <br/>",@$row["name"],@$row["passwort"], $row["frage"],@$row["antwort"]);
 		}
	}
	antwortCheck($name,$antwort);
	
}//passwortWiederherstellen


// **************************
// Passwort des Users ändern
// **************************

function passwortAendernLog($name, $passwortNeu, $passwortA, $passwortB) {
	global $mysqli;
	global $log;

	$query = "UPDATE login Set passwort = '$passwortNeu' WHERE name = '".$mysqli->real_escape_string($name)."' AND passwort = '".$mysqli->real_escape_string($passwortA)."'";

	if($passwortNeu == $passwortB) {
		if ($result = $mysqli->query($query)) {
			// Wenn eine Menge verfügbar, dann hat es geklappt.
			return true;
		}
	}
	else
		return false;
}//passwortAendernLog


function passwortAendern($name, $antwort, $passwortNeu, $passwort) {
	global $mysqli;
	$query = "UPDATE login SET passwort = '$passwortNeu' WHERE name = '".$mysqli->real_escape_string($name)."' AND antwort = '".$mysqli->real_escape_string($antwort)."'";

	if($passwortNeu == $passwort) {

		if($result = $mysqli->query($query)) {
			echo "Ihr Passwort wurde erfolgreich geändert";
		}
		else
			echo "Bitte prüfe noch einmal deine Eingaben";
	}
	else 
		echo "Die passwörter müssen übereinstimmen!";

} // passwortAendern


// **********************************
// Neuen User hinzufügen/registrieren
// **********************************

function registrieren($name,$passwort,$frage,$antwort) {
	global $mysqli;
	// Checken ob Person X schon existiert in der DB
	$var = "SELECT name FROM login WHERE name = '$name'";
	$nutzerexistiert = false;

	if ($result = $mysqli->query($var)) {
		while($row = $result->fetch_array()) {
			$nutzerexistiert = true;
		}
	}

 	// Neuen User X registrieren
 	$query = "INSERT INTO login (name, passwort, frage, antwort) VALUES ('".$mysqli->real_escape_string($name)."', '".$mysqli->real_escape_string($passwort)."', '".$mysqli->real_escape_string($frage)."', '".$mysqli->real_escape_string($antwort)."')";

 	if (!$nutzerexistiert) {
 		if ($result = $mysqli->query($query)) {
			echo "Sie haben sich erfolgreich registriert<br>"; 
		}
	}
	else
		echo "Ihren Account gibt es schon! ".$mysqli->error."<br>";
 
}// registrieren


// ***********************
// Favoritenliste Aufrufen
// ***********************

function favoriten($user) {
	global $mysqli;

	$query =   $mysqli->query("SELECT rezepte.* FROM rezepte 
  			JOIN favoriten ON rezepte.rezeptID = favoriten.rezepte_rezeptID 
  			JOIN login ON login.name = favoriten.login_name
 			WHERE login.name = '$user'");

	$_SESSION["daten"] = $query->fetch_all();
}// favoriten


function meineRezepte($ich) {
	global $mysqli;
	$query =   $mysqli->query("SELECT rezepte.* FROM rezepte WHERE ersteller = '$ich'");
	if($query) {
		$_SESSION["meineDaten"] = $query->fetch_all();
		return true;
	}
	else
		return false;

	
}


// **************************
// Ausloggen check
// **************************

function logout($name) {
	global $mysqli;

	$_SESSION["userName"] = "";
	$_SESSION["name"] = "";
}





// MAIN

if($_REQUEST['unameE'] && $_REQUEST['pswE'] ) {
	if(einloggen($_REQUEST['unameE'],$_REQUEST['pswE'])) {
		$_SESSION['name'] = $_REQUEST['unameE'];
		include("startseite_pers.php");
	}
}
else {
	$frage = "Was ist deine Lieblingsfarbe?";
	if($_REQUEST['unameR'] && $_REQUEST['sifrageR'] && $_REQUEST['pswNR']) {
		registrieren($_REQUEST['unameR'], $_REQUEST['pswNR'],$frage, $_REQUEST['sifrageR']);
		$_SESSION['name'] = $_REQUEST['unameR'];
		include("startseite_pers.php");
	}
	else {
		if($_SESSION["userName"] && $_REQUEST['pswN'] && $_REQUEST['pswA'] && $_REQUEST['pswB']) {
			if(passwortAendernLog($_SESSION["userName"], $_REQUEST['pswN'], $_REQUEST['pswA'],$_REQUEST['pswB'])) {
				include("PWaendern_erfolg.php");
			}
			else 
				include("PWaendern_misserfolg.php");
		}
		else {
			if($_REQUEST['unameV'] && $_REQUEST['sifrageV'] && $_REQUEST['pswNV'] && $_REQUEST['pswBV']) {
				passwortAendern($_REQUEST['unameV'], $_REQUEST['sifrageV'], $_REQUEST['pswNV'], $_REQUEST['pswBV']);
				$_SESSION['name'] = $_REQUEST['unameV'];
				include("startseite_pers.php");
			}
			else {
				$knopf = $_REQUEST['Knopf'];
				if($knopf == "favoriten") {
					include("Favoriten.php");
				}
				if($knopf == "logout") {
					logout($_SESSION["userName"]);
					include("startseite.php");
				}
				if($knopf == "meineRezepte") {
					if(meineRezepte($_SESSION["name"])) {
						include("MeineRezepte.php");
					}
				}
			}
		}
	}
}


// Knopf value benutzen anstatt $Request !
/*

				else {
				*/

?>
