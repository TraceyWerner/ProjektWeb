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
				<th>Willkommen, "USER123" </th> <!-- immer aktuellen User  -->
			</tr>
		</table>

	</header>
		
	<nav>
		<h2>Persönliche Seite</h2> 
		<ul> 
			<li><a href="PWaendern.php">Passwort ändern</a></li> <!-- Link aktualisieren  -->
			<li><a href="Rezepterstellen.php">Rezepte erstellen</a></li>
			<li><a href="MeineRezepte.php"><strong>Meine Rezepte</strong></a></li>
			<li><a href="Favoriten.php">Favoriten</a></li>
			<li><a href="">Logout</a></li>
		</ul>
	</nav>

	<main>
		<article>
			<h3>Meine Rezepte</h3> 
      	
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
			<tr>
				<td>
					<img src="photo_2017-09-22_15-09-19.jpg" width="150" title="Test" alt="keinBildgefunden"><br>
				</td>
				<td class="titel"> <a href="Detail.php">Cake Pops</a>  </td>
				<td> leicht </td>
				<td> 2 </td>	
			</tr>

			<tr>
				<td>
					<img src="photo_2017-09-22_15-09-19.jpg" width="150" title="Test" alt="keinBildgefunden"><br>
				</td>
				<td class="titel"> <a href="Detail.php">Rezept2</a></td>
				<td> schwer </td>
				<td> 1/2 </td>	
			</tr>
		</table>

		</article>
	</main>
</html>