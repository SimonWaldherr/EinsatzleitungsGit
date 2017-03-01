<script language="JavaScript">

// Globale Variablen
var spontanverdampfung_tu, spontanverdampfung_tg, spontanverdampfung_m;

// Ein-/Ausgabe-Funktionen
function input_spontanverdampfung()
{
    spontanverdampfung_tu = document.spontanverdampfung_form.input_spontanverdampfung_form_tu.value;
    spontanverdampfung_tg = document.spontanverdampfung_form.input_spontanverdampfung_form_tg.value;
    spontanverdampfung_m = document.spontanverdampfung_form.input_spontanverdampfung_form_m.value;
    spontanverdampfung_tu = spontanverdampfung_tu.replace(/,/, ".");
    spontanverdampfung_tg = spontanverdampfung_tg.replace(/,/, ".");
    spontanverdampfung_m = spontanverdampfung_m.replace(/,/, ".");
}

function output_spontanverdampfung(){
   var spontanverdampfung_flash, spontanverdampfung_flash_m;
if (spontanverdampfung_tu*spontanverdampfung_tg == 0)
  {
  alert("Umgebungstemperatur und Siedepunkt des Gases eingeben!");
  }
else 
  {
   document.getElementById("spontanverdampfung_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Absch&auml;tzung des spontan verdampften Anteils bei schlagartiger Freisetzung</b>");
spontanverdampfung_flash = spontanverdampfung_tu - spontanverdampfung_tg;
// Überprüfen ob der Anteil nicht über 100% liegt und ggf. auf 100 begrenzen
  if (spontanverdampfung_flash > 100)
	{
	spontanverdampfung_flash = 100;
	}
  if (spontanverdampfung_flash > 0)
	{
	document.getElementById("spontanverdampfung_flash_div").innerHTML = ("Flash-Verdampfungsanteil " + spontanverdampfung_flash + " %");
	}
  else
	{
	document.getElementById("spontanverdampfung_flash_div").innerHTML = ("Kein Flash-Verdampfungsanteil vorhanden.");
	}
  if (spontanverdampfung_m > 0)
	{
	spontanverdampfung_flash_m = spontanverdampfung_flash * spontanverdampfung_m / 100;
	   if (spontanverdampfung_flash_m > 0)
	   {
	   document.getElementById("spontanverdampfung_flash_m_div").innerHTML = ("Flash-Verdampfungsanteil " + spontanverdampfung_flash_m + " kg");
	   }
	}
  }
}

</script>
</p><form name="spontanverdampfung_form">
<table>
<tbody>
<tr>
<td>Umgebungstemperatur</td>
<td> <input name="input_spontanverdampfung_form_tu" size="10" value="" type="text"> °C</td>
</tr>
<tr>
<td>Siedepunkt des Fl&uuml;ssiggases</td>
<td> <input name="input_spontanverdampfung_form_tg" size="10" value="" type="text"> °C</td>
</tr>
<tr>
<td>Masse des freigesetzten Fl&uuml;ssiggases<br />Angabe nicht n&ouml;tig falls nicht bekannt</td>
<td> <input name="input_spontanverdampfung_form_m" size="10" value="" type="text"> kg</td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_spontanverdampfung() und output_spontanverdampfung() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Flash-Verdampfungsanteil absch&auml;tzen " onclick="input_spontanverdampfung(),output_spontanverdampfung()" type="button"></p>
</form>

<div id="spontanverdampfung_ueberschrift_div"></div>
<div id="spontanverdampfung_flash_div"></div>
<div id="spontanverdampfung_flash_m_div"></div>
