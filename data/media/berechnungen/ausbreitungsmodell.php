<script language="JavaScript">

// Globale Variablen
var ausbreitungsmodell_v_behaelter,ausbreitungsmodell_p,ausbreitungsmodell_m,ausbreitungsmodell_mm,ausbreitungsmodell_grenzwert,ausbreitungsmodell_hoehe;

// Ein-/Ausgabe-Funktionen
function input_ausbreitungsmodell(){
    ausbreitungsmodell_v_behaelter = document.ausbreitungsmodell_form.input_ausbreitungsmodell_v_behaelter.value;
    ausbreitungsmodell_v_behaelter = ausbreitungsmodell_v_behaelter.replace(/,/, ".");
    if (document.ausbreitungsmodell_form.input_ausbreitungsmodell_v_behaelter_einheit[1].checked == true)
	{
	ausbreitungsmodell_v_behaelter = ausbreitungsmodell_v_behaelter / 1000;
	}
    ausbreitungsmodell_p = document.ausbreitungsmodell_form.input_ausbreitungsmodell_p.value;
    ausbreitungsmodell_p = ausbreitungsmodell_p.replace(/,/, ".");
    ausbreitungsmodell_m = document.ausbreitungsmodell_form.input_ausbreitungsmodell_m.value;
    ausbreitungsmodell_m = ausbreitungsmodell_m.replace(/,/, ".");
    ausbreitungsmodell_mm = document.ausbreitungsmodell_form.input_ausbreitungsmodell_mm.value;
    ausbreitungsmodell_mm = 0.001 * ausbreitungsmodell_mm.replace(/,/, ".");
    ausbreitungsmodell_grenzwert = document.ausbreitungsmodell_form.input_ausbreitungsmodell_grenzwert.value;
    ausbreitungsmodell_grenzwert = ausbreitungsmodell_grenzwert.replace(/,/, ".");
    if (document.ausbreitungsmodell_form.input_ausbreitungsmodell_grenzwert_einheit[0].checked == true)
	{
	ausbreitungsmodell_grenzwert = ausbreitungsmodell_grenzwert / 1000000;
	}
    if (document.ausbreitungsmodell_form.input_ausbreitungsmodell_grenzwert_einheit[1].checked == true)
	{
	ausbreitungsmodell_grenzwert = ausbreitungsmodell_grenzwert / 100;
	}
    ausbreitungsmodell_hoehe = document.ausbreitungsmodell_form.input_ausbreitungsmodell_hoehe.value;
    ausbreitungsmodell_hoehe = ausbreitungsmodell_hoehe.replace(/,/, ".");
}


function output_ausbreitungsmodell(){
   var ausbreitungsmodell_v,ausbreitungsmodell_v_gefahr,ausbreitungsmodell_r;
if (ausbreitungsmodell_v_behaelter * ausbreitungsmodell_p * ausbreitungsmodell_m * ausbreitungsmodell_mm != 0)
  {
  alert("Es wurden Werte für Masse UND Volumen eingegeben!");
  }
else if (ausbreitungsmodell_v_behaelter * ausbreitungsmodell_p > 0)
  {
  ausbreitungsmodell_v = Math.round( ausbreitungsmodell_v_behaelter * ausbreitungsmodell_p );
  }
else if (ausbreitungsmodell_m * ausbreitungsmodell_mm > 0)
  {
  ausbreitungsmodell_v = Math.round( ausbreitungsmodell_m * 0.0224 / ausbreitungsmodell_mm );
  }
else
  {
  alert("Überprüfen Sie Ihre Eingabe!");
  }
  document.getElementById("ausbreitungsmodell_ueberschrift").innerHTML = ("<b>Ergebnisse der Ausbreitungsabschätzung</b>");
  document.getElementById("ausbreitungsmodell_v_div").innerHTML = ("Expandiertes Volumen: " + ausbreitungsmodell_v + " m³");
  ausbreitungsmodell_v_gefahr = Math.round( ausbreitungsmodell_v / ausbreitungsmodell_grenzwert );
  document.getElementById("ausbreitungsmodell_v_gefahr_div").innerHTML = ("Volumen der gefährlichen Atmopshäre: " + ausbreitungsmodell_v_gefahr + " m³");
  ausbreitungsmodell_r = Math.round(Math.sqrt( ausbreitungsmodell_v_gefahr / ( 2 * Math.PI * ausbreitungsmodell_hoehe ) ));
  document.getElementById("ausbreitungsmodell_r_div").innerHTML = ("Radius des Gefahrenbereichs: " + ausbreitungsmodell_r + " m");
}

