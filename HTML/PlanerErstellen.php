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
			
			  input[type=text], input[type=password] {
                  width: 100%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
            }

            div {
                  border-color: green;
                  border-width: 5px;
                  border-style: solid;
                  padding: 1cm;
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

	<body>
		<h2>Partyplaner erstellem</h2> 
		
		<div class="container">
			
            <label for="planer"><b>Name für Partyplaner</b></label>
            <input type="text" placeholder="Name für Partyplaner eingeben" name="planerName" required>
            <p></p>

            <button type="submit">Planer erstellen</button> <!-- man kommt auf die Seite Planer.html  -->
        </div> 

	</body>
</html>
