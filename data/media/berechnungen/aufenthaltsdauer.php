<script language="JavaScript">

// Globale Variablen
var aufenthalt_dl,aufenthalt_d,aufenthalt_t;

// Ein-/Ausgabe-Funktionen
function input_aufenthalt(){
    aufenthalt_dl=document.aufenthalt_form.input_aufenthalt_dl.value;
    aufenthalt_d=document.aufenthalt_form.input_aufenthalt_d.value;
    aufenthalt_t=document.aufenthalt_form.input_aufenthalt_t.value;
    aufenthalt_dl = aufenthalt_dl.replace(/,/, ".");
    aufenthalt_d = aufenthalt_d.replace(/,/, ".");
    aufenthalt_t = aufenthalt_t.replace(/,/, ".");
}


function output_aufenthalt(){
   var aufenthalt_d_ergebnis,aufenthalt_d_rest_ergebnis,aufenthalt_t_ergebnis,aufenthalt_t_rest_ergebnis,aufenthalt_t15_ergebnis,aufenthalt_t100_ergebnis,aufenthalt_t250_ergebnis;
if (aufenthalt_dl <= 0)
  {
  alert("Der Messwert der Dosisleistung muss größer 0 sein!");
  }
else if (aufenthalt_d < 0)
  {
  alert("Der Wert für die Aufenthaltsdauer darf nicht kleiner 0 sein!");
  }
else if (aufenthalt_t < 0)
  {
  alert("Es wurden keine/nicht alle Werte eingegeben!");
  }
else
  {
   document.getElementById("aufenthalt_ueberschrift").innerHTML = ("<b>Ergebnisse der Berechnung zur Aufenthaltsdauer</b>");
   if (aufenthalt_t > 0)
   {
   aufenthalt_t_ergebnis = Math.round( ( ( aufenthalt_t / aufenthalt_dl ) * 60) * 10 ) / 10;
   document.getElementById("aufenthalt_t_div").innerHTML = ("erlaubte Aufenthaltsdauer bei einer Dosisleistung von <b>" + aufenthalt_dl + " mSv/h</b> und einem <b>Dosisrichtwert von " + aufenthalt_t + " mSv</b>: <b>" + aufenthalt_t_ergebnis + " Minuten </b><hr />");
   }
   if (aufenthalt_d > 0)
   {
   aufenthalt_d_ergebnis = Math.round( ( aufenthalt_d * ( aufenthalt_dl / 60 ) ) * 10 ) / 10;
   document.getElementById("aufenthalt_d_div").innerHTML = ("Aufgenommene Dosis bei einer Dosisleistung von <b>" + aufenthalt_dl + " mSv/h</b> und einer <b>Einsatzdauer von " + aufenthalt_d + " Minuten</b>: <b>" + aufenthalt_d_ergebnis + " mSv </b><hr />");
   }
   if (aufenthalt_d > 0 && aufenthalt_t > 0)
   {
      if (aufenthalt_d_ergebnis > aufenthalt_t)
      {
      aufenthalt_t_rest_ergebnis = Math.round( ( aufenthalt_d_ergebnis - aufenthalt_t) * 10 ) / 10;
      document.getElementById("aufenthalt_t_rest_div").innerHTML = ("<font style='color:red;'><b>ACHTUNG: Der Dosisrichtwert wurde um " + aufenthalt_t_rest_ergebnis + " mSv überschritten!</b></font><hr />");
      }
      else
      {
      aufenthalt_t_rest_ergebnis = Math.round( ( aufenthalt_t - aufenthalt_d_ergebnis) * 10 ) / 10;
      aufenthalt_d_rest_ergebnis = Math.round( ( ( aufenthalt_t_rest_ergebnis / aufenthalt_dl ) * 60) * 10 ) / 10;
      document.getElementById("aufenthalt_t_rest_div").innerHTML = ("Bis zum Erreichen des Dosisrichtwerts von <b>" + aufenthalt_t + " mSv</b> dürfen noch <b>" + aufenthalt_t_rest_ergebnis + " mSv</b> aufgenommen werden. Dafür verbleiben <b>" + aufenthalt_d_rest_ergebnis + " Minuten</b>.<hr />");
      }
   }
   aufenthalt_t15_ergebnis = Math.round( ( ( 15 / aufenthalt_dl ) * 60) * 10 ) / 10;
   aufenthalt_t100_ergebnis = Math.round( ( ( 100 / aufenthalt_dl ) * 60) * 10 ) / 10;
   aufenthalt_t250_ergebnis = Math.round( ( ( 250 / aufenthalt_dl ) * 60) * 10 ) / 10;
   document.getElementById("aufenthalt_grenz_div").innerHTML = ("Aufenthaltsdauer f&uuml;r den Schutz von Sachwerten (Dosis <b>15 mSv</b>): <b>" + aufenthalt_t15_ergebnis + " Minuten</b> <br /> Aufenthaltsdauer f&uuml;r die Abwehr einer Gefahr für Personen oder zur Verhinderung einer wesentlichen Schadensausbreitung (Dosis <b>100 mSv</b>): <b>" + aufenthalt_t100_ergebnis + " Minuten</b> <br />Aufenthaltsdauer f&uuml;r die Rettung von Menschenleben (Dosis <b>250 mSv</b>): <b>" + aufenthalt_t250_ergebnis + " Minuten</b>" );
}
}


</script>
<form name="aufenthalt_form">
<table style="white-space:nowrap;">
<tbody>
<tr>
<td>Messwert: Dosisleistung</td>
<td><input name="input_aufenthalt_dl" size="10" value="" type="text"> mSv/h</td>
<td style="white-space:normal;">Wenn Sie nur einen Messwert für die Dosisleistung eingeben, wird die mögliche Aufenthaltsdauer für die drei Dosisrichtwerte 15 mSv, 100 mSv und 250 mSv berechnet.</td>
</tr>
<tr>
<td>Dosisrichtwert f&uuml;r den Einsatz </td>
<td> <input name="input_aufenthalt_t" size="10" value="" type="text"> mSv</td>
<td style="white-space:normal;">[optional] Geben Sie den Dosisrichtwert für den Einsatz (15 mSv, 100 mSv oder 250 mSv) ein um zu berechnen nach welcher Zeit dieser beim eingegebenen Messwert erreicht ist.</td>
</tr>
<tr>
<td>Aufenthaltsdauer</td>
<td> <input name="input_aufenthalt_d" size="10" value="" type="text"> min</td>
<td style="white-space:normal;">[optional] Geben Sie ein, wie viele Minuten sich Ihr Trupp bereits an der Stelle des Messwerts befindet um die dort aufgenommene Dosis zu berechnen.</td>
</tr>
</tbody>
</table>


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Berechnung zur Aufenthaltsdauer durchf&uuml;hren " onclick="input_aufenthalt(),output_aufenthalt()" type="button" ></p>
</form>

<div id="aufenthalt_ueberschrift"></div>
<div id="aufenthalt_t_div"></div>
<div id="aufenthalt_d_div"></div>
<div id="aufenthalt_t_rest_div"></div>
<div id="aufenthalt_grenz_div"></div>
