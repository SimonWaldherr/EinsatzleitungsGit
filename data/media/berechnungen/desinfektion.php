<script language="JavaScript">

// Globale Variablen
var desinfektion_v,desinfektion_c_wirk,desinfektion_c_konzentrat;

// Ein-/Ausgabe-Funktionen
function input_desinfektion(){
    desinfektion_v = document.desinfektion_form.input_desinfektion_v.value;
    desinfektion_v = desinfektion_v.replace(/,/, ".");
    desinfektion_v = Math.round(desinfektion_v * 100) / 100;
    desinfektion_c_wirk = document.desinfektion_form.input_desinfektion_c_wirk.value;
    desinfektion_c_wirk = desinfektion_c_wirk.replace(/,/, ".");
    desinfektion_c_wirk = Math.round(desinfektion_c_wirk * 100) / 10000;
    desinfektion_c_konzentrat = document.desinfektion_form.input_desinfektion_c_konzentrat.value;
    desinfektion_c_konzentrat = desinfektion_c_konzentrat.replace(/,/, ".");
    desinfektion_c_konzentrat = Math.round(desinfektion_c_konzentrat * 100) / 10000;
}


function output_desinfektion(){
   var desinfektion_v_konzentrat,desinfektion_wasser;
if (desinfektion_v <= 0)
  {
  alert("Die Menge der Gebrauchslösung darf nicht kleiner oder gleich 0 Liter sein!");
  }
else if (desinfektion_c_wirk <= 0)
  {
  alert("Die erforderliche wirksame Konzentration kann nicht kleiner oder gleich 0% sein!");
  }
else if (desinfektion_c_wirk > 100)
  {
  alert("Die erforderliche wirksame Konzentration kann nicht über 100% liegen!");
  }
else if (desinfektion_c_konzentrat <= 0)
  {
  alert("Der wirksame Anteil im Konzentrat kann nicht kleiner oder gleich 0% sein!");
  }
else if (desinfektion_c_konzentrat > 100)
  {
  alert("Der wirksame Anteil im Konzentrat kann nicht über 100% liegen!");
  }
else 
  {
   document.getElementById("desinfektion_ueberschrift").innerHTML = ("<b>Ergebnisse der Desinfektionsmitte-Konzentrations-Berechnung</b>");
   desinfektion_v_konzentrat = Math.round( ( desinfektion_v * desinfektion_c_wirk / desinfektion_c_konzentrat ) * 100 ) / 100;
   document.getElementById("desinfektion_konzentrat_div").innerHTML = ("Erforderliche Menge des Konzentrats: <b>" + desinfektion_v_konzentrat + " Liter</b>");
   desinfektion_wasser = desinfektion_v - desinfektion_v_konzentrat;
   document.getElementById("desinfektion_wasser_div").innerHTML = ("Erforderliche Menge Wasser: <b>" + desinfektion_wasser + " Liter</b>");
  }
}


</script>
<form name="desinfektion_form">
<p>Berechnungsbeispiel:</p>
<p>Sie ben&ouml;tigen f&uuml;r die Fl&auml;chendesinfektion eine Peressigsäure-Konzentration von 2% und möchten 50 Liter Gebrauchslösung herstellen. Als Konzentrat zur Herstellung der Desinfektionslösung steht Ihnen Wofasteril® zur Verfügung, welches einen Peressigsäure-Anteil von 40% besitzt. Im ersten Feld tragen Sie also 50 Liter ein, im zweiten Feld 2% für die wirksame Peressigsäure-Konzentration und im dritten Feld 40% für den Anteil an Peressigsäure der sich im Konzentrat befindet.</p>
<p>Lassen Sie im untersten Feld 100% eingetragen falls die wirksame Konzentration bereits direkt auf Ihr verwendetes Desinfektionsmittel bezogen ist oder das Desinfektionsmittel unverdünnt ist.</p>
<p>Alle Ergebnisse werden auf volle 10 ml gerundet</p>
<table>
<tbody>
<tr>
<td>gew&uuml;nschte Menge der Gebrauchsl&ouml;sung: </td>
<td> <input name="input_desinfektion_v" size="10" value="" type="text"> Liter </td>
</tr>
<tr>
<td>erforderliche wirksame Konzentration: </td>
<td> <input name="input_desinfektion_c_wirk" size="10" value="" type="text"> % </td>
</tr>
<tr>
<td>Anteil des wirksamen Stoffs im Konzentrat: </td>
<td> <input name="input_desinfektion_c_konzentrat" size="10" value="100" type="text"> % </td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Konzentration berechnen " onclick="input_desinfektion(),output_desinfektion()" type="button" ></p>
</form>

<div id="desinfektion_ueberschrift"></div>
<div id="desinfektion_konzentrat_div"></div>
<div id="desinfektion_wasser_div"></div>
