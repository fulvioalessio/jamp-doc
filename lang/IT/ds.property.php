
<?php
/**
* Properietà DS
* @author	Alyx-Software Innovation <info@alyx.it>
* @version	3.0.0_beta
* @package	Develop
* @copyright Alyx-Software Innovation 2012
* @license GNU Public License
* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/
*/

$propertyHELP = Array();
$propertyHELP["id"]                    = "Nome univoco dell'oggetto.";
$propertyHELP["debug"]                 = "Attiva il debug dell'oggetto.|true,false";
$propertyHELP["out"]                   = "Formato di rilascio dati|json,xml.";
$propertyHELP["focusnew"]              = "ID del primo campo su cui posizionari durante l'inserimento.\nE' possibile specificare un campo variabile di posizione.\nPer esempio è possibile posizionarsi su un nuovo campo della tabella scrivendo: 'gridds_1_\$' in cui '\$' è il tag di posizione e '1' il numero della colonna.";
$propertyHELP["focustabnew"]           = "Id del tabs e tab da selezionare durante l'inserimento.\nEs. tabs1.tab1";
$propertyHELP["dshost"]                = "Nome dell'host a cui ci si connette.";
$propertyHELP["dsport"]                = "Numero della porta dell'host.";
$propertyHELP["dsuser"]                = "Nome utente per la connessione all'host.";
$propertyHELP["dspwd"]                 = "Password per la connessione all'host.";
$propertyHELP["conn"]                  = "Nome della connessione configurata.";
$propertyHELP["store"]                 = "ID del datasource storizzato.";
$propertyHELP["event"]                 = "Disattiva gli eventi dell'oggetto.|none,null";
$propertyHELP["xml"]                   = "Codice xml da restituire come dati.";
$propertyHELP["encpwd"]                = "Codifica della password utilizzata per il modulo di login.|blank,md5";
$propertyHELP["printxml"]              = "Restituisce l'xml dei dati.|true,false";
$propertyHELP["loadall"]               = "Carica i dati al primo caricamento della pagina html.|true,false";
$propertyHELP["load"]                  = "Stabilsce se il datasource puo' restituire dati|true,false";
$propertyHELP["readonly"]              = "Oggetto in sola lettura.|true,false";
$propertyHELP["confirm"]               = "Visualizza il messaggio di conferma per il salvataggio per la modalità table e row.|true,false";
$propertyHELP["objtype"]               = "Nome dell'oggetto da inserire.";
$propertyHELP["selecteditems"]         = "Campi da selezionare nella query  (Usa come separatore la virgola es: item1,item2).";
$propertyHELP["dsdefault"]             = "Nome dello schema selezionato di default.";
$propertyHELP["dstable"]               = "Nome della tabella/e utilizzata/e (Usa come separatore la virgola es: tab1,tab2).";
$propertyHELP["dsorder"]               = "Campo utilizzato per l'ordinamento dei dati.";
$propertyHELP["dswhere"]               = "Filtro di selezione.";
$propertyHELP["dskey"]                 = "Chiave usata dalla tabella.";
$propertyHELP["dssavetype"]            = "Tipo di salvataggio:\n- table, salva tutti i dati della tabella.\n- row, salva solo il record corrente.\n - live, salva automaticamente i dati ad ogni modifica di un campo del datasource.|table,row,live";
$propertyHELP["join"]                  = "Nome della tabella collegata.";
$propertyHELP["joinsave"]              = "Nome della tabella in cui salvare i dati ottenuti da un join.\nSe impostato a 'join' salverà i dati nella tabella specificata nel campo join.";
$propertyHELP["jointype"]              = "Tipo di collegamento.";
$propertyHELP["joinrule"]              = "Legame tra le tabelle.";
$propertyHELP["dslock"]                = "Nome del campo da utilizzare per riconoscere la modifica della riga da parte di un altro utente.";
$propertyHELP["dsrefresh"]             = "Id dei datasource in cui eseguire il refresh (Usa come separatore la virgola).";
$propertyHELP["dsreferences"]          = "Id dei datasource con cui vi è un legame (Chiavi esterne - Usa come separatore la virgola).";
$propertyHELP["referencestable"]       = "Da utilizzare in caso di riferimenti multipli.\nConsente di specificare il nome delle tabelle a cui si fa riferimento (USa come separatore la virgola).";
$propertyHELP["referenceskey"]         = "Nome della chiave esterna (campo del datasource specificato in 'dsreferences').";
$propertyHELP["foreignkey"]            = "Chiave interna legata alla 'referenceskey'";
$propertyHELP["deleteoncascate"]       = "Elimina in cascata i dati legati al datasource a cui si fa rifeimento.|true,false";
$propertyHELP["deleteall"]             = "Elimina tutti i record del datasource|true,false";
$propertyHELP["dsengine"]              = "Tipo datasource da utilizzare.|filesystem,ldap,record,xml,ssh,mysql";
$propertyHELP["dsquery_select"]        = "Specifica manualmente la query di selezione.";
$propertyHELP["dsquery_insert"]        = "Specifica manualmente la query di inserimento.";
$propertyHELP["dsquery_update"]        = "Specifica manualmente la query di aggiornamento.";
$propertyHELP["dsquery_delete"]        = "Specifica manualmente la query di eliminazione.";
$propertyHELP["dsquery_deleteall"]     = "Specifica manualmente la query di eliminazione di tutti i dati.";
$propertyHELP["dsextraquery"]          = "Codice da eseguire con la query di selezione automatica (Per esempio: GROUP BY ('campo')";
$propertyHELP["dslimit"]               = "Limita il risultato della query.";
$propertyHELP["action"]                = "Pagina da richiamare per il caricamento dei dati.";
$propertyHELP["fetch"]                 = "Formato dei dati restituiti.|object,row,assoc,array";
$propertyHELP["ghostdata"]             = "Abilita/Disabilita messaggio di avvenuto salvataggio|true,false.";
$propertyHELP["sslmode"]               = "Modalità SSL.|disable,allow,prefer,require";
$propertyHELP["dsparentkey"]           = "Campo che contiene il valore della chiave del padre.";
$propertyHELP["dsname"]                = "Nome del campo nodo.";
$propertyHELP["alias"]                 = "Alias del nodo root.";
$propertyHELP["base"]                  = "Path della root.";
$propertyHELP["select"]                = "Path iniziale.";
$propertyHELP["filter"]                = "Filtro di selezione.";
$propertyHELP["justthese"]             = "Nome dei campi da restituire.";
$propertyHELP["scope"]                 = "Modalità di restituzione dei dati.\n- base, restituisce solo il nodo selezionato.\n -onelevel, restituisce tutti i figli del nodo padre.\n - tree, restituisce tutta la gerarchia.|base,onelevel,tree.";
$propertyHELP["recname"]               = "Nome del campo record assegnato.";
$propertyHELP["reclength"]             = "Dimensione del campo record assegnato.";
$propertyHELP["privkeyfile"]           = "File contenente la chiave privata SSH.";
$propertyHELP["pubkeyfile"]            = "File contenente la chiave pubblica SSH.";
$propertyHELP["fieldname"]             = "Nome dei campi (csv)";
$propertyHELP["fieldseparator"]        = "Carattere separatore (cvs)";
$propertyHELP["fieldencloser"]         = "Carattere delimitazione del campo (cvs)";
$propertyHELP["fieldescape"]           = "Carattere di escape";
$propertyHELP["prefix"]                = "Imposta il prefisso internazionale, di default: +39";
$propertyHELP["verbose"]               = "Restituisce maggiori dettagli sulla transazione.|1,0";
$propertyHELP["gateway"]               = "Imposta il Gataway da utilizzare.";
$propertyHELP["carriergateways"]       = "Imposta il carrier da utilizzare.";
$propertyHELP["answerrecipients"]      = "Indirizzo per la risposta,";
$propertyHELP["format"]                = "Style di formattazione.";
$propertyHELP["unload"]                = "Abilita/Disabilita richiesta di salvataggio che appare durante unload della pagina|true,false.";
$propertyHELP["java"]                  = "Nome del/dei file javascript usati dall'oggetto.";
?>