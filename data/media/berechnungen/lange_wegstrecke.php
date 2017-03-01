<script language="JavaScript">

// Globale Variablen
var lange_wegstrecke_q_rohr,lange_wegstrecke_laenge,lange_wegstrecke_laenge_rund,lange_wegstrecke_hoehe,lange_wegstrecke_paus,lange_wegstrecke_q_pumpe,lange_wegstrecke_pein,lange_wegstrecke_anzahl,lange_wegstrecke_schlauchanzahl_einzel;

// Ein-/Ausgabe-Funktionen
function input_lange_wegstrecke(){
    lange_wegstrecke_q_rohr=document.lange_wegstrecke_form.input_lange_wegstrecke_q_rohr.value;
    lange_wegstrecke_laenge=document.lange_wegstrecke_form.input_lange_wegstrecke_laenge.value;
    lange_wegstrecke_hoehe=document.lange_wegstrecke_form.input_lange_wegstrecke_hoehe.value;
    lange_wegstrecke_paus=document.lange_wegstrecke_form.input_lange_wegstrecke_paus.value;
    lange_wegstrecke_q_pumpe=document.lange_wegstrecke_form.input_lange_wegstrecke_q_pumpe.value;
    lange_wegstrecke_pein=document.lange_wegstrecke_form.input_lange_wegstrecke_pein.value;
    lange_wegstrecke_schlauchlaenge=document.lange_wegstrecke_form.input_lange_wegstrecke_schlauchlaenge.value;
    lange_wegstrecke_anzahl=document.lange_wegstrecke_form.input_lange_wegstrecke_anzahl.value;
    lange_wegstrecke_q_rohr = lange_wegstrecke_q_rohr.replace(/,/, ".");
    lange_wegstrecke_laenge = lange_wegstrecke_laenge.replace(/,/, ".");
    lange_wegstrecke_hoehe = lange_wegstrecke_hoehe.replace(/,/, ".");
    lange_wegstrecke_paus = lange_wegstrecke_paus.replace(/,/, ".");
    lange_wegstrecke_q_pumpe = lange_wegstrecke_q_pumpe.replace(/,/, ".");
    lange_wegstrecke_schlauchlaenge = lange_wegstrecke_schlauchlaenge.replace(/,/, ".");
    lange_wegstrecke_pein = lange_wegstrecke_pein.replace(/,/, ".");
    lange_wegstrecke_laenge = parseFloat(lange_wegstrecke_laenge);
    lange_wegstrecke_hoehe = parseFloat(lange_wegstrecke_hoehe);
    lange_wegstrecke_paus = parseFloat(lange_wegstrecke_paus);
    lange_wegstrecke_pein = parseFloat(lange_wegstrecke_pein);
    lange_wegstrecke_schlauchlaenge = parseInt(lange_wegstrecke_schlauchlaenge);
    lange_wegstrecke_anzahl = parseInt(lange_wegstrecke_anzahl);
   // benötigte Schlauchanzahl pro Leitung berechnen
   lange_wegstrecke_schlauchanzahl_einzel = Math.ceil(lange_wegstrecke_laenge / lange_wegstrecke_schlauchlaenge);
   // Länge der Strecke auf volle Schläuche aufrunden
   lange_wegstrecke_laenge = lange_wegstrecke_schlauchanzahl_einzel * lange_wegstrecke_schlauchlaenge;
}


function output_lange_wegstrecke(){
   var lange_wegstrecke_leitungen,lange_wegstrecke_dauer,lange_wegstrecke_schlauchverlust,lange_wegstrecke_hoehenverlust,lange_wegstrecke_verluste_100m,lange_wegstrecke_verluste_schlauch,lange_wegstrecke_pein_tmp,lange_wegstrecke_vks_distanz,lange_wegstrecke_vks_anzahl,lange_wegstrecke_vks_einzeldistanz,lange_wegstrecke_v_meter,lange_wegstrecke_volumen,lange_wegstrecke_q,lange_wegstrecke_q_leitung,lange_wegstrecke_schlauchanzahl,lange_wegstrecke_schlauchreserve,lange_wegstrecke_schlauch_gesamt;
   lange_wegstrecke_vks_distanz = 0;
   lange_wegstrecke_vks_distanz = parseInt(lange_wegstrecke_vks_distanz);
   lange_wegstrecke_vks_anzahl = 0;
   lange_wegstrecke_vks_anzahl = parseInt(lange_wegstrecke_vks_anzahl);
if (lange_wegstrecke_q_pumpe < lange_wegstrecke_q_rohr)
  {
  alert("Die Wasserabgabe über die Strahlrohre ist größer als die Leistung der Pumpe(n)!");
  }
else if (lange_wegstrecke_laenge <= 0)
  {
  alert("Die Länge der Schlauchleitung darf nicht gleich oder kleiner als 0 Meter sein!");
  }
else if (lange_wegstrecke_pein < 0)
  {
  alert("Der Pumpen-Eingangsdruck darf nicht kleiner als 0 sein!");
  }
else if (lange_wegstrecke_paus < lange_wegstrecke_pein)
  {
  alert("Der Ausgangsdruck der Pumpen muss größer als der Eingangsdruck sein!");
  }
else if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[0].checked == true && lange_wegstrecke_q_rohr / lange_wegstrecke_anzahl < 200)
  {
  alert("Eine Berechnung mit einer abgegebenen Wassermenge kleiner " + 200*lange_wegstrecke_anzahl + " Liter/Minute bei " + lange_wegstrecke_anzahl + " parallelen B-Leitung(en) ist nicht vorgesehen!");
  }
