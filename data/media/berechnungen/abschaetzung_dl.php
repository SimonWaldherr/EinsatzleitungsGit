<script language="JavaScript">

// Globale Variablen
var absch_dl_a,absch_dl_m;

// Ein-/Ausgabe-Funktionen
function input_absch_dl(){
    absch_dl_a=document.absch_dl_form.input_absch_dl_a.value;
    absch_dl_m=document.absch_dl_form.input_absch_dl_m.value;
    absch_dl_a = absch_dl_a.replace(/,/, ".");
    absch_dl_m = absch_dl_m.replace(/,/, ".");
}


function output_absch_dl(){
   var absch_dl_ergebnis,absch_dl_mbq;
if (absch_dl_a <= 0)
  {
  alert("Der Wert für die Aktivität muss größer als 0 sein!");
  }
else if (absch_dl_m <= 0)
  {
  alert("Der Abstand zum Strahler muss größer als 0 sein!");
  }
else
  {
   if (document.absch_dl_form.input_absch_dl_einheit[0].checked == true)
   {
   absch_dl_mbq = absch_dl_a / 1000000;
   absch_dl_einheit = "Bq";
   }
   else if (document.absch_dl_form.input_absch_dl_einheit[1].checked == true)
   {
   absch_dl_mbq = absch_dl_a / 1000;
   absch_dl_einheit = "kBq";
   }
   else if (document.absch_dl_form.input_absch_dl_einheit[2].checked == true)
   {
   absch_dl_mbq = absch_dl_a;
   absch_dl_einheit = "MBq";
   }
   else if (document.absch_dl_form.input_absch_dl_einheit[3].checked == true)
   {
   absch_dl_mbq = absch_dl_a * 1000;
   absch_dl_einheit = "GBq";
   }
   else if (document.absch_dl_form.input_absch_dl_einheit[4].checked == true)
   {
   absch_dl_mbq = absch_dl_a * 1000000;
   absch_dl_einheit = "TBq";
   }
   document.getElementById("absch_dl_ueberschrift").innerHTML = ("<b>Ergebnisse der Absch&auml;tzung der Dosisleistung</b>");
   absch_dl_ergebnis = Math.ceil( absch_dl_mbq / ( 4 * Math.pow(absch_dl_m,2) ) );
   document.getElementById("absch_dl_div").innerHTML = ("Dosisleistung in " + absch_dl_m + " m Abstand bei einer Aktivit&auml;t von " + absch_dl_a + " " + absch_dl_einheit + ": <b>" + absch_dl_ergebnis + " µSv/h = " + absch_dl_ergebnis/1000 + " mSv/h</b>");
   absch_dl_grenze = Math.ceil( Math.sqrt( absch_dl_mbq / ( 4 * 25 ) ) );
   document.getElementById("absch_dl_grenze_div").innerHTML = ("Die Grenze zum Gefahrenbereich bei 25 µSv/h ist in einem Abstand von <b>" + absch_dl_grenze + " m </b> zum Strahler erreicht. ");
}
}


</script>
<form name="absch_dl_form">
<p>Mit dieser Berechnung können Sie abschätzen, wie hoch die Dosisleistung in einem bestimmten Abstand zu einem Strahler ist, wenn Sie dessen Aktivität kennen. Dabei wird davon ausgegangen, dass sich nur Luft zwischen dem Strahler und dem eingegeben Abstand befindet, Mauern u.ä. senken die Dosisleistung selbstverständlich ab.</p>
<table>
<tbody>
<tr>
<td style="vertical-align: middle;">Aktivit&auml;t:</td>
<td style="vertical-align: middle;"><input name="input_absch_dl_a" size="10" value="" type="text"></td>
<td> <input type="radio" name="input_absch_dl_einheit" value="bq" checked> Bq <br />
     <input type="radio" name="input_absch_dl_einheit" value="kbq"> kBq <br />
     <input type="radio" name="input_absch_dl_einheit" value="mbq"> MBq <br />
     <input type="radio" name="input_absch_dl_einheit" value="gbq"> GBq <br />
     <input type="radio" name="input_absch_dl_einheit" value="tbq"> TBq </td>
</tr>
<tr>
<td>Abstand: </td>
<td> <input name="input_absch_dl_m" size="10" value="" type="text"></td>
<td> m</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Dosisleistung absch&auml;tzen " onclick="input_absch_dl(),output_absch_dl()" type="button" > (Auf ganze µSv/h gerundet)</p>
</form>

<div id="absch_dl_ueberschrift"></div>
<div id="absch_dl_div"></div>
<div id="absch_dl_grenze_div"></div>
