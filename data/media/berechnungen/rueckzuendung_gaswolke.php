<script language="JavaScript">

// Globale Variablen
var rueckzuendung_gaswolke_d;

// Ein-/Ausgabe-Funktionen
function input_rueckzuendung_gaswolke()
{
    rueckzuendung_gaswolke_d = document.rueckzuendung_gaswolke_form.input_rueckzuendung_gaswolke_form_d.value;
    rueckzuendung_gaswolke_d = rueckzuendung_gaswolke_d.replace(/,/, ".");
}

function output_rueckzuendung_gaswolke(){
   var rueckzuendung_gaswolke_entfernung;
if (rueckzuendung_gaswolke_d == 0)
  {
  alert("Es wurde kein Wert eingegeben!");
  }
else 
  {
rueckzuendung_gaswolke_entfernung = Math.round(50*rueckzuendung_gaswolke_d);
// Ausgabe
   document.getElementById("rueckzuendung_gaswolke_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Berechnung der R&uuml;ckz&uuml;ndentfernung von Gaswolken</b>");
   document.getElementById("rueckzuendung_gaswolke_entfernung_div").innerHTML = ("maximale R&uuml;ckz&uuml;ndentfernung " + rueckzuendung_gaswolke_entfernung + " m ");
}
}

</script>
</p><form name="rueckzuendung_gaswolke_form">
<table>
<tbody>
<tr>
<td>Durchmesser eines kreisf&ouml;rmigen Lecks</td>
<td> <input name="input_rueckzuendung_gaswolke_form_d" size="10" value="" type="text"> cm</td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_rueckzuendung_gaswolke() und output_rueckzuendung_gaswolke() beim Klicken auf folgende Schaltfläche -->
<p><input value=" R&uuml;ckz&uuml;ndentfernung berechnen " onclick="input_rueckzuendung_gaswolke(),output_rueckzuendung_gaswolke()" type="button"></p>
</form>

<div id="rueckzuendung_gaswolke_ueberschrift_div"></div>
<div id="rueckzuendung_gaswolke_entfernung_div"></div>
