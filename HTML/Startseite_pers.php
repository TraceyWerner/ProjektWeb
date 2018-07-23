<!DOCTYPE html>
<html>
	<head>
		<title>Backfee</title>
		<meta name="author" content="Miriam Lang">
		<meta name="coauthor" content="Tracey Werner">
		<meta name="description" content="Backfee persönliche Seite - Startseite">
		<meta name="keywords" content="Backfee, persönlich">
		<meta name="date" content="13.06.2018">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="icon" type="image/png" href="favicon-beuth.png">
		<style type="text/css">

		@media (min-width: 32em) {
		/* mehrspaltiges Layout für breitere Viewports */

		nav ul {
			padding: 0;
			}

		nav li {
			list-style: none;
			margin: 0;
			padding: 0.5em;
			}

		nav {
			float: left;
			width: 15em;
			margin-top: 6em;
			}
		main {
			margin-left: 15em;
			margin-top: 7.5em;
			}
		}
		</style>

	</head>

	<body>

	<header>
		<h1>Backfee</h1> <!-- wird durch Logo ersetzt  -->
		
		<!-- Toolbar  -->
		<table>
			<colgroup>
				<col width="180">
				<col width="200">
				<col width="200">
			</colgroup>
			<tr>
				<th>Rezepte</th>
				<th>Partyplaner</th>
				<th>Willkommen, <?php echo $_SESSION['name']."!" ?> </th>
			</tr>
		</table>

	</header>
		
	<nav>
		<h2>Persönliche Seite</h2> 
		<ul> 
			<form action ="PWaendern.php"><button type="submit" name="Knopf" value="PW">Passwort ändern</button> </form>
			<form action ="Rezepterstellen.php"> <button type="submit" name="Knopf" value="RezErstellen">Rezepte erstellen</button> </form>
			<form action ="DB_user.php"> <button type="submit" name="Knopf" value="meineRezepte">Meine Rezepte</button> </form>
			<form action ="DB_user.php"> <button type="submit" name="Knopf" value="favoriten">Favoriten</button> </form>
			<form action ="DB_user.php"> <button type="submit" name="Knopf" value="logout">Logout</button> </form>

		</ul>
	</nav>

	<main>
		<article>
			<h3>Willkommen bei Backfee</h3>
			<p> Sie haben sich eingeloggt nun stehen Ihnen alle Funktionen zur Verfügung. </p>
			<p> Viel Spaß! </p>
		</article>
	</main>
	</body>
</html>
