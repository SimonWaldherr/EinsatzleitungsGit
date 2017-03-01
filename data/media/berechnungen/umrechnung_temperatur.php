<script language="JavaScript">

// Globale Variablen
var umrechnung_temperatur_eingabe;

// Ein-/Ausgabe-Funktionen
function input_umrechnung_temperatur(){
    umrechnung_temperatur_eingabe = document.umrechnung_temperatur_form.input_umrechnung_temperatur_eingabe.value;
    umrechnung_temperatur_eingabe = umrechnung_temperatur_eingabe.replace(/,/, ".");
    umrechnung_temperatur_eingabe = parseFloat(umrechnung_temperatur_eingabe);
}

function output_umrechnung_temperatur(){
   var umrechnung_temperatur_celsius,umrechnung_temperatur_kelvin,umrechnung_temperatur_fahrenheit;
   document.getElementById("umrechnung_temperatur_ueberschrift").innerHTML = ("<b>Ergebnisse der Umrechnung der Temperatur</b>");
   if (document.umrechnung_temperatur_form.input_umrechnung_temperatur_einheit[0].checked == true)
   {
   umrechnung_temperatur_celsius = Math.round( umrechnung_temperatur_eingabe* 100 ) / 100;
   umrechnung_temperatur_kelvin = Math.round((umrechnung_temperatur_eingabe + 273.15) * 100 ) / 100;
   umrechnung_temperatur_fahrenheit = Math.round(((umrechnung_temperatur_eingabe * (9/5) ) + 32) * 100 ) / 100;
   }
   else if (document.umrechnung_temperatur_form.input_umrechnung_temperatur_einheit[1].checked == true)
   {
   umrechnung_temperatur_celsius = Math.round((umrechnung_temperatur_eingabe - 273.15) * 100 ) / 100;
   umrechnung_temperatur_kelvin = Math.round( umrechnung_temperatur_eingabe * 100 ) / 100;
   umrechnung_temperatur_fahrenheit = Math.round((umrechnung_temperatur_eingabe * (9/5) - 459.67) * 100 ) / 100;
   }
   else if (document.umrechnung_temperatur_form.input_umrechnung_temperatur_einheit[2].checked == true)
   {
   umrechnung_temperatur_celsius = Math.round(((umrechnung_temperatur_eingabe - 32)*(5/9) )* 100 ) / 100;
   umrechnung_temperatur_kelvin = Math.round((umrechnung_temperatur_eingabe + 459.67)*(5/9) * 100 ) / 100;
   umrechnung_temperatur_fahrenheit = Math.round( umrechnung_temperatur_eingabe * 100 ) / 100;
   }
document.getElementById("umrechnung_temperatur_div").innerHTML = (umrechnung_temperatur_celsius + " °Celsius = " + umrechnung_temperatur_kelvin + " Kelvin = " + umrechnung_temperatur_fahrenheit + " °Fahrenheit");
}


</script>
<form name="umrechnung_temperatur_form">
<table>
<tbody>
<tr>
<td>Temperatur: <input name="input_umrechnung_temperatur_eingabe" size="10" value="" type="text"> </td>
<td> <input type="radio" name="input_umrechnung_temperatur_einheit" value="celsius" checked> °Celsius <br />
     <input type="radio" name="input_umrechnung_temperatur_einheit" value="kelvin"> Kelvin <br />
     <input type="radio" name="input_umrechnung_temperatur_einheit" value="fahrenheit"> °Fahrenheit <br />
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Temperatur umrechnen " onclick="input_umrechnung_temperatur(),output_umrechnung_temperatur()" type="button" ></p>
</form>

<div id="umrechnung_temperatur_ueberschrift"></div>
<div id="umrechnung_temperatur_div"></div>
