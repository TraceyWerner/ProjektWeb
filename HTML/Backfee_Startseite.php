<?php

include ("Backfee_Kopf.php");

class CStartseite {
		public static function GenerateTagesRez($items, $class) {
			$html = "<rez class='$class'>\n";

			

			$html .= '<p id="Rahmen1">RS</p>';
			$html .= '<p id="Rahmen2"></p>';
						
			$html .= '<table  id="StartRahmenTR">
            <tr>
                <td rowspan="3" id="StartBildTR">
                    <img src="Login_Bild.png" id="BildTR" title="Pizza Gafik" alt="Bild konnte nicht geladen werden" >
                </td>
                <td colspan="3"><h2><strong>Pizza</strong></h2></td>
            </tr>
            <tr>
                <td colspan="3">Ein knuspriger Teig mit einer würzigen Tomatensoße und leckerem Belag</td>
            </tr>
            <tr>
                <td>Mittel</td>
                <td>1 Stunde</td>
                <td>*****</td>
            </tr>
            </table>';

            $html .= '<p id="Rahmen3"></p>';
			$html .= '<p id="Rahmen4">LS</p>';

            

			$html .= "</rez>\n";
			return $html;
			
		}
	};

	echo CStartseite::GenerateTagesRez($menu, 'tagesrez');

include ("Backfee_Impressum.php")

?>