</script>
<form name="ausbreitungsmodell_form">
<p style="color: red; font-weight: bold;">Diese Berechnung befindet sich noch im Experimentalstadium!!!</p>
<p>Mit dieser Berechnung können sie abschätzen, wie groß der <a class="wikilink1" href="doku.php?id=gefaehrliche_stoffe_gueter:allgemein:gefahrenbereich">Gefahrenbereich</a> beim Austritt eines Stoffs zu wählen ist. Es wird dabei vom schlagartigen, vollständigen Stoffaustritt und dem Worst-Case-Szenario ausgegangen. Die Konzentration ist an jedem Punkt gleich hoch. Aufgrund der konservativen Berechnung wird der Gefahrenbereich tendenziell größer ausfallen als er tatsächlich ist.</p>
<p>Beachten Sie: in dieser einfachen Abschätzung wird von Windstille ausgegangen. Eine vom Wind getriebene Ausbreitung ist sehr komplex und muss mit professioneller Software simuliert werden.</p>
<p style="font-weight: bold;">Geben Sie <font style="color: red;">entweder</font> etwas in die Felder für die <font style="color: red;">Berechnung über das Volumen</font> etwas ein <font style="color: red;">oder</font> in die zur <font style="color: red;">Berechnung über die Masse!</font></p>
<table>
<tbody>
<tr>
<td colspan="4" style="font-weight: bold">Berechnung über das Volumen des Behälters (nur für gasförmig vorliegende Stoffe)</td>
</tr>
<tr>
<td style="vertical-align: middle;">Volumen des Behälters: </td>
<td style="vertical-align: middle;"> <input name="input_ausbreitungsmodell_v_behaelter" size="10" value="" type="text"></td><td nowrap  style="vertical-align: middle;"><input type="radio" name="input_ausbreitungsmodell_v_behaelter_einheit" value="m3" checked> m³ <br /><input type="radio" name="input_ausbreitungsmodell_v_behaelter_einheit" value="liter"> Liter</td>
<td rowspan="2"><font style="color: red; font-weight: bold;">Nur für gasförmige Stoffe verwendbar. Nicht für Flüssiggase!</font> Verwenden Sie für flüssige Stoffe die Eingabe von Masse und molarer Masse des Stoffs.<br /><br />Wenn Ihnen das Gesamtvolumen im expandierten Zustand bekannt ist, tragen Sie dies ins Feld "Volumen" ein und geben Sie für den Druck "1" an.</td>
</tr>
<tr>
<td style="vertical-align: middle;">Druck: </td>
<td style="vertical-align: middle;"> <input name="input_ausbreitungsmodell_p" size="10" value="" type="text"></td><td style="vertical-align: middle;">bar</td>
</tr>
<tr style="border-top:1px solid;">
<td colspan="4" style="font-weight: bold">Berechnung über die Masse des Stoffs (Aggregatszustand im Behälter unerheblich)</td>
</tr>
<tr>
<td style="vertical-align: middle;">Masse des Stoffs im Behälter: </td>
<td style="vertical-align: middle;"> <input name="input_ausbreitungsmodell_m" size="10" value="" type="text"></td><td style="vertical-align: middle;">kg</td>
<td rowspan="2">Die molare Masse von Stoffen kann bei bekannter Summenformel aus der <a class="wikilink1" href="doku.php?id=gefaehrliche_stoffe_gueter:allgemein:periodensystem#stoffliste">Stoffliste</a> errechnet werden.</td>
</tr>
<tr>
<td style="vertical-align: middle;">molare Masse des Stoffs: </td>
<td style="vertical-align: middle;"> <input name="input_ausbreitungsmodell_mm" size="10" value="" type="text"></td><td>g/mol</td>
</tr>
<tr style="border-top:1px solid;">
<td>Grenzwert: </td>
<td style="vertical-align: middle;"> <input name="input_ausbreitungsmodell_grenzwert" size="10" value="" type="text"></td><td nowrap><input type="radio" name="input_ausbreitungsmodell_grenzwert_einheit" value="ppm" checked> ppm <br /><input type="radio" name="input_ausbreitungsmodell_grenzwert_einheit" value="prozent"> Vol.-%</td><td>Tragen Sie hier den Grenzwert ein.<br />Beispiele: ETW, ERPG, MAK-Wert oder die untere Explosionsgrenze UEG.</td>
</tr>
<tr>
<td>Schichtungshöhe: </td>
<td> <input name="input_ausbreitungsmodell_hoehe" size="10" value="1" type="text"> </td><td>m</td><td>Geben Sie an, wie hoch die Schichtungshöhe des Gases sein soll nachdem es ausgetreten ist.</td>
</tr>
</tbody>
</table>

<!-- Aufruf der Funktionen input_ausbreitungsmodell() und output_ausbreitungsmodell() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Ausbreitung abschätzen " onclick="input_ausbreitungsmodell(),output_ausbreitungsmodell()" type="button" ></p>
</form>

<div id="ausbreitungsmodell_ueberschrift"></div>
<div id="ausbreitungsmodell_v_div"></div>
<div id="ausbreitungsmodell_v_gefahr_div"></div>
<div id="ausbreitungsmodell_r_div"></div>
