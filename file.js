var elementy;


elementy = document.querySelectorAll("div[data-hovorici]");

console.log(elementy);










/*

Naprogramujte skript, který usnadní zobrazování dialogů. Skript načte elementy, které mají atribut data-hovorici.
V nich vytvoří element span s textem, který bude obsahovat hodnotu toho atributu a textový řetězec " řekl: ".
Tento element se musí vložit na začátek elementu. Text by měl být ideálně v uvozovkách.

Ukažme si vše na příkladu.

Vstupní HTML kód:

<p data-hovorici="Marek">Ahoj, jak se máš?</p>
Výstupní DOM (HTML):

<p data-hovorici="Marek"><span>Marek řekl: </span>"Ahoj, jak se máš?"</p>

*/
