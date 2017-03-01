<script language="JavaScript">

// Globale Variablen
var emg_umrechnung_display, emg_umrechnung_grenzwert, emg_umrechnung_ue_stoff, emg_umrechnung_ue_kalibrier;

// Ein-/Ausgabe-Funktionen
function input_emg_umrechnung(){
    emg_umrechnung_display = document.emg_umrechnung_form.emg_umrechnung_form_display.value;
    emg_umrechnung_grenzwert = document.emg_umrechnung_form.emg_umrechnung_form_grenzwert.value;
    emg_umrechnung_ue_stoff = document.emg_umrechnung_form.emg_umrechnung_form_ue_stoff.value;
    emg_umrechnung_ue_kalibrier = document.emg_umrechnung_form.emg_umrechnung_form_ue_kalibrier.value;
    emg_umrechnung_display = emg_umrechnung_display.replace(/,/, ".");
    emg_umrechnung_grenzwert = emg_umrechnung_grenzwert.replace(/,/, ".");
    emg_umrechnung_ue_stoff = emg_umrechnung_ue_stoff.replace(/,/, ".");
    emg_umrechnung_ue_kalibrier = emg_umrechnung_ue_kalibrier.replace(/,/, ".");
}

function output_emg_umrechnung(){
   var emg_umrechnung_real,emg_umrechnung_grenze;
if (emg_umrechnung_display < 0)
  {
  alert("Der für den auf dem EX-Messgerät angezeigte Wert darf nicht kleiner 0 % UEG sein!");
  }
else if (emg_umrechnung_display > 100)
  {
  alert("Der für den auf dem EX-Messgerät angezeigte Wert darf nicht größer 100 % UEG sein!");
  }
else if (emg_umrechnung_grenzwert <= 0)
  {
  alert("Der Grenzwert des zu messenden Stoffs muss größer 0 % UEG sein!");
  }
else if (emg_umrechnung_grenzwert > 100)
  {
  alert("Der Grenzwert des zu messenden Stoffs darf nicht größer 100 % UEG sein!");
  }
else if (emg_umrechnung_ue_stoff <= 0)
  {
  alert("Die UEG des zu messenden Stoffs muss größer 0 % sein!");
  }
else if (emg_umrechnung_ue_stoff > 100)
  {
  alert("Die UEG des zu messenden Stoffs darf nicht größer 100 % sein!");
  }
else if (emg_umrechnung_ue_kalibrier <= 0)
  {
  alert("Die UEG des Kalibrierstoffs muss größer 0 % sein!");
  }
else if (emg_umrechnung_ue_kalibrier > 100)
  {
  alert("Die UEG des Kalibrierstoffs darf nicht größer 100 % sein!");
  }
else
  {
  emg_umrechnung_real = (Math.round( ( emg_umrechnung_display * emg_umrechnung_ue_kalibrier ) / emg_umrechnung_ue_stoff * 10) ) / 10;
  emg_umrechnung_grenze = (Math.round( ( emg_umrechnung_grenzwert * emg_umrechnung_ue_stoff ) / emg_umrechnung_ue_kalibrier * 10) ) / 10;
// Ausgabe
   document.getElementById("emg_umrechnung_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Abschätzung des realen %-UEG-Werts</b>");
   document.getElementById("emg_umrechnung_ergebnis_div").innerHTML = ("Der tatsächliche Wert für den zu messenden Stoff beträgt " + emg_umrechnung_real + " % UEG.");
if (emg_umrechnung_real >= 20)
  {
  document.getElementById("emg_umrechnung_warnung_div").innerHTML = ("<span style=\"color: red; font-weight: bold;\">Achtung: 20% der UEG wurden erreicht/überschritten!</span>");
  }
else
  {
  document.getElementById("emg_umrechnung_warnung_div").innerHTML = ("");
  }
   document.getElementById("emg_umrechnung_grenze_div").innerHTML = ("Der Grenzwert von " + emg_umrechnung_grenzwert + " % UEG des zu messenden Stoffs ist bei einer Anzeige auf dem Messgerät von " + emg_umrechnung_grenze + " % UEG erreicht.");
  }
}

</script>
</p><form name="emg_umrechnung_form">
<p>EX-Messgeräte sind auf ein bestimmtes Gas kalibriert. Mit dieser Berechnung können Sie ermitteln, welcher Wert tatsächlich vorliegt wenn Ihr Messgerät nicht auf den Stoff kalibriert ist den Sie messen möchten.</p>
<p>Für die exakte Umrechnung werden vom Hersteller Umrechnungsfaktoren für den jeweiligen Sensor herausgegeben, in Anbetracht der teils erheblichen Messungenauigkeiten kann jedoch auch diese Näherung verwendet werden welche die UEG der Stoffe ins Verhältnis setzt.</p>
<p>UEG gängiger Kalibrierstoffe:</p>

<table>
<tbody>
<tr><td>Methan</td><td>4,4 %</td></tr>
<tr><td>Nonan</td><td>0,7 %</td></tr>
<tr><td>Propan</td><td>1,7 %</td></tr>
<tr><td>Toluol</td><td>1,1 %</td></tr>
</tbody>
</table>

<p>weitere gängige Kalibrierstoffe in der Datei <a href="lib/exe/fetch.php?media=gefaehrliche_stoffe_gueter:geraete:information_neue_untere_explosionsgrenzwerte.pdf" target="_blank">Neue untere Explosionsgrenzwerte (UEG) für brennbare Gase und Dämpfe in Luft</a> der Landesfeuerwehrschule Baden-Württemberg.</p>

<table>
<tbody>
<tr>
<td>Auf dem EX-Messgerät angezeigter Wert:</td>
<td><input name="emg_umrechnung_form_display" size="10" value="" type="text"> % UEG</td>
</tr>
<tr>
<td>Grenzwert des zu messenden Stoffs<br />(z.B. für die Grenze des Gefahrenbereichs)</td>
<td><input name="emg_umrechnung_form_grenzwert" size="10" value="20" type="text"> % UEG</td>
</tr>
<tr>
<td>UEG des zu messenden Stoffs:</td>
<td><input name="emg_umrechnung_form_ue_stoff" size="10" value="" type="text"> %</td>
</tr>
<tr>
<td>UEG des Kalibrierstoffs des Messgeräts:</td>
<td><input name="emg_umrechnung_form_ue_kalibrier" size="10" value="" type="text"> %</td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_emg_umrechnung() und output_emg_umrechnung() beim Klicken auf folgende Schaltfläche -->
<p><input value=" tatsächliche % UEG abschätzen " onclick="input_emg_umrechnung(),output_emg_umrechnung()" type="button"></p>
</form>

<div id="emg_umrechnung_ueberschrift_div"></div>
<div id="emg_umrechnung_ergebnis_div"></div>
<div id="emg_umrechnung_warnung_div"></div>
<div id="emg_umrechnung_grenze_div"></div>
