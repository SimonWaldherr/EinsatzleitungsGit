<script language="JavaScript">

// Globale Variablen
var umrechnung_geschwindigkeit_eingabe;

// Ein-/Ausgabe-Funktionen
function input_umrechnung_geschwindigkeit(){
    umrechnung_geschwindigkeit_eingabe=document.umrechnung_geschwindigkeit_form.input_umrechnung_geschwindigkeit_eingabe.value;
    umrechnung_geschwindigkeit_eingabe = umrechnung_geschwindigkeit_eingabe.replace(/,/, ".");
}


function output_umrechnung_geschwindigkeit(){
   var umrechnung_geschwindigkeit_ms,umrechnung_geschwindigkeit_kmh,umrechnung_geschwindigkeit_mph,umrechnung_geschwindigkeit_kn;
if (umrechnung_geschwindigkeit_eingabe == 0)
  {
  alert("Es wurde kein Wert zum Umrechnen eingegeben!");
  }
else 
  {
   document.getElementById("umrechnung_geschwindigkeit_ueberschrift").innerHTML = ("<b>Ergebnisse der Umrechnung der Geschwindigkeit</b>");
   if (document.umrechnung_geschwindigkeit_form.input_umrechnung_geschwindigkeit_einheit[0].checked == true)
   {
   umrechnung_geschwindigkeit_ms = Math.round(umrechnung_geschwindigkeit_eingabe * 1000) / 1000;
   umrechnung_geschwindigkeit_kmh = Math.round((umrechnung_geschwindigkeit_eingabe * 3.6) * 1000) / 1000;
   umrechnung_geschwindigkeit_mph = Math.round((umrechnung_geschwindigkeit_eingabe * 2.237) * 1000) / 1000;
   umrechnung_geschwindigkeit_kn = Math.round((umrechnung_geschwindigkeit_eingabe * 1.944) * 1000) / 1000;
   }
   else if (document.umrechnung_geschwindigkeit_form.input_umrechnung_geschwindigkeit_einheit[1].checked == true)
   {
   umrechnung_geschwindigkeit_ms = Math.round((umrechnung_geschwindigkeit_eingabe * 0.2778) * 1000) / 1000;
   umrechnung_geschwindigkeit_kmh = Math.round(umrechnung_geschwindigkeit_eingabe * 1000) / 1000;
   umrechnung_geschwindigkeit_mph = Math.round((umrechnung_geschwindigkeit_eingabe * 0.6214) * 1000) / 1000;
   umrechnung_geschwindigkeit_kn = Math.round((umrechnung_geschwindigkeit_eingabe * 0.540) * 1000) / 1000;
   }
   else if (document.umrechnung_geschwindigkeit_form.input_umrechnung_geschwindigkeit_einheit[2].checked == true)
   {
   umrechnung_geschwindigkeit_ms = Math.round((umrechnung_geschwindigkeit_eingabe * 0.44704) * 1000) / 1000;
   umrechnung_geschwindigkeit_kmh = Math.round((umrechnung_geschwindigkeit_eingabe * 1.609344) * 1000) / 1000;
   umrechnung_geschwindigkeit_mph = Math.round(umrechnung_geschwindigkeit_eingabe * 1000) / 1000;
   umrechnung_geschwindigkeit_kn = Math.round((umrechnung_geschwindigkeit_eingabe * 0.8690) * 1000) / 1000;
   }
   else if (document.umrechnung_geschwindigkeit_form.input_umrechnung_geschwindigkeit_einheit[3].checked == true)
   {
   umrechnung_geschwindigkeit_ms = Math.round((umrechnung_geschwindigkeit_eingabe * 0.5144) * 1000) / 1000;
   umrechnung_geschwindigkeit_kmh = Math.round((umrechnung_geschwindigkeit_eingabe * 1.852) * 1000) / 1000;
   umrechnung_geschwindigkeit_mph = Math.round((umrechnung_geschwindigkeit_eingabe * 1.151) * 1000) / 1000;
   umrechnung_geschwindigkeit_kn = Math.round(umrechnung_geschwindigkeit_eingabe * 1000) / 1000;
   }
document.getElementById("umrechnung_geschwindigkeit_div").innerHTML = (umrechnung_geschwindigkeit_ms + " m/s = " + umrechnung_geschwindigkeit_kmh + " km/h = " + umrechnung_geschwindigkeit_mph + " mph = " + umrechnung_geschwindigkeit_kn + " kn");
}
}


</script>
<form name="umrechnung_geschwindigkeit_form">
<table>
<tbody>
<tr>
<td>Geschwindigkeit: <input name="input_umrechnung_geschwindigkeit_eingabe" size="10" value="" type="text"> </td>
<td> <input type="radio" name="input_umrechnung_geschwindigkeit_einheit" value="geschwindigkeit_ms" checked> m/s (Meter pro Sekunde) <br />
     <input type="radio" name="input_umrechnung_geschwindigkeit_einheit" value="geschwindigkeit_kmh"> km/h (Kilometer pro Stunde) <br />
     <input type="radio" name="input_umrechnung_geschwindigkeit_einheit" value="geschwindigkeit_mph"> mph (Meilen pro Stunde) <br />
     <input type="radio" name="input_umrechnung_geschwindigkeit_einheit" value="geschwindigkeit_kn"> kn (Knoten bzw. Seemeilen pro Stunde)</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Geschwindigkeit umrechnen " onclick="input_umrechnung_geschwindigkeit(),output_umrechnung_geschwindigkeit()" type="button" >&nbsp;(auf 3 Nachkommastellen gerundet)</p>
</form>

<div id="umrechnung_geschwindigkeit_ueberschrift"></div>
<div id="umrechnung_geschwindigkeit_div"></div>