else if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[0].checked == true && lange_wegstrecke_q_rohr / lange_wegstrecke_anzahl > 2000)
  {
  alert("Eine Berechnung mit einer abgegebenen Wassermenge größer " + 2000*lange_wegstrecke_anzahl + " Liter/Minute bei " + lange_wegstrecke_anzahl + " parallelen B-Leitung(en) ist nicht vorgesehen! Erhöhen Sie die Anzahl der parallelen Leitungen, da ansonsten die Druckverluste durch Reibung zu hoch sind.");
  }
else if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[1].checked == true && lange_wegstrecke_q_rohr / lange_wegstrecke_anzahl < 600)
  {
  alert("Eine Berechnung mit einer abgegebenen Wassermenge kleiner " + 600*lange_wegstrecke_anzahl + " Liter/Minute bei " + lange_wegstrecke_anzahl + " parallelen A-Leitung(en) ist nicht vorgesehen!");
  }
else if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[1].checked == true && lange_wegstrecke_q_rohr / lange_wegstrecke_anzahl > 3000)
  {
  alert("Eine Berechnung mit einer abgegebenen Wassermenge größer " + 3000*lange_wegstrecke_anzahl + " Liter/Minute bei " + lange_wegstrecke_anzahl + " parallelen A-Leitung(en) ist nicht vorgesehen! Erhöhen Sie die Anzahl der parallelen Leitungen, da ansonsten die Druckverluste durch Reibung zu hoch sind.");
  }
else if (lange_wegstrecke_schlauchlaenge <= 0)
  {
  alert("Die Schlauchlänge darf nicht kleiner als oder gleich 0 sein!");
  }
else if (lange_wegstrecke_schlauchlaenge > 100)
  {
  alert("Schlauchlängen größer als 100 Meter werden nicht unterstützt!");
  }
else if (lange_wegstrecke_anzahl < 1)
  {
  alert("Es muss mindestens eine Leitung genutzt werden!");
  }
