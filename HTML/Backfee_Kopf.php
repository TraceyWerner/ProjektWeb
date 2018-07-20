<?php

$login = false;

echo '<link rel="stylesheet" type="text/css" href="Backfee_layout.css">';


	echo "<a href='Startseite' id='logo'><img src='Logo_Backfee.png' width='50%'></a>";

	if ($login == false) {
		echo "<a href='Login' class='log'><img src='Login_Bild.png' width='10%'></a>";
	} else {
		echo "<a href='Logout' class='log'><img src='Backfee_Logout.png' width='10%'></a>";
	}

	$menu = array(
		'startseite' => array('text'=>'Startseite', 'url'=>'?p=startseite'),
		'rezepte' => array('text'=>'Rezepte', 'url'=>'?p=rezepte'),
		'partyplaner' => array('text'=>'Partyplaner', 'url'=>'?p=partyplaner'),
		//'log' => array('text'=>'Login/Registrieren', 'url'=>'?p=log')
	);

	class CNavigation {
		public static function GenerateMenu($items, $class) {
			$html = "<nav class='$class'>\n";
			foreach($items as $key => $item) {
				$selected = (isset($_GET['p'])) && $_GET['p'] == $key ? 'selected' : null;
				$html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
			}
			$html .= '<a onclick="document.getElementById(\'id01\').style.display=\'block\'">Login/Registrieren</a>';
			$html .= "</nav>\n";
			return $html;
		}
	};

	echo CNavigation::GenerateMenu($menu, 'navbar');

// Login
	class CLogin {
		public static function GenerateLogin($items, $class) {
			$html = "<log class='$class'>\n";			
			
			$html .= '<div id=\'id01\' class=\'modal\'>
  
  				<form class=\'modal-content animate\' action=\'/action_page.php\'>
    			<div class=\'imgcontainer\'>
      			<span onclick="document.getElementById(\'id01\').style.display=\'none\'" class=\'close\' title=\'Close Modal\'>&times;</span>
    			</div>

    			<div class=\'container\'>
      			<label for=\'username\'><b>Username</b></label>
      			<input type=\'text\' placeholder=\'Username eintragen\' name=\'uname\' required>

      			<label for=\'psw\'><b>Passwort</b></label>
      			<input type=\'text\' placeholder=\'Passwort eingeben\' name=\'psw\' required>
      
      			<p></p>
      			<button type=\'submit\'>Login</button>
      			<p></p>
      			</div>

      			<div class=\'container\'>
      			<p> Sie haben Ihr Passwort vergessen? </p>	

      			<button onclick="document.getElementById(\'id02\').style.display=\'block\'" id="PWverg">Passwort ändern</button>		
				</div>

      			<div class=\'container\'>
      			<p> Sie haben noch kein Konto bei Backfee? </p>

      			<button onclick="document.getElementById(\'id03\').style.display=\'block\'">Hier kostenlos Registrieren</button>		

      			</div>
  			</form>
		</div>';

		$html .= '<div id=\'id02\' class=\'modal\'>
  
  		<form class=\'modal-content animate\' action=\'/action_page.php\'>
    		<div class=\'imgcontainer\'>
      		<span onclick="document.getElementById(\'id02\').style.display=\'none\'" class=\'close\' title=\'Close Modal\'>&times;</span>
    		</div>

    		<div class=\'container\'>
      		<p> Sie haben Ihr Passwort vergessen? </p>
      		<label for=\'username\'><b>Username</b></label>
      		<input type=\'text\' placeholder=\'Username eintragen\' name=\'uname\' required>
      		<p></p>

      		<label for=\'sicher\'><b>Ihre Lieblingsfarbe?</b></label>
     		<input type=\'text\' placeholder=\'Sicherheitsfrage beantworten\' name=\'sifrage\' required>
      		<p></p>

      		<label for=\'pswNeu\'><b>Neues Passwort</b></label>
      		<input type=\'text\' placeholder=\'Passwort eingeben\' name=\'pswN\' required>
      		<p></p>

      		<label for=\'pswbest\'><b>Passwort bestätigen</b></label>
      		<input type=\'text\' placeholder=\'Passwort bestätigen\' name=\'pswB\' required>
      		<p></p>
      		<button type=\'submit\'>Passwort ändern</button>
    		</div> 
  		</form>
		</div>';

		$html .= '<div id=\'id03\' class=\'modal\'>
  
  		<form class=\'modal-content animate\' action=\'/action_page.php\'>
    		<div class=\'imgcontainer\'>
      		<span onclick="document.getElementById(\'id03\').style.display=\'none\'" class=\'close\' title=\'Close Modal\'>&times;</span>
    		</div>

    		<div class=\'container\'>
    		<p></p>
      		<p> Bitte geben Sie hier Ihre Daten ein: </p>
      		<label for=\'username\'><b>Username</b></label>
      		<input type=\'text\' placeholder=\'Username eintragen\' name=\'uname\' required>
      		<p></p>

      		<label for=\'sicher\'><b>Ihre Lieblingsfarbe?</b></label>
     		<input type=\'text\' placeholder=\'Sicherheitsfrage beantworten\' name=\'sifrage\' required>
      		<p></p>

      		<label for=\'pswNeu\'><b>Passwort</b></label>
      		<input type=\'text\' placeholder=\'Passwort eingeben\' name=\'pswN\' required>
      		<p></p>

      		<label>
      		<input type=\'checkbox\' checked=\'checked\' name=\'remember\' required> AGB akzeptiert
      		</label>
      		<p></p>

      		
      		<button type=\'submit\'>kostenlos Registrieren</button>
      		
      		<p></p>

    		</div> 
  		</form>
		</div>';

		$html .= '<script>
		// Get the modal
		var modal = document.getElementById(\'id01\');
		var modal = document.getElementById(\'id02\');
		var modal = document.getElementById(\'id03\');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
    		if (event.target == modal) {
        		modal.style.display = \'none\';
    		}
		}
		</script>';
		

			$html .= "</log>\n";
			return $html;
		}
	};

	echo CLogin::GenerateLogin($menu, 'logg');

?>