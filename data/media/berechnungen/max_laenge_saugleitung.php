<script language="JavaScript">

// Globale Variablen
var max_laenge_saugleitung_hoehe;

// Ein-/Ausgabe-Funktionen
function input_max_laenge_saugleitung(){
    max_laenge_saugleitung_hoehe = document.max_laenge_saugleitung_form.input_max_laenge_saugleitung_hoehe.value;
    max_laenge_saugleitung_hoehe = max_laenge_saugleitung_hoehe.replace(/,/, ".");
}


function output_max_laenge_saugleitung(){
   var max_laenge_saugleitung_laenge, max_laenge_saugleitung_schlauchanzahl;
if (max_laenge_saugleitung_hoehe <= 0)
  {
  alert("Es wurden kein oder ein negativer Wert zur Berechnung eingegeben!");
  }
else if (max_laenge_saugleitung_hoehe > 7.5)
  {
  alert("Die maximal mögliche Saughöhe von 7,50 m wurde überschritten!");
  }
else
  {
   document.getElementById("max_laenge_saugleitung_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung zur maximalen L&auml;nge der Saugleitung</b>");
   max_laenge_saugleitung_laenge = Math.round(( 70 / max_laenge_saugleitung_hoehe ) * 10 ) / 10 ;
   if (max_laenge_saugleitung_hoehe < 3)
      {
      max_laenge_saugleitung_laenge = 22.5;
      }
   max_laenge_saugleitung_schlauchanzahl = Math.round(( max_laenge_saugleitung_laenge / 1.6 ) * 10 ) / 10 ;
   document.getElementById("max_laenge_saugleitung_div").innerHTML = ("maximale L&auml;nge der Saugleitung: " + max_laenge_saugleitung_laenge + " m. Dies entspricht einer Anzahl von " + max_laenge_saugleitung_schlauchanzahl + " Saugschl&auml;uchen der L&auml;nge 1,60 m.");
}
}


</script>
<form name="max_laenge_saugleitung_form">
<table>
<tbody>
<tr>
<td>geod&auml;tische Saugh&ouml;he: </td>
<td> <input name="input_max_laenge_saugleitung_hoehe" size="10" value="" type="text"> m </td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" maximale L&auml;nge der Saugleitung berechnen " onclick="input_max_laenge_saugleitung(),output_max_laenge_saugleitung()" type="button" >&nbsp;(auf 1 Nachkommastelle gerundet)</p>
</form>

<div id="max_laenge_saugleitung_ueberschrift"></div>
<div id="max_laenge_saugleitung_div"></div>
