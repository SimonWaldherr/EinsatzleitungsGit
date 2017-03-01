<script language="JavaScript">

// Globale Variablen
var transportindex_wert;

// Ein-/Ausgabe-Funktionen
function input_transportindex(){
    transportindex_wert=document.transportindex_form.input_transportindex_wert.value;
    transportindex_wert = transportindex_wert.replace(/,/, ".");
}


function output_transportindex(){
   var transportindex_ergebnis;
if (transportindex_wert <= 0)
  {
  alert("Der Wert für die Transportkennzahl muss größer als 0 sein!");
  }
else
  {
   document.getElementById("transportindex_ueberschrift").innerHTML = ("<b>Ergebnisse der Dosisleistungs-Berechnung aus der Transportkennzahl</b>");
   transportindex_ergebnis = Math.round(( transportindex_wert * 10 ) * 1000 ) / 1000;
   document.getElementById("transportindex_div").innerHTML = ("erlaubte Dosisleistung in 1 m Abstand bei einer TKZ von " + transportindex_wert + ": <b>" + transportindex_ergebnis + " µSv/h = " + transportindex_ergebnis/1000 + " mSv/h</b><br>Wird eine höhere Dosisleistung gemessen und es befinden sich keine weiteren Versandstücke in der Nähe deren Strahlung sich dazu addieren könnte, so ist davon auszugehen dass die Verpackung beschädigt ist!");
}
}


</script>
<form name="transportindex_form">
<p>Mit dieser Berechnung können Sie aus der Transportkennzahl (TKZ) ermitteln, welche Dosisleistung in einem Meter Abstand zu Versandstück maximal auftreten darf.</p>
<table>
<tbody>
<tr>
<td style="vertical-align: middle;">Transportkennzahl (TKZ):</td>
<td style="vertical-align: middle;"><input name="input_transportindex_wert" size="10" value="" type="text"></td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" erlaubte Dosisleistung berechnen " onclick="input_transportindex(),output_transportindex()" type="button" ></p>
</form>

<div id="transportindex_ueberschrift"></div>
<div id="transportindex_div"></div>