else
  {
   document.getElementById("lange_wegstrecke_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung zur F&ouml;rderung &uuml;ber lange Wegstrecken</b>");
   var lange_wegstrecke_verlustliste = new Array();
   // Durchflussmenge auf Strahlrohr-Durchfluss festsetzen
   lange_wegstrecke_q = lange_wegstrecke_q_rohr;
   // Durchflussmenge runden
   lange_wegstrecke_q_leitung = Math.round((lange_wegstrecke_q / lange_wegstrecke_anzahl) / 100) * 100;
   // Berechnung für B-Leitungen
   if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[0].checked == true)
   {
   // Array der die Werte für die Druckverluste beim B-Schlauch beinhaltet
   lange_wegstrecke_verlustliste[0] = new Array("200","0.07");
   lange_wegstrecke_verlustliste[1] = new Array("300","0.16");
   lange_wegstrecke_verlustliste[2] = new Array("400","0.28");
   lange_wegstrecke_verlustliste[3] = new Array("500","0.42");
   lange_wegstrecke_verlustliste[4] = new Array("600","0.58");
   lange_wegstrecke_verlustliste[5] = new Array("700","0.77");
   lange_wegstrecke_verlustliste[6] = new Array("800","0.98");
   lange_wegstrecke_verlustliste[7] = new Array("900","1.25");
   lange_wegstrecke_verlustliste[8] = new Array("1000","1.50");
   lange_wegstrecke_verlustliste[9] = new Array("1100","1.75");
   lange_wegstrecke_verlustliste[10] = new Array("1200","2.05");
   lange_wegstrecke_verlustliste[11] = new Array("1300","2.35");
   lange_wegstrecke_verlustliste[12] = new Array("1400","2.68");
   lange_wegstrecke_verlustliste[13] = new Array("1500","3.05");
   lange_wegstrecke_verlustliste[14] = new Array("1600","3.45");
   lange_wegstrecke_verlustliste[15] = new Array("1700","3.85");
   lange_wegstrecke_verlustliste[16] = new Array("1800","4.25");
   lange_wegstrecke_verlustliste[17] = new Array("1900","4.70");
   lange_wegstrecke_verlustliste[18] = new Array("2000","5.20");
   lange_wegstrecke_v_meter = 4.41;
   }
   // Berechnung für A-Leitungen
   else if (document.lange_wegstrecke_form.input_lange_wegstrecke_querschnitt[1].checked == true)
   {
   lange_wegstrecke_verlustliste[0] = new Array("600","0.11");
   lange_wegstrecke_verlustliste[1] = new Array("700","0.14");
   lange_wegstrecke_verlustliste[2] = new Array("800","0.17");
   lange_wegstrecke_verlustliste[3] = new Array("900","0.21");
   lange_wegstrecke_verlustliste[4] = new Array("1000","0.25");
   lange_wegstrecke_verlustliste[5] = new Array("1100","0.29");
   lange_wegstrecke_verlustliste[6] = new Array("1200","0.33");
   lange_wegstrecke_verlustliste[7] = new Array("1300","0.38");
   lange_wegstrecke_verlustliste[8] = new Array("1400","0.44");
   lange_wegstrecke_verlustliste[9] = new Array("1500","0.49");
   lange_wegstrecke_verlustliste[10] = new Array("1600","0.55");
   lange_wegstrecke_verlustliste[11] = new Array("1700","0.61");
   lange_wegstrecke_verlustliste[12] = new Array("1800","0.67");
   lange_wegstrecke_verlustliste[13] = new Array("1900","0.73");
   lange_wegstrecke_verlustliste[14] = new Array("2000","0.80");
   lange_wegstrecke_verlustliste[15] = new Array("2100","0.87");
   lange_wegstrecke_verlustliste[16] = new Array("2200","0.94");
   lange_wegstrecke_verlustliste[17] = new Array("2300","1.02");
   lange_wegstrecke_verlustliste[18] = new Array("2400","1.09");
   lange_wegstrecke_verlustliste[19] = new Array("2500","1.18");
   lange_wegstrecke_verlustliste[20] = new Array("2600","1.26");
   lange_wegstrecke_verlustliste[21] = new Array("2700","1.34");
   lange_wegstrecke_verlustliste[22] = new Array("2800","1.43");
   lange_wegstrecke_verlustliste[23] = new Array("2900","1.53");
   lange_wegstrecke_verlustliste[24] = new Array("3000","1.63");
   lange_wegstrecke_v_meter = 9.50;
   }
   // passenden Wert für die entsprechende Fördermenge aus der Array-Liste holen
   for (var i=0, item; item=lange_wegstrecke_verlustliste[i]; i++) {
      if (lange_wegstrecke_verlustliste[i][0] == lange_wegstrecke_q_leitung) {
         lange_wegstrecke_schlauchverlust = lange_wegstrecke_verlustliste[i][1];
      }
   }
   // Berechnen wie hoch der Druckverlust durch Höhenunterschied pro 100 Meter ist
   lange_wegstrecke_hoehenverlust = ( lange_wegstrecke_hoehe / lange_wegstrecke_laenge ) * 10 ;

   // Verluste durch Reibung und Höhe addieren
   lange_wegstrecke_schlauchverlust = parseFloat(lange_wegstrecke_schlauchverlust);
   lange_wegstrecke_hoehenverlust = parseFloat(lange_wegstrecke_hoehenverlust);
   lange_wegstrecke_verluste_100m = lange_wegstrecke_schlauchverlust + lange_wegstrecke_hoehenverlust;
   lange_wegstrecke_verluste_schlauch = lange_wegstrecke_verluste_100m / ( 100 / lange_wegstrecke_schlauchlaenge);
   // Anzahl der Pumpen und Distanz zwischen ihnen berechnen
	if (lange_wegstrecke_verluste_schlauch <= 0) {
	    alert("Der Druckzugewinn durch den Abfall des Geländes (" + Math.round((lange_wegstrecke_hoehenverlust * (-1)) * 100) / 100 + " bar pro 100 Meter) ist größer als der Druckverlust durch Reibung im Schlauch (" + Math.round((lange_wegstrecke_schlauchverlust) * 100) / 100 + " bar pro 100 Meter). Die Distanz zwischen den Pumpen wird auf die Gesamtlänge der Strecke festgesetzt.");
	    lange_wegstrecke_vks_anzahl = 1;
	    lange_wegstrecke_vks_einzeldistanz = lange_wegstrecke_laenge;
	    }
	    else {
		while (lange_wegstrecke_vks_distanz < lange_wegstrecke_laenge) {
		lange_wegstrecke_vks_anzahl++;
		lange_wegstrecke_pein_tmp = lange_wegstrecke_paus - lange_wegstrecke_pein - lange_wegstrecke_verluste_schlauch;
		j = 0;
		   while (lange_wegstrecke_pein_tmp > 0) {
			lange_wegstrecke_vks_distanz = Math.round(lange_wegstrecke_vks_distanz + lange_wegstrecke_schlauchlaenge);
			lange_wegstrecke_pein_tmp = Math.round((lange_wegstrecke_pein_tmp - lange_wegstrecke_verluste_schlauch) * 100) / 100;
			j++;
			lange_wegstrecke_vks_einzeldistanz = j * lange_wegstrecke_schlauchlaenge;
		   }
		}
	}
   // Berechnung der Dauer zum Füllen der Schlauchleitung
   lange_wegstrecke_volumen = Math.round(lange_wegstrecke_v_meter * lange_wegstrecke_laenge * lange_wegstrecke_anzahl);
   lange_wegstrecke_dauer = Math.round((lange_wegstrecke_volumen / lange_wegstrecke_q_pumpe) * 10) / 10;

   // benötigte Schlauchanzahl pro Leitung berechnen
   lange_wegstrecke_schlauchanzahl = lange_wegstrecke_schlauchanzahl_einzel * lange_wegstrecke_anzahl;
   
   // Anzahl der Reserveschläuche berechnen (normalerweise 1 Schlauch Reserve pro 100m bzw. 5 Längen)
   lange_wegstrecke_schlauchreserve = Math.ceil((lange_wegstrecke_laenge * lange_wegstrecke_anzahl) / 100);
   
   // Anzahl der gesamt erforderlichen Schläuche errechnen
   lange_wegstrecke_schlauch_gesamt = lange_wegstrecke_schlauchanzahl + lange_wegstrecke_schlauchreserve;

   // Ausgabe vorbereiten
   document.getElementById("lange_wegstrecke_vks_anzahl_div").innerHTML = ("ben&ouml;tigte Anzahl von Pumpen: <b>" + lange_wegstrecke_vks_anzahl + "</b> (Inklusive Pumpe bei der Wasserentnahme. Zus&auml;tzliche Pumpe an der Brandstelle ist erforderlich. Achten Sie darauf, dass Sie ggf. die Anzahl der Pumpen verdoppeln m&uuml;ssen, wenn Sie z.B. 4 Leitungen verwenden aber Ihre Pumpen nur 2 Abg&auml;nge besitzen. Bei der Vornahme weiterer Rohre verringert sich der m&ouml;gliche Abstand zwischen den einzelnen Pumpen, dann ist eine Neuberechnung erforderlich!)");
   document.getElementById("lange_wegstrecke_schlauchanzahl_div").innerHTML = ("ben&ouml;tigte Anzahl von Schl&auml;uchen: " + lange_wegstrecke_schlauchanzahl + " + " + lange_wegstrecke_schlauchreserve + " Reserveschläuche = <b>" + lange_wegstrecke_schlauch_gesamt + " Schläuche gesamt</b> (Faustregel ein Reserveschlauch pro 100m)");
   document.getElementById("lange_wegstrecke_vks_distanz_div").innerHTML = ("maximaler Abstand zwischen zwei Pumpen: <b>" + lange_wegstrecke_vks_einzeldistanz + " Meter</b>");
   document.getElementById("lange_wegstrecke_dauer_div").innerHTML = ("Dauer bis Schlauchleitung vollst&auml;ndig gef&uuml;llt ist: <b>" + lange_wegstrecke_dauer + " Minuten</b> (Gesamtvolumen der Schlauchleitung " + lange_wegstrecke_volumen + " Liter)");
   document.getElementById("lange_wegstrecke_druckverlust_div").innerHTML = ("Druckverlust in der Schlauchleitung pro 100 Meter: " + lange_wegstrecke_verluste_100m + " bar (umfasst Reibungs- und H&ouml;henverluste)");
}
}


