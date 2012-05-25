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

require_once("./../../jamp/class/system.class.php");
if(!isset($_GET["lang"])) die('Specificare la lingua da creare. Es: makelang.php?lang=IT');
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);

$dir = "./".strtoupper($_GET["lang"]);
if(file_exists($dir)) die("La lingua <b>".strtoupper($_GET["lang"])."</b> è già presente, per aggiornare le proprietà usate: updatelang.php?lang=".strtoupper($_GET["lang"]));
if(!mkdir($dir, 0750)) die("Impossibile creare la directory: $dir!");
print "Nuova lingua: <b>".strtoupper($_GET["lang"])."</b>";
print "<br>Directory creata: $dir.";
foreach($objall as $obj)
{
	$obj = str_replace(".obj.php", "", $obj);
	$objprop = $system->newObj($obj, $obj);
	$file = "$dir/$obj.property.php";
	$handle = fopen($file, "w");
	fwrite($handle,"\n".'<?php');
	fwrite($handle,"\n".'/**');
	fwrite($handle,"\n".'* Properietà '.strtoupper($obj).'');
	fwrite($handle,"\n".'* @author	Alyx-Software Innovation <info@alyx.it>');
	fwrite($handle,"\n".'* @version	'.$system->version);
	fwrite($handle,"\n".'* @package	Develop');
	fwrite($handle,"\n".'* @copyright Alyx-Software Innovation '.date("Y"));
	fwrite($handle,"\n".'* @license GNU Public License');
	fwrite($handle,"\n".'* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/');
	fwrite($handle,"\n".'*/');
	fwrite($handle,"\n");
	fwrite($handle,"\n".'$propertyHELP = Array();');
	foreach($objprop->getProperty() as $k => $proparray)
	{
		fwrite($handle,"\n".'$propertyHELP["'.$k.'"] = "";');
	}
	fwrite($handle,"\n".'?>');
	fclose($handle);
	print "<br>File proprietà creato: $file";
}
?> 