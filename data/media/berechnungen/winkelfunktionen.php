<script language="JavaScript">

// Globale Variablen
var winkelfunktionen_eingabe,winkelfunktionen_grad;

// Ein-/Ausgabe-Funktionen
function input_winkelfunktionen(){
    winkelfunktionen_eingabe=document.winkelfunktionen_form.input_winkelfunktionen_eingabe.value;
    winkelfunktionen_eingabe = winkelfunktionen_eingabe.replace(/,/, ".");
    while (winkelfunktionen_eingabe > 360) {
	winkelfunktionen_eingabe = winkelfunktionen_eingabe - 360;
    }
    // Winkel von Grad umrechnen
    winkelfunktionen_grad = winkelfunktionen_eingabe * Math.PI/180;
}


function output_winkelfunktionen(){
   var winkelfunktionen_tan,winkelfunktionen_sin,winkelfunktionen_cos;
if (winkelfunktionen_eingabe == 0)
  {
  alert("Es wurde kein Wert zum Umrechnen eingegeben!");
  }
else
  {
   document.getElementById("winkelfunktionen_ueberschrift").innerHTML = ("<b>Ergebnisse der Winkelfunktionen</b>");
   if (winkelfunktionen_eingabe == 90 || winkelfunktionen_eingabe == 270)
	{
	winkelfunktionen_tan = "Der Tangens ist für einen Winkel von 90° und 270° nicht definiert.";
	}
   else
	{
	winkelfunktionen_tan = Math.round(Math.tan(winkelfunktionen_grad) * 100) / 100;
	}
   winkelfunktionen_sin = Math.round(Math.sin(winkelfunktionen_grad) * 100) / 100;
   winkelfunktionen_cos = Math.round(Math.cos(winkelfunktionen_grad) * 100) / 100;
document.getElementById("winkelfunktionen_div").innerHTML = ("Tangens = " + winkelfunktionen_tan + "<br>Sinus = " + winkelfunktionen_sin + "<br>Cosinus = " + winkelfunktionen_cos);
}
}


</script>
<form name="winkelfunktionen_form">
<p>Geben Sie einen Winkel in der Einheit Grad ein, um die zugehörigen Winkelfunktionen Tangens, Sinus und Cosinus auszurechnen.</p>
Winkel in Grad: <input name="input_winkelfunktionen_eingabe" size="10" value="" type="text">


<!-- Aufruf der Funktionen input_gewuenscht_schaummenge() und output_gewuenscht_schaummenge() beim Klicken auf folgende Schaltfläche -->
<p><input value=" Winkelfunktionen ausrechnen " onclick="input_winkelfunktionen(),output_winkelfunktionen()" type="button" >&nbsp;(auf 2 Nachkommastellen gerundet)</p>
</form>

<div id="winkelfunktionen_ueberschrift"></div>
<div id="winkelfunktionen_div"></div>
