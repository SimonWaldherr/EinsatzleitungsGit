<script language="JavaScript">

// Globale Variablen
var fahrzeugbergung_eigengewicht,fahrzeugbergung_steigung,fahrzeugbergung_sicherheit;

// Ein-/Ausgabe-Funktionen
function input_fahrzeugbergung(){
    fahrzeugbergung_eigengewicht = document.fahrzeugbergung_form.input_fahrzeugbergung_eigengewicht.value;
    fahrzeugbergung_eigengewicht = Math.round(fahrzeugbergung_eigengewicht);
    fahrzeugbergung_steigung = document.fahrzeugbergung_form.input_fahrzeugbergung_steigung.value;
    fahrzeugbergung_steigung = fahrzeugbergung_steigung.replace(/,/, ".");
    fahrzeugbergung_sicherheit = document.fahrzeugbergung_form.input_fahrzeugbergung_sicherheit.value;
    fahrzeugbergung_sicherheit = Math.round(fahrzeugbergung_sicherheit);
}


function output_fahrzeugbergung(){
   var fahrzeugbergung_rollwiderstand,fahrzeugbergung_rollwiderstand_beiwert,fahrzeugbergung_steigung_kraft,fahrzeugbergung_zustand_kraft,fahrzeugbergung_zustand_beiwert,fahrzeugbergung_zwischensumme,fahrzeugbergung_sicherheit_kraft,fahrzeugbergung_endergebnis;
if (fahrzeugbergung_eigengewicht <= 0)
  {
  alert("Das Eigengewicht muss größer 0 kg sein!");
  }
else if (fahrzeugbergung_steigung < 0 || fahrzeugbergung_steigung >= 90 )
  {
  alert("Die Steigung muss mindestens 0 Grad betragen und kleiner als 90 Grad sein! Gefälle wird bei der Berechnung nicht berücksichtigt.");
  }
else if (fahrzeugbergung_steigung < 0)
  {
  alert("Der Sicherheitsfaktor kann nicht kleiner als 0% sein!");
  }
else 
  {
   document.getElementById("fahrzeugbergung_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung zur Fahrzeugbergung</b>");
   if (document.fahrzeugbergung_form.input_fahrzeugbergung_untergrund[0].checked == true)
   	{
   	fahrzeugbergung_rollwiderstand_beiwert = 25;
   	}
   else if (document.fahrzeugbergung_form.input_fahrzeugbergung_untergrund[1].checked == true)
   	{
   	fahrzeugbergung_rollwiderstand_beiwert = 7;
   	}
   else if (document.fahrzeugbergung_form.input_fahrzeugbergung_untergrund[2].checked == true)
   	{
   	fahrzeugbergung_rollwiderstand_beiwert = 5;
   	}
   else if (document.fahrzeugbergung_form.input_fahrzeugbergung_untergrund[3].checked == true)
   	{
   	fahrzeugbergung_rollwiderstand_beiwert = 2;
   	}
   fahrzeugbergung_rollwiderstand = Math.round( fahrzeugbergung_eigengewicht / fahrzeugbergung_rollwiderstand_beiwert ) ;
   document.getElementById("fahrzeugbergung_rollwiderstand_div").innerHTML = ("Rollwiderstand: " + fahrzeugbergung_rollwiderstand + " kg");
   fahrzeugbergung_steigung_kraft = Math.round( ( fahrzeugbergung_eigengewicht * fahrzeugbergung_steigung ) / 60 ) ;
   document.getElementById("fahrzeugbergung_steigung_div").innerHTML = ("Steigung: " + fahrzeugbergung_steigung_kraft + " kg");
   if (document.fahrzeugbergung_form.input_fahrzeugbergung_zustand[0].checked == true)
   	{
   	fahrzeugbergung_zustand_beiwert = 0;
   	}
   else if (document.fahrzeugbergung_form.input_fahrzeugbergung_zustand[1].checked == true)
   	{
   	fahrzeugbergung_zustand_beiwert = 1;
   	}
   else if (document.fahrzeugbergung_form.input_fahrzeugbergung_zustand[2].checked == true)
   	{
   	fahrzeugbergung_zustand_beiwert = 2;
   	}
   fahrzeugbergung_zustand_kraft = Math.round( ( fahrzeugbergung_eigengewicht * fahrzeugbergung_zustand_beiwert ) / 3 ) ;
   document.getElementById("fahrzeugbergung_zustand_div").innerHTML = ("Fahrzeugzustand: " + fahrzeugbergung_zustand_kraft + " kg");
   fahrzeugbergung_zwischensumme = fahrzeugbergung_rollwiderstand + fahrzeugbergung_steigung_kraft + fahrzeugbergung_zustand_kraft ;
   document.getElementById("fahrzeugbergung_zwischensumme_div").innerHTML = ("------------------------------<br>Zwischensumme: " + fahrzeugbergung_zwischensumme + " kg");
   fahrzeugbergung_sicherheit_kraft = Math.round( fahrzeugbergung_zwischensumme * fahrzeugbergung_sicherheit * 0.01 ) ;
   document.getElementById("fahrzeugbergung_sicherheit_div").innerHTML = ("Sicherheit: " + fahrzeugbergung_sicherheit_kraft + " kg");
   fahrzeugbergung_endergebnis = fahrzeugbergung_zwischensumme + fahrzeugbergung_sicherheit_kraft ;
   document.getElementById("fahrzeugbergung_endergebnis_div").innerHTML = ("------------------------------<br>Endergebnis: <b>" + fahrzeugbergung_endergebnis + " kg</b>");
}
}


