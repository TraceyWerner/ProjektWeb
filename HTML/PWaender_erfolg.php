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

            input[type=text], input[type=password] {
                  width: 100%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
            }

            

            .container {
                  padding: 16px;
            }

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
            div {
                  border-color: green;
                  border-width: 5px;
                  border-style: solid;
            }

		ul {
			list-style-type: none;
			padding-left: 0;
		}

		</style>
	</head>

	<body>
		<php include ("DB_user.php")>;

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
				<th>Willkommen, <?php echo $_SESSION['userName']."!" ?> </th>
			</tr>
		</table>

	</header>
		
	<nav>
		<h2>Persönliche Seite</h2> 
		<ul>
                  <li><a href="PWaendern.php"><strong>Passwort ändern </strong></a></li> 
                  <li><a href="Rezepterstellen.php">Rezepte erstellen</a></li>
                  <li><a href="MeineRezepte.html">Meine Rezepte</a></li>
                  <li><a href="Favoriten.html">Favoriten</a></li>
                  <li><a href="">Logout</a></li> 
		</ul>
	</nav>

	<main>
		<article>
			<h3>Passwort ändern</h3>

				Sie haben Ihr Passwort erfolgreich geändert.
		</article>
	</main>
</body>
</html>
