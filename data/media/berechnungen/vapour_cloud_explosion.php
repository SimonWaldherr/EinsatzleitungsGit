<script language="JavaScript">

// Globale Variablen
var vce_m, vce_v;

// Ein-/Ausgabe-Funktionen
function input_vce()
{
    vce_m = document.vce_form.input_vce_form_m.value;
    vce_v = document.vce_form.input_vce_form_v.value;
    vce_m = vce_m.replace(/,/, ".");
    vce_v = vce_v.replace(/,/, ".");
}

function output_vce(){
   var vce_m_output, vce_scheiben_min, vce_scheiben_max, vce_hoerschaden_min, vce_hoerschaden_max, vce_umfallen_min, vce_umfallen_max, vce_trommelfell_min, vce_trommelfell_max, vce_verwuestung_min, vce_verwuestung_max;
// Überprüfung ob nicht fälschlicherweise 2 Werte eingegeben wurden
if (vce_m*vce_v != 0)
  {
  alert("ENTWEDER Masse ODER Volumen einsetzen!");
  }
else if (vce_m*vce_v < 0)
  {
  alert("Der eingegebene Wert darf nicht kleiner 0 sein!");
  }
else if (vce_m != 0)
  {
  vce_m_output = vce_m;
  }
else if (vce_v != 0)
  {
  vce_m_output = vce_v*500;
  }
else 
  {
  alert("Es wurden keine Werte eingegeben!");
  }
// Ausgabe
   document.getElementById("vce_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Berechnung der Explosion von freigesetzten Gasmengen</b>");
   // Vereinzelte Scheibenbrüche von 50*Masse^(1/3) bis 100*Masse^(1/3)
   vce_scheiben_min = Math.round(50*Math.pow(vce_m_output,(1/3)));
   vce_scheiben_max = Math.round(100*Math.pow(vce_m_output,(1/3)));
   // Scheibenbruch / zeitweiliger Hörschaden von 20*Masse^(1/3) bis 50*Masse^(1/3)
   vce_hoerschaden_min = Math.round(20*Math.pow(vce_m_output,(1/3)));
   vce_hoerschaden_max = Math.round(50*Math.pow(vce_m_output,(1/3)));
   // wieder herstellbare Schäden an Gebäuden und umfallen von Menschen von 11*Masse^(1/3) bis 20*Masse^(1/3)
   vce_umfallen_min = Math.round(11*Math.pow(vce_m_output,(1/3)));
   vce_umfallen_max = Math.round(20*Math.pow(vce_m_output,(1/3)));   
   // schwere Schäden an Gebäuden und Industrieanlagen und platzen des Trommelfells von 5,5*Masse^(1/3) bis 11*Masse^(1/3)
   vce_trommelfell_min = Math.round(5.5*Math.pow(vce_m_output,(1/3)));
   vce_trommelfell_max = Math.round(11*Math.pow(vce_m_output,(1/3))); 
   // totale Verwüstung, Langzeitschäden bis Tod von 0,85*Masse^(1/3) bis 5,5*Masse^(1/3)
   vce_verwuestung_min = Math.round(0.85*Math.pow(vce_m_output,(1/3)));
   vce_verwuestung_max = Math.round(5.5*Math.pow(vce_m_output,(1/3)));
   document.getElementById("vce_scheiben_div").innerHTML = ("vereinzelte Scheibenbr&uuml;che von " + vce_scheiben_min + " m bis " + vce_scheiben_max + " m");
   document.getElementById("vce_hoerschaden_div").innerHTML = ("Scheibenbruch und zeitweiliger H&ouml;rschaden von " + vce_hoerschaden_min + " m bis " + vce_hoerschaden_max + " m");
   document.getElementById("vce_umfallen_div").innerHTML = ("wiederherstellbare Sch&auml;den an Geb&auml;uden und hinfallen von Menschen von " + vce_umfallen_min + " m bis " + vce_umfallen_max + " m");
   document.getElementById("vce_trommelfell_div").innerHTML = ("schwere Sch&auml;den an Geb&auml;uden und Industrieanlagen und Platzen des Trommelfells von " + vce_trommelfell_min + " m bis " + vce_trommelfell_max + " m");
   document.getElementById("vce_verwuestung_div").innerHTML = ("totale Verw&uuml;stung, Langzeitsch&auml;den bis Tod von " + vce_verwuestung_min + " m bis " + vce_verwuestung_max + " m");
}

</script>
</p><form name="vce_form">
<p>Mit dieser Berechnung können Sie ermitteln, welche Auswirkung die Explosion einer Wolke brennbarer Dämpfe hat, beispielsweise in Folge eines BLEVEs. Die Berechnung ist nur für Propan und/oder Butan gültig!

<b>ENTWEDER Masse ODER Volumen einsetzen!</b></p>
<table>
<tbody>
<tr>
<td>Masse der freigesetzten Gasmenge</td>
<td> <input name="input_vce_form_m" size="10" value="" type="text"> in kg</td>
</tr>
<tr>
<td>Volumen der freigesetzten Gasmenge</td>
<td><input name="input_vce_form_v" size="10" value="" type="text"> in m³</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_max_schaummenge() und output_max_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Auswirkungen berechnen " onclick="input_vce(),output_vce()" type="button"></p>
</form>

<div id="vce_ueberschrift_div"></div>
<div id="vce_eingabe_div"></div>
<div id="vce_scheiben_div"></div>
<div id="vce_hoerschaden_div"></div>
<div id="vce_umfallen_div"></div>
<div id="vce_trommelfell_div"></div>
<div id="vce_verwuestung_div"></div>
