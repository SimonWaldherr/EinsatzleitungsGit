<script language="JavaScript">

// Globale Variablen
var gewuenschte_schaummenge_wert,gewuenschte_schaummenge_vz,gewuenschte_schaummenge_zr,gewuenschte_schaummenge_hoehe;

// Ein-/Ausgabe-Funktionen
function input_gewuenschte_schaummenge(){
    gewuenschte_schaummenge_wert=document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_wert.value;
    gewuenschte_schaummenge_vz=document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_vz.value;
    gewuenschte_schaummenge_zr=document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_zr.value;
    gewuenschte_schaummenge_hoehe=document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_hoehe.value;
    gewuenschte_schaummenge_ar=document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_ar.value;
    gewuenschte_schaummenge_wert = gewuenschte_schaummenge_wert.replace(/,/, ".");
    gewuenschte_schaummenge_vz = gewuenschte_schaummenge_vz.replace(/,/, ".");
    gewuenschte_schaummenge_zr = gewuenschte_schaummenge_zr.replace(/,/, ".");
    gewuenschte_schaummenge_hoehe = gewuenschte_schaummenge_hoehe.replace(/,/, ".");
    gewuenschte_schaummenge_ar = gewuenschte_schaummenge_ar.replace(/,/, ".");
}


function output_gewuenschte_schaummenge(){
   var gewuenschte_schaummittelmenge,gewuenschte_schaummenge_wasser,gewuenschte_schaummenge_dauer;
if (gewuenschte_schaummenge_wert <= 0)
  {
  alert("Die benötigte Schaummenge darf nicht kleiner oder gleich 0 sein!");
  }
else if (gewuenschte_schaummenge_vz < 4)
  {
  alert("Die Verschäumungszahl muss mindestens 4 betragen!");
  }
else if (gewuenschte_schaummenge_vz > 1000)
  {
  alert("Die Verschäumungszahl darf maximal 1000 betragen!");
  }
else if (gewuenschte_schaummenge_zr <= 0)
  {
  alert("Die Zumischrate darf nicht kleiner oder gleich 0% sein!");
  }
else if (gewuenschte_schaummenge_zr > 100)
  {
  alert("Die Zumischrate kann nicht größer als 100% sein!");
  }
else if (gewuenschte_schaummenge_ar < 0)
  {
  alert("Die Zerstörungsrate darf nicht kleiner als 0% sein!");
  }
else if (gewuenschte_schaummenge_ar >= 100)
  {
  alert("Die Zerstörungsrate kann nicht größer oder gleich 100% sein!");
  }
else if (gewuenschte_schaummenge_hoehe <= 0 && document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_geometrie[0].checked == true)
  {
  alert("Die geforderte Schaumhöhe darf nicht kleiner oder gleich 0 sein!");
  }
else
  {
   document.getElementById("gewuenschte_schaummenge_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung der ben&ouml;tigten Schaummittelmenge</b>");
   if (document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_geometrie[0].checked == true)
   {
   gewuenschte_schaummenge_wert = gewuenschte_schaummenge_wert * gewuenschte_schaummenge_hoehe;
   gewuenschte_schaummittelmenge = (gewuenschte_schaummenge_wert * 1000 * ( gewuenschte_schaummenge_zr / 100 ) ) / ( gewuenschte_schaummenge_vz * (1-(gewuenschte_schaummenge_ar*0.01))) ;
   }
   else if (document.gewuenschte_schaummenge_form.input_gewuenschte_schaummenge_geometrie[1].checked == true)
   {
   gewuenschte_schaummittelmenge = (gewuenschte_schaummenge_wert * 1000 * ( gewuenschte_schaummenge_zr / 100 )) / gewuenschte_schaummenge_vz ;
   }
   gewuenschte_schaummittelmenge = Math.round(gewuenschte_schaummittelmenge);
   document.getElementById("gewuenschte_schaummittelmenge_div").innerHTML = ("ben&ouml;tigte Schaummittelmenge: <b>" + gewuenschte_schaummittelmenge + " Liter</b>");
   gewuenschte_schaummenge_wasser = Math.round( ( gewuenschte_schaummittelmenge / gewuenschte_schaummenge_zr * 100 ) - gewuenschte_schaummittelmenge ) ;
   document.getElementById("gewuenschte_schaummenge_wasser_div").innerHTML = ("ben&ouml;tigte Wassermenge: <b>" + gewuenschte_schaummenge_wasser + " Liter</b>");
   gewuenschte_schaummenge_dauer = (parseFloat(gewuenschte_schaummenge_wasser)+parseFloat(gewuenschte_schaummittelmenge))/400;
   gewuenschte_schaummenge_dauer = Math.round(gewuenschte_schaummenge_dauer * 10) / 10;
   document.getElementById("gewuenschte_schaummenge_dauer_div").innerHTML = ("Ben&ouml;tigte Dauer f&uuml;r die Schaumherstellung bei Verwendung eines Z4-Zumischers: " + gewuenschte_schaummenge_dauer + " Minuten");
}
}


</script>
<form name="gewuenschte_schaummenge_form">
<table>
<tbody>
<tr>
<td style="width: 30%">Schaummenge ben&ouml;tigt f&uuml;r</td>
<td style="width: 10%"><input name="input_gewuenschte_schaummenge_wert" size="10" value="" type="text"></td>
<td style="width: 60%"><input type="radio" name="input_gewuenschte_schaummenge_geometrie" value="quadrat" checked> m²<br /><input type="radio" name="input_gewuenschte_schaummenge_geometrie" value="kubik"> m³ (Zerstörungsrate wird bei m³ nicht ber&uuml;cksichtigt.)</td>
</tr>
<tr>
<td>H&ouml;he des Schaums falls eine Fl&auml;che besch&auml;umt werden soll in m</td>
<td><input name="input_gewuenschte_schaummenge_hoehe" size="10" value="0,5" type="text"></td>
<td>(in der Regel 0,5 m, wird bei Auswahl der Option "m³" ignoriert)</td>
</tr>
<tr>
<td>Versch&auml;umungszahl VZ</td>
<td><input name="input_gewuenschte_schaummenge_vz" size="10" value="" type="text"></td>
<td>(typische Werte: Schwerschaum: 15, Mittelschaum: 75)</td>
</tr>
<tr>
<td>Zumischrate ZR in %</td>
<td><input name="input_gewuenschte_schaummenge_zr" size="10" value="3" type="text"></td>
<td>(schaummittelabh&auml;ngig, oftmals 3%)</td>
</tr>
<tr>
<td>Zerstörungsrate in %</td>
<td><input name="input_gewuenschte_schaummenge_ar" size="10" value="50" type="text"></td>
<td>(Menge des Schaums der beim Aufbringen direkt zerst&ouml;rt wird; auch als Abbrandwiderstand oder Abbrandfaktor bekannt, in der Regel 50%)</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenschte_schaummenge() und output_gewuenschte_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" ben&ouml;tigte Schaummittelmenge berechnen " onclick="input_gewuenschte_schaummenge(),output_gewuenschte_schaummenge()" type="button" ></p>
</form>

<div id="gewuenschte_schaummenge_ueberschrift"></div>
<div id="gewuenschte_schaummittelmenge_div"></div>
<div id="gewuenschte_schaummenge_wasser_div"></div>
<div id="gewuenschte_schaummenge_dauer_div"></div>
