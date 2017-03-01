<script language="JavaScript">

// Globale Variablen
var bleve_feuerball_m, bleve_feuerball_v, bleve_feuerball_b;

// Ein-/Ausgabe-Funktionen
function input_bleve_feuerball()
{
    bleve_feuerball_m = document.bleve_feuerball_form.input_bleve_feuerball_form_m.value;
    bleve_feuerball_v = document.bleve_feuerball_form.input_bleve_feuerball_form_v.value;
    bleve_feuerball_b = document.bleve_feuerball_form.input_bleve_feuerball_form_b.value;
    bleve_feuerball_m = bleve_feuerball_m.replace(/,/, ".");
    bleve_feuerball_v = bleve_feuerball_v.replace(/,/, ".");
    bleve_feuerball_b = bleve_feuerball_b.replace(/,/, ".");
}

function output_bleve_feuerball(){
   var bleve_feuerball_r, bleve_feuerball_t;
// Überprüfung ob nicht fälschlicherweise 2 Werte eingegeben wurden
if (bleve_feuerball_m*bleve_feuerball_v != 0)
  {
  alert("ENTWEDER Masse ODER Volumen und Befüllungsgrad einsetzen!");
  }
else if (bleve_feuerball_m*bleve_feuerball_v < 0)
  {
  alert("Der eingegebene Wert darf nicht kleiner 0 sein!");
  }
else if (bleve_feuerball_m != 0)
  {
  bleve_feuerball_r = Math.round(29*Math.pow(bleve_feuerball_m,(1/3)));
  bleve_feuerball_t = Math.round(4.5*Math.pow(bleve_feuerball_m,(1/3)));
  }
else if (bleve_feuerball_v != 0)
  {
  if (bleve_feuerball_v*bleve_feuerball_b != 0)
     {
     bleve_feuerball_r = Math.round(29*Math.pow(((0.5*bleve_feuerball_v*bleve_feuerball_b)/100),(1/3)));
     bleve_feuerball_t = Math.round(4.5*Math.pow(((0.5*bleve_feuerball_v*bleve_feuerball_b)/100),(1/3)));
     }
  else
     {
     alert("Volumen und Befüllungsgrad einsetzen!");
     }
  }
else 
  {
  alert("Es wurden keine Werte eingegeben!");
  }
// Ausgabe
   document.getElementById("bleve_feuerball_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Berechnung des Feuerballs bei einem BLEVE</b>");
   document.getElementById("bleve_feuerball_r_div").innerHTML = ("Radius des Feuerballs " + bleve_feuerball_r + " m ");
   document.getElementById("bleve_feuerball_t_div").innerHTML = ("Zeitdauer des Feuerballs " + bleve_feuerball_t + " s ");
}

</script>
</p><form name="bleve_feuerball_form">
<p>Mit dieser Berechnung können Sie ermitteln, wie groß ein Feuerball bei einem BLEVE mit der entsprechenden Menge Flüssigkeit ist und wie lange dieser andauert.</p>
<p>ENTWEDER <b>Masse</b> ODER <b>Volumen und Befüllungsgrad</b> einsetzen!</p>
<table>
<tbody>
<tr>
<td>Masse M Propan/Butan</td>
<td> <input name="input_bleve_feuerball_form_m" size="10" value="" type="text"> in t</td>
</tr>
<tr>
<td>Volumen V des Behälters<br />Befüllungsgrad nicht vergessen!</td>
<td><input name="input_bleve_feuerball_form_v" size="10" value="" type="text"> in m³</td>
</tr>
<tr>
<td>Befüllungsgrad<br />nur bei Berechnung über Volumen erforderlich</td>
<td><input name="input_bleve_feuerball_form_b" size="10" value="" type="text"> %</td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_bleve_feuerball() und output_bleve_feuerball() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Feuerball berechnen " onclick="input_bleve_feuerball(),output_bleve_feuerball()" type="button"></p>
</form>

<div id="bleve_feuerball_ueberschrift_div"></div>
<div id="bleve_feuerball_r_div"></div>
<div id="bleve_feuerball_t_div"></div>
