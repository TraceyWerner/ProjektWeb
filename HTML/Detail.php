<!DOCTYPE html>
<html>
	<head>
		<title>Rezept</title>
		<meta name="author" content="Miriam Lang">
		<meta name="description" content="Eine Testseite">
		<meta name="keywords" content="HTML, Beispiel, Struktur, Metas, Überschriften, Textstrukturen">
		<meta name="date" content="2018-04-05 16:49:37">
		<link rel="icon" type="image/png" href="favicon-beuth.png">
		<style type="text/css">

		</style>
	</head>
	
	<body>
		<header>
			<?php include("Backfee_Kopf.php")?>
		</header>

		<div class="detail">
			<table>
				<td>
					<tr>
						<h2>Cake Pops</h2> <!-- hier Namen des Rezepts ausgeben  -->
					</tr>
					<tr>
						<img src="photo_2017-09-22_15-09-19.jpg" width="250" title="Test" alt="keinBildgefunden"><br>
					</tr>			
					<tr>
						<h3> Zutaten: </h3>
						<ul> 
							<li> trockener Kuchen </li>
							<li>Frischkäse</li>
							<li>Schokolade</li>
							<li>Dekostreusel</li>
							<li>CakePop-Stiele oder Schaschlikspieße</li>
						</ul>
					</tr>
					<tr>
						<button type="submit">zu Favoriten hinzufügen</button>
					</tr>
					<tr>
						<h3> Zubereitung: </h3>
						<ol> 
							<li> Trockenen Kuchen zerkrümmeln und mit dem Frischkäse vermengen. </li>
							<li> Aus dem Teig kleine Kugeln formen und kurz in den Kühlschrank stellen. </li>
							<li> Schokolade über dem Wasserbad schmelzen.</li>
							<li> CakePop-Stiele in die Schokolade tauchen und dann in die Kuchenkugel stecken und trocknen lassen. </li>
							<li> Kuchenkugel in Schokolade tauchen und abtropfen lassen und mit Streuseln dekorieren. </li>
						</ol>
					</tr>
					<tr>
						<p> erstellt von <a href="">"User123"</a> </p>
					</tr>	
				</td>		
			</table>
		</div>

		<footer>
			<?php include("Backfee_Impressum.php")?>
		</footer>
	</body>
</html>
