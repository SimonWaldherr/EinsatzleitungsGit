<script language="JavaScript">

// Globale Variablen
var pendelverkehr_v_tank,pendelverkehr_q_loesch,pendelverkehr_t_fahrt,pendelverkehr_q_fuell,pendelverkehr_t_ruest;

// Ein-/Ausgabe-Funktionen
function input_pendelverkehr(){
    pendelverkehr_v_tank = document.pendelverkehr_form.input_pendelverkehr_v_tank.value;
    pendelverkehr_v_tank = pendelverkehr_v_tank.replace(/,/, ".");
    pendelverkehr_v_tank = parseInt(pendelverkehr_v_tank);
    pendelverkehr_q_loesch = document.pendelverkehr_form.input_pendelverkehr_q_loesch.value;
    pendelverkehr_q_loesch = pendelverkehr_q_loesch.replace(/,/, ".");
    pendelverkehr_q_loesch = parseInt(pendelverkehr_q_loesch);
    pendelverkehr_t_fahrt = document.pendelverkehr_form.input_pendelverkehr_t_fahrt.value;
    pendelverkehr_t_fahrt = pendelverkehr_t_fahrt.replace(/,/, ".");
    pendelverkehr_t_fahrt = Math.round(pendelverkehr_t_fahrt*10)/10;
    pendelverkehr_t_fahrt = parseFloat(pendelverkehr_t_fahrt);
    pendelverkehr_q_fuell = document.pendelverkehr_form.input_pendelverkehr_q_fuell.value;
    pendelverkehr_q_fuell = pendelverkehr_q_fuell.replace(/,/, ".");
    pendelverkehr_q_fuell = parseInt(pendelverkehr_q_fuell);
    pendelverkehr_t_ruest = document.pendelverkehr_form.input_pendelverkehr_t_ruest.value;
    pendelverkehr_t_ruest = pendelverkehr_t_ruest.replace(/,/, ".");
    pendelverkehr_t_ruest = Math.round(pendelverkehr_t_ruest*10)/10;
    pendelverkehr_t_ruest = parseFloat(pendelverkehr_t_ruest);
}


function output_pendelverkehr(){
   var pendelverkehr_t_fuell,pendelverkehr_t_leer,pendelverkehr_t_umlauf,pendelverkehr_n_fzg;
if (pendelverkehr_v_tank <= 0)
  {
  alert("Das Tankvolumen des pendelnden Fahrzeugs muss größer 0 sein!");
  }
else if (pendelverkehr_q_loesch <= 0)
  {
  alert("Der Löschwasserbedarf an der Einsatzstelle muss größer 0 sein!");
  }
else if (pendelverkehr_t_fahrt <= 0)
  {
  alert("Die Fahrzeit von der Füll- zur Einsatzstelle muss größer 0 sein!");
  }
else if (pendelverkehr_q_fuell <= 0)
  {
  alert("Der Füllstrom muss größer 0 sein!");
  }
else if (pendelverkehr_t_ruest <= 0)
  {
  alert("Die Rüstzeit muss größer 0 sein!");
  }
else 
  {
   document.getElementById("pendelverkehr_ueberschrift").innerHTML = ("<b>Ergebnisse der Pendelverkehrberechnung</b>");
   pendelverkehr_t_fuell = Math.round(( pendelverkehr_v_tank / pendelverkehr_q_fuell ) * 10 ) / 10 ;
   pendelverkehr_t_fuell = parseFloat(pendelverkehr_t_fuell);
   pendelverkehr_t_leer = Math.round(( pendelverkehr_v_tank / pendelverkehr_q_loesch ) * 10 ) / 10 ;
   pendelverkehr_t_leer = parseFloat(pendelverkehr_t_leer);
   pendelverkehr_t_umlauf = Math.round(( pendelverkehr_t_leer + 2*pendelverkehr_t_fahrt + pendelverkehr_t_fuell + pendelverkehr_t_ruest ) * 10 ) / 10 ;
   document.getElementById("pendelverkehr_umlauf_div").innerHTML = ("Zeit f&uuml;r einen Umlauf: <b>" + pendelverkehr_t_umlauf + " min</b>");
   pendelverkehr_n_fzg = Math.ceil( pendelverkehr_t_umlauf / pendelverkehr_t_leer );
   document.getElementById("pendelverkehr_n_fzg_div").innerHTML = ("Es werden: <b>" + pendelverkehr_n_fzg + "</b> Fahrzeuge f&uuml;r den Pendelverkehr ben&ouml;tigt.");
}
//  document.getElementById("pendelverkehr_debug_div").innerHTML = ("v_tank " + pendelverkehr_v_tank + "<br>q_loesch " + pendelverkehr_q_loesch + "<br>t_fahrt " + pendelverkehr_t_fahrt + "<br>q_fuell " + pendelverkehr_q_fuell + "<br>t_ruest " + pendelverkehr_t_ruest + "<br>t_fuell " + pendelverkehr_t_fuell + "<br>t_leer " + pendelverkehr_t_leer);
}


