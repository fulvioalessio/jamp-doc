
<?php
/**
* Properietà MAP
* @author	Alyx-Software Innovation <info@alyx.it>
* @version	0.4.0
* @package	Develop
* @copyright Alyx-Software Innovation 2008
* @license GNU Public License
* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/
*/

$propertyHELP = Array();
$propertyHELP["debug"]                 = "Attiva il debug dell'oggetto.|true,false";
$propertyHELP["onclick"]               = "Codice associato all'evento onclick.";
$propertyHELP["ondblclick"]            = "Codice associato all'evento ondblclick.";
$propertyHELP["onmousedown"]           = "Codice associato all'evento onmousedown.";
$propertyHELP["onmouseup"]             = "Codice associato all'evento onmouseup.";
$propertyHELP["onmouseover"]           = "Codice associato all'evento onmouseover.";
$propertyHELP["onmousemove"]           = "Codice associato all'evento onmousemove.";
$propertyHELP["onmouseout"]            = "Codice associato all'evento onmouseout.";
$propertyHELP["onkeypress"]            = "Codice associato all'evento onkeypress.";
$propertyHELP["onkeydown"]             = "Codice associato all'evento onkeydown.";
$propertyHELP["onkeyup"]               = "Codice associato all'evento onkeyup.";
$propertyHELP["class"]                 = "Nome della classe di stile utilizzata dall'oggetto.";
$propertyHELP["style"]                 = "Proprietà di stile.";
$propertyHELP["lang"]                  = "Lingua da utilizzare per le infomazioni testuali";
$propertyHELP["dir"]                   = "Direzione del testo:\n- LTR da sinistra a destra(default).\n- RTL da destra a sinistra. ";
$propertyHELP["template"]              = "Nome del template utilizzato dall'oggetto, se non specificato viene utilizzato quello di sistema.";
$propertyHELP["title"]                 = "Informazioni aggiuntive visualizzate al passaggio del mouse sull'oggetto istanziato.";
$propertyHELP["id"]                    = "Nome univoco dell'oggetto.";
$propertyHELP["libraries"]             = "Consente di specificare la libreria da utilizzare.";
$propertyHELP["address"]               = "Indirizzo(da usare in alternativa alle coordinate(lng e lat)";
$propertyHELP["lat"]                   = "latitudine del centro mappa";
$propertyHELP["lng"]                   = "longitudine del centro mappa";
$propertyHELP["zoom"]                  = "livello di zoom";
$propertyHELP["traffic"]               = "true visualizza il traffico";
$propertyHELP["display"]               = "ID dell'oggetto che visualizza/nasconde la mappa.\nEs. \"display\"=\"tabs1\"\nL'init della mappa avverà solamente alla chiamata della funzione tabs1Display().\n Per un corretto funzionamento della mappa l'inizializzazione deve avvenire quando la mappa non è nascosta dal css. Non è necessario impostare questo valore poichè viene ereditato automaticamente in base all'oggetto in cui si trova la mappa.";
$propertyHELP["route"]                 = "id del frame sul quale visualizzare il percorso";
$propertyHELP["dsobj"]                 = "ID dell'oggetto datasource associato.";
$propertyHELP["dsitem"]                = "Nome del campo datasource associato.";
$propertyHELP["java"]                  = "Nome del/dei file javascript usati dall'oggetto.";
$propertyHELP["marker"]                = "Aggiunge un marker in corrispondenza del centro della mappa|true,false.";
$propertyHELP["html"]                  = "Codice html da associare al marker centro mappa.";
$propertyHELP["icon"]                  = "Link icona da associare al marker centro mappa.";
$propertyHELP["draggable"]             = "Abilita/Disabilita il trascinamento del marker centro mappa|true,false.";
$propertyHELP["dsmarker"]              = "Aggiunge i marker ogni riga restituita dal datasource|true,false";
?>
