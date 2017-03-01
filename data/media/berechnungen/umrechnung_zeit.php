<script language="JavaScript">

// Globale Variablen
var umrechnung_zeit_eingabe;

// Ein-/Ausgabe-Funktionen
function input_umrechnung_zeit(){
    umrechnung_zeit_eingabe=document.umrechnung_zeit_form.input_umrechnung_zeit_eingabe.value;
    umrechnung_zeit_eingabe = umrechnung_zeit_eingabe.replace(/,/, ".");
}


function output_umrechnung_zeit(){
   var umrechnung_zeit_s,umrechnung_zeit_min,umrechnung_zeit_h,umrechnung_zeit_d,umrechnung_zeit_a;
if (umrechnung_zeit_eingabe == 0)
  {
  alert("Es wurde kein Wert zum Umrechnen eingegeben!");
  }
else 
  {
   document.getElementById("umrechnung_zeit_ueberschrift").innerHTML = ("<b>Ergebnisse der Umrechnung der Zeitdauer</b>");
   if (document.umrechnung_zeit_form.input_umrechnung_zeit_einheit[0].checked == true)
   {
   umrechnung_zeit_s = umrechnung_zeit_eingabe;
   umrechnung_zeit_min = Math.round((umrechnung_zeit_eingabe / 60) * 1000000) / 1000000;
   umrechnung_zeit_h = Math.round((umrechnung_zeit_eingabe / ( 60 * 60 )) * 1000000) / 1000000;
   umrechnung_zeit_d = Math.round((umrechnung_zeit_eingabe / ( 60 * 60 * 24 )) * 1000000) / 1000000;
   umrechnung_zeit_a = Math.round((umrechnung_zeit_eingabe / ( 60 * 60 * 24 * 365 )) * 1000000) / 1000000;
   }
   else if (document.umrechnung_zeit_form.input_umrechnung_zeit_einheit[1].checked == true)
   {
   umrechnung_zeit_s = umrechnung_zeit_eingabe * 60;
   umrechnung_zeit_min = umrechnung_zeit_eingabe;
   umrechnung_zeit_h = Math.round((umrechnung_zeit_eingabe / 60) * 1000000) / 1000000;
   umrechnung_zeit_d = Math.round((umrechnung_zeit_eingabe / ( 60 * 24 )) * 1000000) / 1000000;
   umrechnung_zeit_a = Math.round((umrechnung_zeit_eingabe / ( 60 * 24 * 365)) * 1000000) / 1000000;
   }
   else if (document.umrechnung_zeit_form.input_umrechnung_zeit_einheit[2].checked == true)
   {
   umrechnung_zeit_s = umrechnung_zeit_eingabe * 60 * 60;
   umrechnung_zeit_min = umrechnung_zeit_eingabe * 60;
   umrechnung_zeit_h = umrechnung_zeit_eingabe;
   umrechnung_zeit_d = Math.round((umrechnung_zeit_eingabe / 24) * 1000000) / 1000000;
   umrechnung_zeit_a = Math.round((umrechnung_zeit_eingabe / ( 24 * 365)) * 1000000) / 1000000;
   }
   else if (document.umrechnung_zeit_form.input_umrechnung_zeit_einheit[3].checked == true)
   {
   umrechnung_zeit_s = umrechnung_zeit_eingabe * 60 * 60 * 24;
   umrechnung_zeit_min = umrechnung_zeit_eingabe * 60 * 24 ;
   umrechnung_zeit_h = umrechnung_zeit_eingabe * 24;
   umrechnung_zeit_d = umrechnung_zeit_eingabe;
   umrechnung_zeit_a = Math.round((umrechnung_zeit_eingabe / 365) * 1000000) / 1000000;
   }
   else if (document.umrechnung_zeit_form.input_umrechnung_zeit_einheit[4].checked == true)
   {
   umrechnung_zeit_s = umrechnung_zeit_eingabe *  60 * 60 * 24 * 365;
   umrechnung_zeit_min = umrechnung_zeit_eingabe * 60 * 24 * 365;
   umrechnung_zeit_h = umrechnung_zeit_eingabe * 24 * 365;
   umrechnung_zeit_d = umrechnung_zeit_eingabe * 365;
   umrechnung_zeit_a = umrechnung_zeit_eingabe;
   }
document.getElementById("umrechnung_zeit_div").innerHTML = (umrechnung_zeit_s + " Sekunde(n) = " + umrechnung_zeit_min + " Minute(n) = " + umrechnung_zeit_h + " Stunde(n) = " + umrechnung_zeit_d + " Tag(e) = "  + umrechnung_zeit_a + " Jahr(e)");
}
}


</script>
<form name="umrechnung_zeit_form">
<table>
<tbody>
<tr>
<td>Zeitdauer: <input name="input_umrechnung_zeit_eingabe" size="10" value="" type="text"> </td>
<td> <input type="radio" name="input_umrechnung_zeit_einheit" value="zeit_s" checked> Sekunde(n) <br />
     <input type="radio" name="input_umrechnung_zeit_einheit" value="zeit_min"> Minute(n) <br />
     <input type="radio" name="input_umrechnung_zeit_einheit" value="zeit_h"> Stunde(n) <br />
     <input type="radio" name="input_umrechnung_zeit_einheit" value="zeit_d"> Tag(e) <br />
     <input type="radio" name="input_umrechnung_zeit_einheit" value="zeit_a"> Jahr(e) </td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Zeit umrechnen " onclick="input_umrechnung_zeit(),output_umrechnung_zeit()" type="button" >&nbsp;(auf 6 Nachkommastellen gerundet)</p>
</form>

<div id="umrechnung_zeit_ueberschrift"></div>
<div id="umrechnung_zeit_div"></div>
