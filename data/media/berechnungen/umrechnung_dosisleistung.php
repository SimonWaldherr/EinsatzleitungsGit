<script language="JavaScript">

// Globale Variablen
var umrechnung_dosisleistung_eingabe;

// Ein-/Ausgabe-Funktionen
function input_umrechnung_dosisleistung(){
    umrechnung_dosisleistung_eingabe=document.umrechnung_dosisleistung_form.input_umrechnung_dosisleistung_eingabe.value;
    umrechnung_dosisleistung_eingabe = umrechnung_dosisleistung_eingabe.replace(/,/, ".");
}

function output_umrechnung_dosisleistung(){
   var umrechnung_dosisleistung_mikrosv,umrechnung_dosisleistung_millisv,umrechnung_dosisleistung_sv;
if (umrechnung_dosisleistung_eingabe <= 0)
  {
  alert("Der eingegebene Wert muss größer als 0 sein!");
  }
else 
  {
   document.getElementById("umrechnung_dosisleistung_ueberschrift").innerHTML = ("<b>Ergebnisse der Umrechnung der Dosisleistung</b>");
   if (document.umrechnung_dosisleistung_form.input_umrechnung_dosisleistung_einheit[0].checked == true)
   {
   umrechnung_dosisleistung_mikrosv = umrechnung_dosisleistung_eingabe;
   umrechnung_dosisleistung_millisv = umrechnung_dosisleistung_eingabe / 1000;
   umrechnung_dosisleistung_sv = umrechnung_dosisleistung_eingabe / 1000000;
   }
   else if (document.umrechnung_dosisleistung_form.input_umrechnung_dosisleistung_einheit[1].checked == true)
   {
   umrechnung_dosisleistung_mikrosv = umrechnung_dosisleistung_eingabe * 1000;
   umrechnung_dosisleistung_millisv = umrechnung_dosisleistung_eingabe;
   umrechnung_dosisleistung_sv = umrechnung_dosisleistung_eingabe / 1000;
   }
   else if (document.umrechnung_dosisleistung_form.input_umrechnung_dosisleistung_einheit[2].checked == true)
   {
   umrechnung_dosisleistung_mikrosv = umrechnung_dosisleistung_eingabe * 1000000;
   umrechnung_dosisleistung_millisv = umrechnung_dosisleistung_eingabe * 1000;
   umrechnung_dosisleistung_sv = umrechnung_dosisleistung_eingabe;
   }
document.getElementById("umrechnung_dosisleistung_div").innerHTML = (umrechnung_dosisleistung_mikrosv + " µSv/h = " + umrechnung_dosisleistung_millisv + " mSv/h = " + umrechnung_dosisleistung_sv + " Sv/h");
}
}


</script>
<form name="umrechnung_dosisleistung_form">
<p>Mit der folgenden Berechnung können Sie den Wert einer Dosisleistung in µSv/h, mSv/h und Sv/h umrechnen.</p>
<table>
<tbody>
<tr>
<td>Dosisleistung: <input name="input_umrechnung_dosisleistung_eingabe" size="10" value="" type="text"> </td>
<td> <input type="radio" name="input_umrechnung_dosisleistung_einheit" value="mikrosv" checked> µSv/h <br />
     <input type="radio" name="input_umrechnung_dosisleistung_einheit" value="millisv"> mSv/h <br />
     <input type="radio" name="input_umrechnung_dosisleistung_einheit" value="sv"> Sv/h <br />
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Dosisleistung umrechnen " onclick="input_umrechnung_dosisleistung(),output_umrechnung_dosisleistung()" type="button" ></p>
</form>

<div id="umrechnung_dosisleistung_ueberschrift"></div>
<div id="umrechnung_dosisleistung_div"></div>
