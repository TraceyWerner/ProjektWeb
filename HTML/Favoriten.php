<!DOCTYPE html>
<html>
	<head>
		<title>Backfee</title>
		<meta name="author" content="Miriam Lang">
		<meta name="coauthor" content="">
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
			text-decoration:none
			margin-left: 15em;
			margin-top: 7.5em;
			}
		}
		</style>
	</head>

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
				<th>Willkommen, <?php echo $_SESSION['name']."!" ?> </th> <!-- immer aktuellen User  -->
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
			<h3>Favoriten</h3> 
      	
		<table>
			<colgroup>
				<col width="180">
				<col width="200">
				<col width="200">
				<col width="200">
			</colgroup>
			<tr>
				<td> </td>
				<td> <strong> Name: </strong> </td>
				<td> <strong>Schwierigkeitsgrad:</strong> </td>
				<td> <strong> Zeit in Stunden: </strong> </td>
			</tr>
			
			<?php 

			for($i = 0; $i < count($_SESSION["daten"]); $i++) {
				echo "<tr>
				<td>  ".$_SESSION["daten"][$i][0]."  </td>
				<td>  ".$_SESSION["daten"][$i][1]."  </td>
				<td>  ".$_SESSION["daten"][$i][6]." </td>
				<td>  ".$_SESSION["daten"][$i][5]." </td>
				</tr>";
			}
			?>
			
		</table>

		</article>
	</main>
</html>
