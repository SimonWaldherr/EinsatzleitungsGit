<script language="JavaScript">

// Globale Variablen
var lineare_interpolation_y1,lineare_interpolation_y2,lineare_interpolation_x1,lineare_interpolation_x2,lineare_interpolation_x;

// Ein-/Ausgabe-Funktionen
function input_lineare_interpolation(){
    lineare_interpolation_y1 = document.lineare_interpolation_form.input_lineare_interpolation_y1.value;
    lineare_interpolation_y1 = lineare_interpolation_y1.replace(/,/, ".");
    lineare_interpolation_y2 = document.lineare_interpolation_form.input_lineare_interpolation_y2.value;
    lineare_interpolation_y2 = lineare_interpolation_y2.replace(/,/, ".");
    lineare_interpolation_x1 = document.lineare_interpolation_form.input_lineare_interpolation_x1.value;
    lineare_interpolation_x1 = lineare_interpolation_x1.replace(/,/, ".");
    lineare_interpolation_x2 = document.lineare_interpolation_form.input_lineare_interpolation_x2.value;
    lineare_interpolation_x2 = lineare_interpolation_x2.replace(/,/, ".");
    lineare_interpolation_x = document.lineare_interpolation_form.input_lineare_interpolation_x.value;
    lineare_interpolation_x = lineare_interpolation_x.replace(/,/, ".");
}


function output_lineare_interpolation(){
   var lineare_interpolation_y;
   document.getElementById("lineare_interpolation_ueberschrift").innerHTML = ("<b>Ergebnis der Interpolation</b>");
   lineare_interpolation_y = parseFloat(lineare_interpolation_y1) + parseFloat( ( lineare_interpolation_y2 - lineare_interpolation_y1) / (lineare_interpolation_x2 - lineare_interpolation_x1)  * (lineare_interpolation_x - lineare_interpolation_x1) ) ;
   document.getElementById("lineare_interpolation_div").innerHTML = ("Funktionswert von x=" + lineare_interpolation_x + ": <b>y=" + lineare_interpolation_y + "</b>" );
}


</script>
<form name="lineare_interpolation_form">
<p>Diese Berechnung ermittelt den Wert einer <b>linearen, unbekannten Funktion</b>, also einer Geraden, wenn ein größerer und ein kleinerer Funktionswert bekannt sind.</p>

<table>
<tbody>
<tr>
<td>x-Wert</td><td>2</td><td>4</td><td>6</td><td>8</td>
</tr>
<tr>
<td>y-Wert</td><td>6</td><td>12</td><td>18</td><td>24</td>
</tr>
</tbody>
</table>

<p>Ein Beispiel:<br />
Ihnen liegt eine Tabelle vor, in der für verschiedene x-Werte zugehörige y-Werte gegeben sind. Für den von Ihnen gesuchten x-Wert ist allerdings kein y-Wert angegeben, jedoch gibt es ein kleineres und ein größeres Wertepaar. Diese beiden Wertepaare können Sie nun benutzen, um den y-Wert für den von Ihnen gesuchten x-Wert zu berechnen. Sehen Sie sich obige Tabelle an.</p>
<p>Sie suchen den y-Wert für den x-Wert 5. Geben sie dafür ein: x1=4, y1=12, x2=6, y2=18, x=5.<br />
Als Ergebnis erhalten Sie den y-Wert 15.</p>
<table>
<tbody>
<tr>
<td>x1: </td>
<td> <input name="input_lineare_interpolation_x1" size="10" value="" type="text"> </td>
</tr>
<tr>
<td>y1: </td>
<td> <input name="input_lineare_interpolation_y1" size="10" value="" type="text"> </td>
</tr>
<tr>
<td>x2: </td>
<td> <input name="input_lineare_interpolation_x2" size="10" value="" type="text"> </td>
</tr>
<tr>
<td>y2: </td>
<td> <input name="input_lineare_interpolation_y2" size="10" value="" type="text"> </td>
</tr>
<tr>
<td>x: </td>
<td> <input name="input_lineare_interpolation_x" size="10" value="" type="text"> </td>
</tr>
</tbody>
</table>


<p><input value=" interpolieren " onclick="input_lineare_interpolation(),output_lineare_interpolation()" type="button" > </p>
</form>

<div id="lineare_interpolation_ueberschrift"></div>
<div id="lineare_interpolation_div"></div>
