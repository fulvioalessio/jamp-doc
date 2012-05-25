
<?php
/**
* Properietà TEXT
* @author	Alyx-Software Innovation <info@alyx.it>
* @version	3.0.0_beta
* @package	Develop
* @copyright Alyx-Software Innovation 2012
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
$propertyHELP["lang"]                  = "Specifica il codice della lingua utilizzata. ";
$propertyHELP["dir"]                   = "Direzione del testo:\n- LTR da sinistra a destra(default).\n- RTL da destra a sinistra. ";
$propertyHELP["template"]              = "Nome del template utilizzato dall'oggetto, se non specificato viene utilizzato quello di sistema.";
$propertyHELP["title"]                 = "Informazioni aggiuntive visualizzate al passaggio del mouse sull'oggetto istanziato.";
$propertyHELP["keypress"]              = "Consente di filtrare i caratteri";
$propertyHELP["blur"]                  = "Consente di validare il testo digitato durante l'evento onblur.";
$propertyHELP["send"]                  = "Consente di validare il testo digitato prima del salvataggio.";
$propertyHELP["minlength"]             = "Cosente di specificare la lunghezza minima del testo.";
$propertyHELP["name"]                  = "Nome dell'oggetto.";
$propertyHELP["value"]                 = "Valore dell'oggetto.";
$propertyHELP["defaultvalue"]          = "Valore di default dell'oggetto.";
$propertyHELP["size"]                  = "Dimensione dell'oggetto.";
$propertyHELP["maxlength"]             = "Numero massimo di caratteri accettati.";
$propertyHELP["alt"]                   = "Testo alternativo.";
$propertyHELP["src"]                   = "URL immagine.";
$propertyHELP["align"]                 = "Allineamento orizzontale.|left,center,right";
$propertyHELP["accesskey"]             = "Assegna un tasto per accedere all'oggetto.";
$propertyHELP["onfocus"]               = "Codice associato all'evento onfocus.";
$propertyHELP["onselect"]              = "Codice associato all'evento onselect.";
$propertyHELP["onblur"]                = "Codice associato all'evento onblur.";
$propertyHELP["onchange"]              = "Codice associato all'evento onchange.";
$propertyHELP["tabindex"]              = "Indice di tabulazione.";
$propertyHELP["id"]                    = "Nome univoco dell'oggetto.";
$propertyHELP["password"]              = "Nasconde il testo digitato.|true,false";
$propertyHELP["fileupload"]            = "Consente l'upload dei file.|true,false";
$propertyHELP["rewrite"]               = "Modalità di sovrascrittura del file uplodato|true,false,rename";
$propertyHELP["target"]                = "Destinazione degli URL da aprire.";
$propertyHELP["directory"]             = "Path delle immagini.";
$propertyHELP["dsobj"]                 = "ID dell'oggetto datasource associato.";
$propertyHELP["label"]                 = "Etichetta dell'oggetto.";
$propertyHELP["labelalign"]            = "Allineamento etichetta rispetto all'oggetto|left,right";
$propertyHELP["labelwidth"]            = "Larghezza dell'etichetta.";
$propertyHELP["labelstyle"]            = "Stile associato all'etichetta.";
$propertyHELP["calendar"]              = "Abilita disabilita la visualizzazione del calendario prevista di default se la formattazione e' di tipo date|true,false.";
$propertyHELP["csscalendar"]           = "Css usato per il calendario.";
$propertyHELP["classcalendar"]         = "Classe css usata per il calendario.";
$propertyHELP["format"]                = "Style di formattazione.";
$propertyHELP["java"]                  = "Nome del/dei file javascript usati dall'oggetto.";
$propertyHELP["cssfile"]               = "Nome del file css usato dall'oggetto.";
$propertyHELP["dsitem"]                = "Nome del campo datasource associato.";
$propertyHELP["disabled"]              = "Disabilita l'oggetto|true,false";
$propertyHELP["readonly"]              = "Oggetto in sola lettura.|true,false";
$propertyHELP["dsobjlist"]             = "ID del datasource usato per popolare la select.";
$propertyHELP["dsitemlist"]            = "Nome del campo usato per popolare la select.";
$propertyHELP["dssearch"]              = "Sintassi da usare per la ricerca es: `cognome` LIKE '\$\$VALUE\$\$%'";
$propertyHELP["minsearch"]             = "In modalità autocomplete consente di specificare il numero minimo di caratteri prima di edeguire la richiesta dei dati.";
$propertyHELP["savesearch"]            = "In modalità autocomplete consente di memorizzare i valori non presenti nella ricerca.";
$propertyHELP["forcename"]             = "Indica il nome che deve avere il file uplodato.";
$propertyHELP["dimension"]             = "Dimensione dell'immagine da salvare, utilizzare la ',' per salvare più formati(es. 100x200,400x100) .";
$propertyHELP["createdir"]             = "Se la directory di upload non esiste la crea.";
$propertyHELP["backgroundcolor"]       = "Colore di sfondo.";
$propertyHELP["width"]                 = "Larghezza dell'oggetto (con unità di misura es: 600px).";
$propertyHELP["height"]                = "Altezza dell'oggetto (con unità di misura es: 600px).";
$propertyHELP["autocomplete"]          = "Attributo HTML5 per il tag input.";
$propertyHELP["autofocus"]             = "Attributo HTML5 per il tag input.";
$propertyHELP["form"]                  = "Attributo HTML5 per il tag input.";
$propertyHELP["formaction"]            = "Attributo HTML5 per il tag input.";
$propertyHELP["formenctype"]           = "Attributo HTML5 per il tag input.";
$propertyHELP["formmethod"]            = "Attributo HTML5 per il tag input.";
$propertyHELP["formnovalidate"]        = "Attributo HTML5 per il tag input.";
$propertyHELP["formtarget"]            = "Attributo HTML5 per il tag input.";
$propertyHELP["list"]                  = "Attributo HTML5 per il tag input.";
$propertyHELP["max"]                   = "Attributo HTML5 per il tag input.";
$propertyHELP["min"]                   = "Attributo HTML5 per il tag input.";
$propertyHELP["multiple"]              = "Attributo HTML5 per il tag input.";
$propertyHELP["pattern"]               = "Attributo HTML5 per il tag input.";
$propertyHELP["placeholder"]           = "Attributo HTML5 per il tag input.";
$propertyHELP["required"]              = "Attributo HTML5 per il tag input.";
$propertyHELP["step"]                  = "Attributo HTML5 per il tag input.";
?>