</script>
<form name="fahrzeugbergung_form">
<p>Mit dieser Berechnung k&ouml;nnen Sie ermitteln, welche Kraft zur Bergung eines Fahrzeugs aufgewendet werden muss.</p>
<table>
<tbody>
<tr>
<td>Eigengewicht: </td>
<td> <input name="input_fahrzeugbergung_eigengewicht" size="10" value="" type="text"> kg </td>
</tr>
<tr>
<td>Untergrund: </td>
<td><input type="radio" name="input_fahrzeugbergung_untergrund" value="asphalt" checked> Stra&szlig;e (Asphalt) <br />
    <input type="radio" name="input_fahrzeugbergung_untergrund" value="gras"> Gras<br />
    <input type="radio" name="input_fahrzeugbergung_untergrund" value="kies"> Kies<br />
    <input type="radio" name="input_fahrzeugbergung_untergrund" value="matsch"> Matsch
</tr>
<tr>
<td>Steigung (Winkel): </td>
<td> <input name="input_fahrzeugbergung_steigung" size="10" value="0" type="text"> Grad </td>
</tr>
<tr>
<td>Fahrzeugzustand: </td>
<td><input type="radio" name="input_fahrzeugbergung_zustand" value="0" checked> Fahrzeug nicht eingesunken oder keine Achsen blockiert <br />
    <input type="radio" name="input_fahrzeugbergung_zustand" value="1"> Fahrzeug bis Mitte R&auml;der eingesunken oder 1 Achse blockiert<br />
    <input type="radio" name="input_fahrzeugbergung_zustand" value="2"> Fahrzeug bis Oberkante R&auml;der eingesunken oder 2 Achsen blockiert
</tr>
<tr>
<td>Sicherheitsfaktor: </td>
<td> <input name="input_fahrzeugbergung_sicherheit" size="10" value="25" type="text"> % </td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" erforderliche Kraft berechnen " onclick="input_fahrzeugbergung(),output_fahrzeugbergung()" type="button" ></p>
</form>

<div id="fahrzeugbergung_ueberschrift"></div>
<div id="fahrzeugbergung_rollwiderstand_div"></div>
<div id="fahrzeugbergung_steigung_div"></div>
<div id="fahrzeugbergung_zustand_div"></div>
<div id="fahrzeugbergung_zwischensumme_div"></div>
<div id="fahrzeugbergung_sicherheit_div"></div>
<div id="fahrzeugbergung_endergebnis_div"></div>
