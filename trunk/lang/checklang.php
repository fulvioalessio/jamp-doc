<?php
/**
* Crea i file per una nuova lingua
* @author	Alyx Association <info@alyx.it>
* @version	beta 3.0
* @package	Oggetti
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/
*/

$dir = "./../../jamp";
print "JAMP controllato: $dir<br>";
require_once("$dir/class/system.class.php");
if(!isset($_GET["lang"])) die('Specificare la lingua da controllare. Es: checklang.php?lang=IT ');
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);

$dir = "./".strtoupper($_GET["lang"]);
print "Controllo lingua: <b>".strtoupper($_GET["lang"])."</b>";
foreach($objall as $obj)
{
	if ($obj[0] == ".") continue;
	$obj = str_replace(".obj.php", "", $obj);
	$objprop = $system->newObj($obj, $obj);
	$file = "$dir/$obj.property.php";
	if (!file_exists($file)) die("Non trovato: $file");
	require_once($file);
	$arrProperty = $objprop->getProperty();
	foreach($arrProperty as $k => $proparray)
	{
		if(!isset($propertyHELP[$k])) print "<br><b>$obj -> $k</b>: Nuova propriet&#224; non dichiarata (eseguire updatelang.php?lang=".strtoupper($_GET["lang"])."&template=template.".strtoupper($_GET["lang"]).".php)";
		else if(empty($propertyHELP[$k])) print "<br><b>$obj -> $k</b>: Propriet&#224; non descritta, modificare il file.";
	}

	foreach($propertyHELP as $k => $proparray)
	{
		if (!array_key_exists($k, $arrProperty)) print "<br><b>$obj -> $k</b>:<font color=\"red\">Propriet&#224; inesistente</font>";
	}
}
?> 