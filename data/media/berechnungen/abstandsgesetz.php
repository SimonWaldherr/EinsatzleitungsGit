<script language="JavaScript">

// Globale Variablen
var abstandsgesetz_mwdl,abstandsgesetz_mwas,abstandsgesetz_dl,abstandsgesetz_m;

// Ein-/Ausgabe-Funktionen
function input_abstand(){
    abstandsgesetz_mwdl=document.abstandsgesetz_form.input_abstandsgesetz_mwdl.value;
    abstandsgesetz_mwas=document.abstandsgesetz_form.input_abstandsgesetz_mwas.value;
    abstandsgesetz_dl=document.abstandsgesetz_form.input_abstandsgesetz_dl.value;
    abstandsgesetz_m=document.abstandsgesetz_form.input_abstandsgesetz_m.value;
    abstandsgesetz_mwdl = abstandsgesetz_mwdl.replace(/,/, ".");
    abstandsgesetz_mwas = abstandsgesetz_mwas.replace(/,/, ".");
    abstandsgesetz_dl = abstandsgesetz_dl.replace(/,/, ".");
    abstandsgesetz_m = abstandsgesetz_m.replace(/,/, ".");
}


function output_abstand(){
   var abstandsgesetz_m_ergebnis,abstandsgesetz_dl_ergebnis,abstandsgesetz_grenze;
if (abstandsgesetz_mwdl <= 0)
  {
  alert("Der Messwert der Dosisleistung muss größer als 0 sein!");
  }
else if (abstandsgesetz_mwas <= 0)
  {
  alert("Der Messwert für den Abstand zum Strahler muss größer als 0 sein!");
  }
else if (abstandsgesetz_m < 0)
  {
  alert("Der Abstand zur Berechnung der dortigen Dosisleistung darf nicht negativ sein!");
  }
else if (abstandsgesetz_dl < 0)
  {
  alert("Die gewünschte Dosisleistung zur Berechnung des Abstands darf nicht negativ sein!");
  }
else 
  {
   document.getElementById("abstandsgesetz_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung &uuml;ber das Abstandsgesetz</b>");
   if (abstandsgesetz_m > 0)
   {
   abstandsgesetz_m_ergebnis = ( Math.pow(abstandsgesetz_mwas,2) * abstandsgesetz_mwdl ) / Math.pow(abstandsgesetz_m,2);
   abstandsgesetz_m_ergebnis = Math.round(abstandsgesetz_m_ergebnis * 1000) / 1000;
   document.getElementById("abstandsgesetz_m_div").innerHTML = ("Die Dosisleistung beträgt in <b>" + abstandsgesetz_m + " m</b> Abstand vom Strahler <b>" + abstandsgesetz_m_ergebnis + " mSv/h</b>.<hr />");
   }
   if (abstandsgesetz_dl > 0)
   {
   abstandsgesetz_dl_ergebnis =  Math.sqrt( ( Math.pow(abstandsgesetz_mwas,2) * abstandsgesetz_mwdl ) / abstandsgesetz_dl ) ;
   abstandsgesetz_dl_ergebnis = Math.round(abstandsgesetz_dl_ergebnis * 10) / 10;
   document.getElementById("abstandsgesetz_dl_div").innerHTML = ("Bei einer gew&uuml;nschten Dosisleistung von <b>" + abstandsgesetz_dl + " mSv/h</b> beträgt der zu haltende Abstand <b>" + abstandsgesetz_dl_ergebnis + " m</b>.<hr />");
   }
   abstandsgesetz_grenze =  Math.sqrt( ( Math.pow(abstandsgesetz_mwas,2) * abstandsgesetz_mwdl ) / 0.025 ) ;
   abstandsgesetz_grenze = Math.round(abstandsgesetz_grenze * 10) / 10;
   document.getElementById("abstandsgesetz_grenze_div").innerHTML = ("Au&szlig;erhalb von Geb&auml;uden ist die Grenze zum Gefahrenbereich (<b>25 µSv/h</b>) in einer Entfernung von <b>" + abstandsgesetz_grenze + " m</b> vom Strahler festzulegen.");
}
}


</script>
<form name="abstandsgesetz_form">
<p>Geben Sie den Messwert einer Dosisleistung ein und in welchem Abstand diese gemessen wurde. Es wird berechnet, in welchem Abstand zum Strahler die Grenze zum <a href="/doku.php?id=gefaehrliche_stoffe_gueter:allgemein:gefahrenbereich" class="wikilink1">Gefahrenbereich</a> in Höhe von 25 µSv/h festzulegen ist.
<table style="white-space:nowrap;">
<tbody>
<tr>
<td>Messwert: Dosisleistung</td>
<td><input name="input_abstandsgesetz_mwdl" size="10" value="" type="text"> mSv/h</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Messwert: Abstand vom Strahler</td>
<td><input name="input_abstandsgesetz_mwas" size="10" value="" type="text"> m</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Dosisleistung bei einem Abstand von </td>
<td> <input name="input_abstandsgesetz_m" size="10" value="" type="text"> m</td>
<td style="white-space:normal;">[optional] Geben Sie eine Distanz in Metern ein, um die an dieser Stelle zu erwartende Dosisleistung zu berechnen.</td>
</tr>
<tr>
<td>Abstand in Metern bei einer Dosisleistung von</td>
<td> <input name="input_abstandsgesetz_dl" size="10" value="" type="text"> mSv/h&nbsp;</td>
<td style="white-space:normal;">[optional] Geben Sie eine Dosisleistung in mSv/h ein, um zu berechnen in welcher Distanz diese zu erwarten ist.</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Berechnung mit Abstandsgesetz durchf&uuml;hren " onclick="input_abstand(),output_abstand()" type="button" ></p>
</form>

<div id="abstandsgesetz_ueberschrift"></div>
<div id="abstandsgesetz_m_div"></div>
<div id="abstandsgesetz_dl_div"></div>
<div id="abstandsgesetz_grenze_div"></div>
