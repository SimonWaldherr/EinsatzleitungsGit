<script language="JavaScript">

// Globale Variablen
var leckrate_d;

// Ein-/Ausgabe-Funktionen
function input_leckrate()
{
    leckrate_d = document.leckrate_form.input_leckrate_form_d.value;
    leckrate_d = leckrate_d.replace(/,/, ".");
}

function output_leckrate(){
   var leckrate_s, leckrate_h;
if (leckrate_d == 0)
  {
  alert("Es wurde kein Wert eingegeben!");
  }
else 
  {
if (document.leckrate_form.input_leckrate_form_aggregat[0].checked == true)
  {
  leckrate_s = Math.round(0.1*Math.pow(leckrate_d,2));
  }
else if (document.leckrate_form.input_leckrate_form_aggregat[1].checked == true)
  {
  leckrate_s = Math.round(Math.pow(leckrate_d,2));
  }
leckrate_h = leckrate_s * 3600;
// Ausgabe
   document.getElementById("leckrate_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Absch&auml;tzung des spontan verdampften Anteils beim Austritt eines beliebigen Fl&uuml;ssiggases</b>");
   document.getElementById("leckrate_s_div").innerHTML = ("Leckrate " + leckrate_s + " kg/s ");
   document.getElementById("leckrate_h_div").innerHTML = ("Leckrate " + leckrate_h + " kg/h ");
}
}

</script>
</p><form name="leckrate_form">
<table>
<tbody>
<tr>
<td>Leckdurchmesser</td>
<td> <input name="input_leckrate_form_d" size="10" value="" type="text"> cm</td>
</tr>
<tr>
<td>Leck in der Gasphase</td>
<td><input type="radio" name="input_leckrate_form_aggregat" value="gas" checked></td>
</tr>
<tr>
<td>Leck in der Fl&uuml;ssigphase</td>
<td><input type="radio" name="input_leckrate_form_aggregat" value="fluessig"></td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_leckrate() und output_leckrate() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Leckrate absch&auml;tzen " onclick="input_leckrate(),output_leckrate()" type="button"></p>
</form>

<div id="leckrate_ueberschrift_div"></div>
<div id="leckrate_s_div"></div>
<div id="leckrate_h_div"></div>
