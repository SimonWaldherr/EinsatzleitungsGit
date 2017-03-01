<script language="JavaScript">

// Globale Variablen
var volumen_quader_laenge,volumen_quader_breite,volumen_quader_hoehe,volumen_quader_dichte;

// Ein-/Ausgabe-Funktionen
function input_volumen_quader(){
    volumen_quader_laenge = document.volumen_quader_form.input_volumen_quader_laenge.value;
    volumen_quader_laenge = volumen_quader_laenge.replace(/,/, ".");
    volumen_quader_breite = document.volumen_quader_form.input_volumen_quader_breite.value;
    volumen_quader_breite = volumen_quader_breite.replace(/,/, ".");
    volumen_quader_hoehe = document.volumen_quader_form.input_volumen_quader_hoehe.value;
    volumen_quader_hoehe = volumen_quader_hoehe.replace(/,/, ".");
    volumen_quader_dichte = document.volumen_quader_form.input_volumen_quader_dichte.value;
    volumen_quader_dichte = volumen_quader_dichte.replace(/,/, ".");
}


function output_volumen_quader(){
   var volumen_quader_volumen,volumen_quader_oberflaeche,volumen_quader_gewicht;
if (volumen_quader_laenge <= 0)
  {
  alert("Die Länge darf nicht kleiner oder gleich 0 sein!");
  }
else if (volumen_quader_breite <= 0)
  {
  alert("Die Breite darf nicht kleiner oder gleich 0 sein!");
  }
else if (volumen_quader_hoehe <= 0)
  {
  alert("Die Höhe darf nicht kleiner oder gleich 0 sein!");
  }
else if (volumen_quader_dichte < 0)
  {
  alert("Die Dichte darf nicht kleiner als 0 sein!");
  }
else 
  {
   document.getElementById("volumen_quader_ueberschrift").innerHTML = ("<b>Ergebnisse der Quaderberechnung</b>");
   if (document.volumen_quader_form.input_volumen_quader_dichte_einheit[1].checked == true)
   {
   volumen_quader_dichte = volumen_quader_dichte * 1000;
   }
   volumen_quader_volumen = Math.round(( volumen_quader_laenge * volumen_quader_breite * volumen_quader_hoehe) * 1000 ) / 1000 ;
   document.getElementById("volumen_quader_volumen_div").innerHTML = ("Volumen: " + volumen_quader_volumen + " m³");
   volumen_quader_oberflaeche = Math.round(( 2 * volumen_quader_laenge * volumen_quader_breite + 2 * volumen_quader_laenge * volumen_quader_hoehe + 2 * volumen_quader_breite * volumen_quader_hoehe) * 1000 ) / 1000 ;
   document.getElementById("volumen_quader_oberflaeche_div").innerHTML = ("Oberfläche: " + volumen_quader_oberflaeche + " m²");
   if (volumen_quader_dichte > 0)
   {
   volumen_quader_gewicht = Math.round(( volumen_quader_dichte * volumen_quader_volumen) * 1000 ) / 1000 ;
   document.getElementById("volumen_quader_gewicht_div").innerHTML = ("Gewicht: " + volumen_quader_gewicht + " kg");
   }
}
}


</script>
<form name="volumen_quader_form">
<table>
<tbody>
<tr>
<td>L&auml;nge: </td>
<td> <input name="input_volumen_quader_laenge" size="10" value="" type="text"> m </td>
</tr>
<tr>
<td>Breite: </td>
<td> <input name="input_volumen_quader_breite" size="10" value="" type="text"> m </td>
</tr>
<tr>
<td>H&ouml;he: </td>
<td> <input name="input_volumen_quader_hoehe" size="10" value="" type="text"> m </td>
</tr>
<tr>
<td>[optional]<br />Dichte: </td>
<td> <input name="input_volumen_quader_dichte" size="10" value="" type="text"> </td>
<td><input type="radio" name="input_volumen_quader_dichte_einheit" value="kgm3" checked> kg/m³ <br />
    <input type="radio" name="input_volumen_quader_dichte_einheit" value="gcm3"> g/cm³<td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Quader berechnen " onclick="input_volumen_quader(),output_volumen_quader()" type="button" >&nbsp;(auf 3 Nachkommastellen gerundet)</p>
</form>

<div id="volumen_quader_ueberschrift"></div>
<div id="volumen_quader_volumen_div"></div>
<div id="volumen_quader_oberflaeche_div"></div>
<div id="volumen_quader_gewicht_div"></div>
