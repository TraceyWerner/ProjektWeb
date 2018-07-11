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
			margin-left: 15em;
			margin-top: 7.5em;
			}
		}

		ul {
			list-style-type: none;
			padding-left: 0;
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
			<li><a href="PWaendern.php">Passwort ändern</a></li>
                  <li><a href="Rezepterstellen.php"> <strong> Rezepte erstellen</strong></a></li>
                  <li><a href="MeineRezepte.html">Meine Rezepte</a></li>
                  <li><a href="Favoriten.html">Favoriten</a></li>
                  <li><a href="">Logout</a></li>
		</ul>
	</nav>

	<main>
		<article>
			<h3>Rezept erstellen</h3>
			
			<table>
				<colgroup>
					<col width="180">
					<col width="250">
				</colgroup>
				<tr>
					<td>
						<img src="photo_2017-09-22_15-09-19.jpg" width="150" title="Test" alt="keinBildgefunden"><br>
					</td>

					<td> 
						<label for="foto"></label>
      					<input type="text" placeholder="Ordner durchsuchen" name="foto" required> 
      				</td>
      			</tr>

      			<tr>
      				<td>
      					Name:
      				</td>

      				<td>
      					<label for="Name"></label>
      					<input type="text" placeholder="Name eingeben" name="name" required> 
      				</td>
      			</tr>

      			<tr>
      				<td>
      					Kategorie:
      				</td>

      				<td>
      					<ul>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Backen & Süßspeisen" id="check1">Backen & Süßspeisen</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Beilagen" id="check2">Beilagen</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Diabetiker" id="check3">Diabetiker</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Getränke" id="check4">Getränke</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Hauptspeise" id="check5">Hauptspeise</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Laktosefrei" id="check6">Laktosefrei</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Nachtisch" id="check7">Nachtisch</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Trennkost" id="check8">Trennkost</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Vegan" id="check9">Vegan</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Vegetarisch" id="check10">Vegetarisch</label>
      						</li>
      					</ul>
      				</td>
      			</tr>

      			<tr>
      				<td>
      					Zutaten:
      				</td>

      				<td>
      					<label for="Menge">Menge</label>
      					<input type="text" placeholder="Menge eingeben" name="Menge" required>
      					<p></p>
      				</td>

					<td width="150">
      					
      					<ul> Einheit
      						<li>
      							<label><input type="checkbox" name="Einheit" value="gr" id="checkE1">gr</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="L" id="checkE2">L</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="ml" id="checkE3">ml</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="Priese" id="checkE4">Priese</label>
      						</li>
      					</ul>
      				</td>

      				<td width="150">
      					<ul>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="Stück" id="checkE5">Stück</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="TL" id="TL">TL</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Einheit" value="EL" id="EL">EL</label>
      						</li>
      					</ul>
      					<p></p>
      				</td>

      				<td width="250">
      					<label for="Name">Name</label>
      					<input type="text" placeholder="Name eingeben" name="Name" required> 
      				</td>

      				<td width="550">
      					<button type="submit">Zutaten hinzufügen</button>
      				</td>
      			</tr>

      			<tr>
      				<td></td>
      				<td colspan="4">
      					<textarea id="Zutaten" name="Zutaten" cols="50" rows="6">
      					</textarea>
      				</td>
      			</tr>

      			<tr>
      				<td>
      					Zubereitung:
      				</td>
      				<td colspan="4">
      					<textarea id="Zubereitung" name="Zubereitung" cols="100" rows="10">
      					</textarea>
      				</td>
      			</tr>

      			<tr>
      				<td></td>
      				<td>
      					<button type="submit">Rezept hinzufügen</button>
      				</td>
      			</tr>

			</table>




		</article>
	</main>
      </body>
</html>
