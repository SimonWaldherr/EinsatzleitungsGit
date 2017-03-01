<script language="JavaScript">

// Globale Variablen
var umrechnung_aktivitaet_eingabe;

// Ein-/Ausgabe-Funktionen
function input_umrechnung_aktivitaet(){
    umrechnung_aktivitaet_eingabe=document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_eingabe.value;
    umrechnung_aktivitaet_eingabe = umrechnung_aktivitaet_eingabe.replace(/,/, ".");
}


function output_umrechnung_aktivitaet(){
   var umrechnung_aktivitaet_bq,umrechnung_aktivitaet_mbq,umrechnung_aktivitaet_gbq,umrechnung_aktivitaet_tbq;
if (umrechnung_aktivitaet_eingabe <= 0)
  {
  alert("Der eingegebene Wert muss größer als 0 sein!");
  }
else 
  {
   document.getElementById("umrechnung_aktivitaet_ueberschrift").innerHTML = ("<b>Ergebnisse der Umrechnung der Aktivit&auml;t</b>");
   if (document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_einheit[0].checked == true)
   {
   umrechnung_aktivitaet_bq = umrechnung_aktivitaet_eingabe;
   umrechnung_aktivitaet_kbq = umrechnung_aktivitaet_eingabe / 1000;
   umrechnung_aktivitaet_mbq = umrechnung_aktivitaet_eingabe / 1000000;
   umrechnung_aktivitaet_gbq = umrechnung_aktivitaet_eingabe / 1000000000;
   umrechnung_aktivitaet_tbq = umrechnung_aktivitaet_eingabe / 1000000000000;
   }
   else if (document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_einheit[1].checked == true)
   {
   umrechnung_aktivitaet_bq = umrechnung_aktivitaet_eingabe * 1000;
   umrechnung_aktivitaet_kbq = umrechnung_aktivitaet_eingabe;
   umrechnung_aktivitaet_mbq = umrechnung_aktivitaet_eingabe / 1000;
   umrechnung_aktivitaet_gbq = umrechnung_aktivitaet_eingabe / 1000000;
   umrechnung_aktivitaet_tbq = umrechnung_aktivitaet_eingabe / 1000000000;
   }
   else if (document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_einheit[2].checked == true)
   {
   umrechnung_aktivitaet_bq = umrechnung_aktivitaet_eingabe * 1000000;
   umrechnung_aktivitaet_kbq = umrechnung_aktivitaet_eingabe * 1000;
   umrechnung_aktivitaet_mbq = umrechnung_aktivitaet_eingabe;
   umrechnung_aktivitaet_gbq = umrechnung_aktivitaet_eingabe / 1000;
   umrechnung_aktivitaet_tbq = umrechnung_aktivitaet_eingabe / 1000000;
   }
   else if (document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_einheit[3].checked == true)
   {
   umrechnung_aktivitaet_bq = umrechnung_aktivitaet_eingabe * 1000000000;
   umrechnung_aktivitaet_kbq = umrechnung_aktivitaet_eingabe * 1000000;
   umrechnung_aktivitaet_mbq = umrechnung_aktivitaet_eingabe * 1000;
   umrechnung_aktivitaet_gbq = umrechnung_aktivitaet_eingabe;
   umrechnung_aktivitaet_tbq = umrechnung_aktivitaet_eingabe / 1000;
   }
   else if (document.umrechnung_aktivitaet_form.input_umrechnung_aktivitaet_einheit[4].checked == true)
   {
   umrechnung_aktivitaet_bq = umrechnung_aktivitaet_eingabe * 1000000000000;
   umrechnung_aktivitaet_kbq = umrechnung_aktivitaet_eingabe * 1000000000;
   umrechnung_aktivitaet_mbq = umrechnung_aktivitaet_eingabe * 1000000;
   umrechnung_aktivitaet_gbq = umrechnung_aktivitaet_eingabe * 1000;
   umrechnung_aktivitaet_tbq = umrechnung_aktivitaet_eingabe;
   }
document.getElementById("umrechnung_aktivitaet_div").innerHTML = (umrechnung_aktivitaet_bq + " Bq = " + umrechnung_aktivitaet_kbq + " kBq = " + umrechnung_aktivitaet_mbq + " MBq = " + umrechnung_aktivitaet_gbq + " GBq = " + umrechnung_aktivitaet_tbq + " TBq");
}
}


</script>
<form name="umrechnung_aktivitaet_form">
<p>Mit der folgenden Berechnung können Sie den Wert einer Aktivität in Bq, MBq, GBq und TBq umrechnen.</p>
<table>
<tbody>
<tr>
<td>Aktivität: <input name="input_umrechnung_aktivitaet_eingabe" size="10" value="" type="text"> </td>
<td> <input type="radio" name="input_umrechnung_aktivitaet_einheit" value="bq" checked> Bq <br />
     <input type="radio" name="input_umrechnung_aktivitaet_einheit" value="kbq"> kBq <br />
     <input type="radio" name="input_umrechnung_aktivitaet_einheit" value="mbq"> MBq <br />
     <input type="radio" name="input_umrechnung_aktivitaet_einheit" value="gbq"> GBq <br />
     <input type="radio" name="input_umrechnung_aktivitaet_einheit" value="tbq"> TBq </td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Aktivit&auml;t umrechnen " onclick="input_umrechnung_aktivitaet(),output_umrechnung_aktivitaet()" type="button" ></p>
</form>

<div id="umrechnung_aktivitaet_ueberschrift"></div>
<div id="umrechnung_aktivitaet_div"></div>
