<!DOCTYPE html>
<html>
	<head>
		<title>Backfee</title>
		<meta name="author" content="Miriam Lang">
		<meta name="description" content="Rezepteübersicht">
		<meta name="keywords" content="Übersicht, Rezepte, Rezepteübersicht">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="date" content="SS18">
		<style type="text/css">
			
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

	<body>
		<h2>Rezeptübersicht</h2> 
      	<input type="text" placeholder="Suche" name="Suche" required id="Suche">Lupe
		
		<p> Sortieren nach: <select>
  				<option value="alphabetisch">Alphabetisch</option>
  				<option value="Dauer aufst">Dauer aufsteigend</option>
  				<option value="Dauer ab">Dauer absteigend</option>
  				<option value="Schwierig auf">Schwierigkeitsgrad aufsteigend</option>
  				<option value="Schwierig ab">Schwierigkeitsgrad absteigend</option>
  				<option value="backen&Süß"> Backen & Süßspeisen</option>
  				<option value="Beilagen">Beilagen</option>
  				<option value="Diabetiker">Diabetiker</option>
  				<option value="Getränke">Getränke</option>
  				<option value="Hauptspeise">Hauptspeise</option>
  				<option value="Laktosefrei">Laktosefrei</option>
  				<option value="Nachtisch">Nachtisch</option>
  				<option value="Trennkost">Trennkost</option>
  				<option value="Vegan">Vegan</option>
  				<option value="Vegetarisch">Vegetarisch</option>

				</select>
			</p>
		
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

	</body>
</html>
