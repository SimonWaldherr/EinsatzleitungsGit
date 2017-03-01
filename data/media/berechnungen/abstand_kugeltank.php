<script language="JavaScript">

// Globale Variablen
var abstand_kugeltank_d;

// Ein-/Ausgabe-Funktionen
function input_abstand_kugeltank()
{
    abstand_kugeltank_d = document.abstand_kugeltank_form.input_abstand_kugeltank_form_d.value;
    abstand_kugeltank_d = abstand_kugeltank_d.replace(/,/, ".");
}

function output_abstand_kugeltank(){
   var abstand_kugeltank_gefaehrdungsradius;
if (abstand_kugeltank_d == 0)
  {
  alert("Es wurde kein Wert eingegeben!");
  }
else 
  {
abstand_kugeltank_gefaehrdungsradius = Math.round(77*Math.pow((4/3*3.14*Math.pow(abstand_kugeltank_d,3)*0.5),(1/3)));
// Ausgabe
   document.getElementById("abstand_kugeltank_ueberschrift_div").innerHTML = ("<b>Ergebnisse der Berechnung der Sicherheitsabst&auml;nde von Kugeltanks</b>");
   document.getElementById("abstand_kugeltank_gefaehrdungsradius_div").innerHTML = ("Gef&auml;hrdungsradius " + abstand_kugeltank_gefaehrdungsradius + " m ");
}
}

</script>
</p><form name="abstand_kugeltank_form">
<table>
<tbody>
<tr>
<td>Radius des Kugeltanks</td>
<td> <input name="input_abstand_kugeltank_form_d" size="10" value="" type="text"> m</td>
</tr>
</tbody>
</table>
<!-- Aufruf der Funktionen input_abstand_kugeltank() und output_abstand_kugeltank() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Sicherheitsabstand berechnen " onclick="input_abstand_kugeltank(),output_abstand_kugeltank()" type="button"></p>
</form>

<div id="abstand_kugeltank_ueberschrift_div"></div>
<div id="abstand_kugeltank_gefaehrdungsradius_div"></div>
