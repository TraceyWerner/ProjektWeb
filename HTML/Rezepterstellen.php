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
			<form action ="PWaendern.php"><button type="submit" name="Knopf" value="PW">Passwort ändern</button> </form>
                  <form action ="Rezepterstellen.php"> <button type="submit" name="Knopf" value="RezErstellen">Rezepte erstellen</button> </form>
                  <form action ="DB_user.php"> <button type="submit" name="Knopf" value="meineRezepte">Meine Rezepte</button> </form>
                  <form action ="DB_user.php"> <button type="submit" name="Knopf" value="favoriten">Favoriten</button> </form>
                  <form action ="DB_user.php"> <button type="submit" name="Knopf" value="logout">Logout</button> </form>
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
                                                <label><input type="radio" name="Einheit" value= 1  CHECKED>gr</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 4 CHECKED >L</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 2 CHECKED >ml</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 5 CHECKED >Prise</label>
                                          </li>
                                    </ul>
                              </td>

                              <td width="150">
                                    <ul>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 3 CHECKED >Stück</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 6 CHECKED >TL</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Einheit" value= 7 CHECKED >EL</label>
                                          </li>
                                    </ul>
                                    <p></p>
                              </td>

                              <td width="250">
                                    <label for="Name">Name</label>
                                    <input type="text" placeholder="Name eingeben" name="NameZ" required> 
                              </td>

                              <td width="550">
                                    <button type="submit" name="knopf" value="zutat">Zutaten hinzufügen</button>
                              </td>
                           </tr>

                           <tr>
                              <td></td>
                              <td colspan="4"> 
                                     <textarea id="Zutaten" name=Zutaten></textarea>
                              </td>
                           </tr>
                        </form>


                        <form class="rezeptErstellen" action="DB_rezept.php">
                              <tr>
                                    <td>
                                          Bild:
                                    </td>
                                    <td>
                                          <label for="Bild"></label>
                                          <input type="file" placeholder="durchsuchen" name ="bild" enctype="multipart/form-data">
                                    </td>
                                    
                              </tr>

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
      						      <label><input type="radio" name="Kategorie" value= 4 >Backen & Süßspeisen</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 8 >Beilagen</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 3 ">Getränke</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 6 ">Hauptspeise</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 2 ">Laktosefrei</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 7 ">Nachtisch</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 5 >Vegan</label>
                                          </li>
                                          <li>
                                                <label><input type="radio" name="Kategorie" value= 1 id="check10">Vegetarisch</label>
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
      					<button type="submit" name="knopf" value="rezept">Rezept hinzufügen</button>
      				</td>
      			   </tr>
                        </form>
			</table>
		</article>
	</main>
      </body>
</html>