</script>
<form name="lange_wegstrecke_form">
<table>
<tbody>
<tr>
<td>&Uuml;ber die Strahlrohre abgegebene Wassermenge in Litern/Minute</td>
<td><input name="input_lange_wegstrecke_q_rohr" size="10" type="text"></td>
<td>Siehe folgenden Link f&uuml;r Wasserlieferungsmengen von <a href="doku.php?id=brand:geraete:strahlrohre">Mehrzweckstrahlrohren</a></td>
</tr>
<tr>
<td>L&auml;nge der Strecke in Metern</td>
<td><input name="input_lange_wegstrecke_laenge" size="10" type="text"></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>H&ouml;henunterschied &uuml;ber die gesamte Strecke in Metern</td>
<td><input name="input_lange_wegstrecke_hoehe" size="10" value="0" type="text"></td>
<td>Es wird bei der Berechnung von einem gleichm&auml;&szlig;igen Anstieg bzw. Abfall &uuml;ber die gesamte Strecke ausgegangen, Anstieg als positive Zahl eingeben (z.B. 35), Abfall als negative Zahl (z.B. -35).</td>
</tr>
<tr>
<td style="width: 30%">Schlauchgr&ouml;&szlig;e:</td>
<td style="width: 10%"><input type="radio" name="input_lange_wegstrecke_querschnitt" value="b" checked> B-Schl&auml;uche<br /><input type="radio" name="input_lange_wegstrecke_querschnitt" value="a"> A-Schl&auml;uche</td>
<td style="width: 60%">&nbsp;</td>
</tr>
<tr>
<td>Anzahl der parallelen Leitungen:</td>
<td><input name="input_lange_wegstrecke_anzahl" size="10" value="1" type="text"></td>
<td>Mindestf&ouml;rdermengen f&uuml;r die Berechnung:<br />200 l/min pro B-Leitung, 600 l/min pro A-Leitung<br />1 Leitung: 200 l/min f&uuml;r B, 600 l/min f&uuml;r A<br />2 Leitungen: 400 l/min f&uuml;r B, 1200 l/min f&uuml;r A<br />3 Leitungen: 600 l/min f&uuml;r B, 1800 l/min f&uuml;r A<br />usw.</td>
</tr>
<tr>
<td>Ausgangsdruck der Pumpen in bar</td>
<td><input name="input_lange_wegstrecke_paus" size="10" value="8" type="text"></td>
<td rowspan="2">Ausgangsdruck und F&ouml;rdermenge ergibt sich aus der Leistung der schwächsten Pumpe in der F&ouml;rderstrecke (z.B. 8 bar und 800 Liter/Minute bei einer TS 8/8, auch wenn diese mit einer FPN 10-1000 zusammen eingesetzt wird)</td>
</tr>
<tr>
<td>F&ouml;rdermenge der Pumpen in Litern/Minute</td>
<td><input name="input_lange_wegstrecke_q_pumpe" size="10" value="800" type="text"></td>
</tr>
<tr>
<td>Eingangsdruck der Pumpen in bar</td>
<td><input name="input_lange_wegstrecke_pein" size="10" type="text" value="1,5"></td>
<td>1,5 bar sind Standard-Eingangsdruck f&uuml;r eine geschlossene Schaltreihe. Wird ausnahmslos vor jeder Pumpe ein L&ouml;schwasserbeh&auml;lter eingesetzt, so kann dieser Wert auf 0 ge&auml;ndert werden.</td>
</tr>
<tr>
<td>Schlauchl&auml;nge in Meter</td>
<td><input name="input_lange_wegstrecke_schlauchlaenge" size="10" type="text" value="20"></td>
<td>L&auml;nge jedes einzelnen Schlauches. Die Distanz zwischen den einzelnen Pumpen wird jeweils auf die nächst kleinere Anzahl an Schl&auml;uchen abgerundet.</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_lange_wegstrecke() und output_lange_wegstrecke() beim Klicken auf folgende Schaltfläche -->
<p><input value=" F&ouml;rderung &uuml;ber lange Wegstrecke berechnen " onclick="input_lange_wegstrecke(),output_lange_wegstrecke()" type="button" ></p>
</form>

<div id="lange_wegstrecke_ueberschrift"></div>
<div id="lange_wegstrecke_vks_anzahl_div"></div>
<div id="lange_wegstrecke_schlauchanzahl_div"></div>
<div id="lange_wegstrecke_vks_distanz_div"></div>
<div id="lange_wegstrecke_dauer_div"></div>
<div id="lange_wegstrecke_druckverlust_div"></div>
