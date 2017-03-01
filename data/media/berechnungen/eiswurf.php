<script language="JavaScript">

// Globale Variablen
var eiswurf_d,eiswurf_h,eiswurf_v;

// Ein-/Ausgabe-Funktionen
function input_eiswurf(){
    eiswurf_d = document.eiswurf_form.input_eiswurf_d.value;
    eiswurf_d = eiswurf_d.replace(/,/, ".");
    eiswurf_d = parseInt(eiswurf_d);
    eiswurf_h = document.eiswurf_form.input_eiswurf_h.value;
    eiswurf_h = eiswurf_h.replace(/,/, ".");
    eiswurf_h = parseInt(eiswurf_h);
    eiswurf_v = document.eiswurf_form.input_eiswurf_v.value;
    eiswurf_v = eiswurf_v.replace(/,/, ".");
    eiswurf_v = Math.abs(eiswurf_v);
}


function output_eiswurf(){
   var eiswurf_wurfweite,eiswurf_fallweite;
if (eiswurf_d <= 0)
  {
  alert("Der Rotorduchmesser kann nicht kleiner 0 sein!");
  }
else if (eiswurf_h <= 0)
  {
  alert("Die Nabenhöhe kann nicht kleiner 0 sein!");
  }
else if (eiswurf_h < eiswurf_d)
  {
  alert("Der Rotordurchmesser kann nicht größer als die Nabenhöhe sein!");
  }
else 
  {
   document.getElementById("eiswurf_ueberschrift").innerHTML = ("<b>Ergebnisse der Eiswurf- und Eisfallberechnung</b>");
   eiswurf_wurfweite = Math.round( ( eiswurf_d + eiswurf_h ) * 1.5 );
   document.getElementById("eiswurf_wurfweite_div").innerHTML = ("Wurfweite: <b>" + eiswurf_wurfweite + " m</b> (bei drehendem Rotor)");
   if (eiswurf_v > 0)
   {
   eiswurf_fallweite = Math.round( eiswurf_v * ((( eiswurf_d * 0.5 ) + eiswurf_h) / 15 ));
   document.getElementById("eiswurf_fallweite_div").innerHTML = ("Fallweite: <b>" + eiswurf_fallweite + " m</b> (bei stehendem Rotor)");
   }
}
}


</script>
<form name="eiswurf_form">
<p>Mithilfe dieser Berechnung können Sie ermitteln, in welcher Entfernung Sie den Gefahrenbereich festlegen müssen um nicht durch Eisfall (stehender Rotor) oder Eiswurf (drehender Rotor) gefährdet zu werden.</p>
<table>
<tbody>
<tr>
<td>Rotordurchmesser: </td>
<td> <input name="input_eiswurf_d" size="10" value="" type="text"> m </td>
<td> &nbsp; <td>
</tr>
<tr>
<td>Nabenh&ouml;he: </td>
<td> <input name="input_eiswurf_h" size="10" value="" type="text"> m </td>
<td> &nbsp; <td>
</tr>
<tr>
<td><a href="/doku.php?id=allgemein:windstaerke" class="wikilink1">Windgeschwindigkeit</a>: </td>
<td> <input name="input_eiswurf_v" size="10" value="" type="text"> m/s</td>
<td> Eingabe nicht erforderlich bei drehendem Rotor. <td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Eiswurf und Eisfall berechnen " onclick="input_eiswurf(),output_eiswurf()" type="button" ></p>
</form>

<div id="eiswurf_ueberschrift"></div>
<div id="eiswurf_fallweite_div"></div>
<div id="eiswurf_wurfweite_div"></div>
