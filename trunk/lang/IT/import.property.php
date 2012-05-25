
<?php
/**
* Properietà IMPORT
* @author	Alyx-Software Innovation <info@alyx.it>
* @version	0.4.0
* @package	Develop
* @copyright Alyx-Software Innovation 2008
* @license GNU Public License
* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/
*/

$propertyHELP = Array();
$propertyHELP["id"]                    = "Nome univoco dell'oggetto.";
$propertyHELP["debug"]                 = "Attiva il debug dell'oggetto.|true,false";
$propertyHELP["from"]                  = "Datasource da cui importare i dati.";
$propertyHELP["to"]                    = "Datasource in cui importare i dati.";
$propertyHELP["fieldFrom"]             = "Nome del campo da importare.";
$propertyHELP["fieldTo"]               = "Nome del campo in cui importare i dati";
$propertyHELP["format"]                = "Style di formattazione.";
$propertyHELP["method"]                = "Modalità di importazione dei dati.\n\n error:	l'inserimento viene bloccato in corrispondenza di un eventuale errore nell'inserimento.\nbypass:	prova ad inserire tutte le righe ignorando eventuali errori di inserimento.\nupdate:	l'inserimento viene sostituito con un aggiornamento in corrispondenza di un eventuale errore nell'inserimento|bypass,update,error";
$propertyHELP["dsobj"]                 = "ID dell'oggetto datasource associato.";
?>