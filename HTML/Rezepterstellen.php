<? session_start()
?>
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
                  <li><a href="MeineRezepte.php">Meine Rezepte</a></li>
                  <li><a href="Favoriten.php">Favoriten</a></li>
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

                        <form class="zutatHinzu" action="DB_rezept.php">

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
                                                <label><input type="radio" name="Einheit" value="gr"  CHECKED>gr</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="L" CHECKED >L</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="ml" CHECKED >ml</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="Priese" CHECKED >Priese</label>
                                          </li>
                                    </ul>
                              </td>

                              <td width="150">
                                    <ul>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="Stück" CHECKED >Stück</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="TL" CHECKED >TL</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value="EL" CHECKED >EL</label>
                                          </li>
                                    </ul>
                                    <p></p>
                              </td>

                              <td width="250">
                                    <label for="Name">Name</label>
                                    <input type="text" placeholder="Name eingeben" name="NameZ" required> 
                              </td>

                              <td width="550">
                                    <button type="submit" name="auswahl" value="Abschicken">Zutaten hinzufügen</button>
                              </td>
                           </tr>

                           <tr>
                              <td></td>
                              <td colspan="4">
                                    <textarea id="Zutaten" name="Zutaten" cols="50" rows="6">
                                    </textarea>
                              </td>
                           </tr>
                        </form>


                        <form class="rezeptErstellen" action="DB_rezept.php">
				   <tr>
      			   	<td>
      					Name:
      				</td>

      				<td>
      					<label for="Name"></label>
      					<input type="text" placeholder="Name eingeben" name="Rname" required> 
      				</td>
      			   </tr>

                            <tr>
                              <td>
                                    Schwierigkeit:
                              </td>

                              <td>
                                    <li>
                                          <label><input type="radio" name="schwer" value="leicht" >leicht</label>
                                    </li>
                                    <li>
                                          <label><input type="radio" name="schwer" value="mittel" ">mittel</label>
                                    </li>
                                    <li>
                                          <label><input type="radio" name="schwer" value="schwer" ">schwer</label>
                                    </li>
                              </td>
                           </tr>

      			   <tr>
      				<td>
      					Kategorie:
      				</td>

      				<td>
      					<ul>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Backen&Süßspeisen" >Backen & Süßspeisen</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Beilagen" >Beilagen</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Getränke" ">Getränke</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Hauptspeise" ">Hauptspeise</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Laktosefrei" ">Laktosefrei</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Nachtisch" ">Nachtisch</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Vegan" >Vegan</label>
      						</li>
      						<li>
      							<label><input type="checkbox" name="Kategorie" value="Vegetarisch" id="check10">Vegetarisch</label>
      						</li>
      					</ul>
      				</td>
      			   </tr>

                           <tr>
                              <td>
                                    Dauer:
                              </td>

                              <td>
                                    <label for="Dauer"></label>
                                    <input type="text" placeholder="Dauer eingeben" name="Dauer" required> 
                              </td>
                           </tr>

      			   <tr>
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
                        </form>
			</table>
		</article>
	</main>
      </body>
</html>
