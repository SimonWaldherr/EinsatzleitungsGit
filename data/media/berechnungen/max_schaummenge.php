<script language="JavaScript">

// Globale Variablen
var max_schaummenge_schaummittel,max_schaummenge_vz,max_schaummenge_zr,max_schaummenge_ar,max_schaummenge_hoehe;

// Ein-/Ausgabe-Funktionen
function input_max_schaummenge()
{
    max_schaummenge_schaummittel=document.max_schaummenge_form.input_max_schaummenge_schaummittel.value;
    max_schaummenge_vz=document.max_schaummenge_form.input_max_schaummenge_vz.value;
    max_schaummenge_zr=document.max_schaummenge_form.input_max_schaummenge_zr.value;
    max_schaummenge_ar=document.max_schaummenge_form.input_max_schaummenge_ar.value;
    max_schaummenge_hoehe=document.max_schaummenge_form.input_max_schaummenge_hoehe.value;
    max_schaummenge_schaummittel = max_schaummenge_schaummittel.replace(/,/, ".");
    max_schaummenge_vz = max_schaummenge_vz.replace(/,/, ".");
    max_schaummenge_zr = max_schaummenge_zr.replace(/,/, ".");
    max_schaummenge_ar = max_schaummenge_ar.replace(/,/, ".");
    max_schaummenge_hoehe = max_schaummenge_hoehe.replace(/,/, ".");
}


function output_max_schaummenge(){
   var max_schaummenge_schaum_v,max_schaummenge_schaum_a,max_schaummenge_wasser,max_schaummenge_schaumdauer;
if (max_schaummenge_schaummittel <= 0)
  {
  alert("Die Menge des Schaummittels darf nicht kleiner oder gleich 0 sein!");
  }
else if (max_schaummenge_vz < 4)
  {
  alert("Die Verschäumungszahl muss mindestens 4 betragen!");
  }
else if (max_schaummenge_vz > 1000)
  {
  alert("Die Verschäumungszahl darf maximal 1000 betragen!");
  }
else if (max_schaummenge_zr <= 0)
  {
  alert("Die Zumischrate darf nicht kleiner oder gleich 0% sein!");
  }
else if (max_schaummenge_zr > 100)
  {
  alert("Die Zumischrate kann nicht größer als 100% sein!");
  }
else if (max_schaummenge_ar < 0)
  {
  alert("Die Zerstörungsrate darf nicht kleiner als 0% sein!");
  }
else if (max_schaummenge_ar >= 100)
  {
  alert("Die Zerstörungsrate kann nicht größer oder gleich 100% sein!");
  }
else if (max_schaummenge_hoehe <= 0)
  {
  alert("Die geforderte Schaumhöhe darf nicht kleiner oder gleich 0 sein!");
  }
else
  {
   document.getElementById("max_schaummenge_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung der maximal erzeugbaren Schaummenge</b>");
   max_schaummenge_schaum_v = (max_schaummenge_schaummittel*max_schaummenge_vz)/((max_schaummenge_zr/100)*1000);
   max_schaummenge_schaum_v = Math.round(max_schaummenge_schaum_v * 10) / 10;
   document.getElementById("max_schaummenge_schaum_v_div").innerHTML = ("maximal erzeugbare Schaummenge: <b>" + max_schaummenge_schaum_v + " m³ </b>(Zerstörungsrate nicht ber&uuml;cksichtigt!)");
   max_schaummenge_schaum_a = (max_schaummenge_schaum_v/max_schaummenge_hoehe)*(1-(max_schaummenge_ar*0.01));
   max_schaummenge_schaum_a = Math.round(max_schaummenge_schaum_a * 10) / 10;
   document.getElementById("max_schaummenge_schaum_a_div").innerHTML = ("ausreichend für eine Fl&auml;che von: " + max_schaummenge_schaum_a + " m² (Zerstörungsrate und Schaumh&ouml;he f&uuml;r Fl&auml;che ber&uuml;cksichtigt.)");
   max_schaummenge_wasser = Math.round((max_schaummenge_schaummittel/max_schaummenge_zr*100)-max_schaummenge_schaummittel);
   document.getElementById("max_schaummenge_wasser_div").innerHTML = ("ben&ouml;tigte Wassermenge: <b>" + max_schaummenge_wasser + " Liter</b>");
   max_schaummenge_schaumdauer = (parseFloat(max_schaummenge_wasser)+parseFloat(max_schaummenge_schaummittel))/400;
   max_schaummenge_schaumdauer = Math.round(max_schaummenge_schaumdauer * 10) / 10;
   document.getElementById("max_schaummenge_schaumdauer_div").innerHTML = ("Schaummittelmenge bei Verwendung eines Z4-Zumischers ausreichend f&uuml;r eine Dauer von " + max_schaummenge_schaumdauer + " Minuten");
}
}


</script>
</p><form name="max_schaummenge_form">
<table>
<tbody>
<tr>
<td style="width: 30%">Vorhandene Schaummittelmenge in Liter</td>
<td style="width: 10%"><input name="input_max_schaummenge_schaummittel" size="10" value="" type="text"></td>
<td style="width: 60%">&nbsp;</td>
</tr>
<tr>
<td>H&ouml;he des Schaums falls eine Fl&auml;che besch&auml;umt werden soll in m</td>
<td><input name="input_max_schaummenge_hoehe" size="10" value="0,5" type="text"></td>
<td>(in der Regel 0,5 m)</td>
</tr>
<tr>
<td>Versch&auml;umungszahl VZ</td>
<td><input name="input_max_schaummenge_vz" size="10" value="" type="text"></td>
<td>(typische Werte: Schwerschaum: 15, Mittelschaum: 75)</td>
</tr>
<tr>
<td>Zumischrate ZR in %</td>
<td><input name="input_max_schaummenge_zr" size="10" value="3" type="text"></td>
<td>(schaummittelabh&auml;ngig, oftmals 3%)</td>
</tr>
<tr>
<td>Zerstörungsrate in %</td>
<td><input name="input_max_schaummenge_ar" size="10" value="50" type="text"></td>
<td>(Menge des Schaums der beim Aufbringen direkt zerst&ouml;rt wird; auch als Abbrandwiderstand oder Abbrandfaktor bekannt, in der Regel 50%)</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_max_schaummenge() und output_max_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" maximal erzeugbare Schaummenge berechnen " onclick="input_max_schaummenge(),output_max_schaummenge()" type="button"></p>
</form>

<div id="max_schaummenge_ueberschrift"></div>
<div id="max_schaummenge_schaum_v_div"></div>
<div id="max_schaummenge_schaum_a_div"></div>
<div id="max_schaummenge_wasser_div"></div>
<div id="max_schaummenge_schaumdauer_div"></div>