</script>
<form name="pendelverkehr_form">
<table>
<tbody>
<tr>
<td>L&ouml;schwasserbedarf an der Einsatzstelle: </td>
<td style="white-space:nowrap;"> <input name="input_pendelverkehr_q_loesch" size="10" value="" type="text"> Liter/Minute </td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tankinhalt der pendelnden Fahrzeuge: </td>
<td style="white-space:nowrap;"> <input name="input_pendelverkehr_v_tank" size="10" value="" type="text"> Liter </td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Fahrzeit von der F&uuml;llstelle zur Einsatzstelle: </td>
<td style="white-space:nowrap;"> <input name="input_pendelverkehr_t_fahrt" size="10" value="" type="text"> Minuten </td>
<td>
Sch&auml;tzhilfe: Zeit pro Kilometer in Abh&auml;ngigkeit zur Durchschnittsgeschwindigkeit<br />
40 km/h Durchschnittsgeschwindigkeit entsprechen 1,5 min/km<br />
30 km/h Durchschnittsgeschwindigkeit entsprechen 2 min/km<br />
24 km/h Durchschnittsgeschwindigkeit entsprechen 2,5 min/km
</td>
</tr>
<tr>
<td>F&uuml;llstrom: </td>
<td style="white-space:nowrap;"> <input name="input_pendelverkehr_q_fuell" size="10" value="" type="text"> Liter/Minute </td>
<td>Welche Wassermenge pro Minute kann an der F&uuml;llstelle in das Transportfahrzeug gef&uuml;llt werden?</td>
</tr>
<tr>
<td>R&uuml;stzeit: </td>
<td style="white-space:nowrap;"> <input name="input_pendelverkehr_t_ruest" size="10" value="8" type="text"> Minuten </td>
<td>8 Minuten entsprechen der erfahrungsgem&auml;&szlig;en R&uuml;stzeit. Diese umfasst
<ul>
<li>Eintreffen an der F&uuml;llstelle bis Beginn des F&uuml;llvorgangs</li>
<li>Ende des F&uuml;llvorgangs bis Abfahrt zur Einsatzstelle</li>
<li>Eintreffen an der Einsatzstelle bis Beginn der Entleerung</li>
<li>Ende der Entleerung bis Abfahrt zur F&uuml;llstelle</li>
</ul>
</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" ben&ouml;tigte Anzahl der Fahrzeuge berechnen " onclick="input_pendelverkehr(),output_pendelverkehr()" type="button" ></p>
</form>

<div id="pendelverkehr_ueberschrift"></div>
<div id="pendelverkehr_umlauf_div"></div>
<div id="pendelverkehr_n_fzg_div"></div>
<div id="pendelverkehr_debug_div"></div>
