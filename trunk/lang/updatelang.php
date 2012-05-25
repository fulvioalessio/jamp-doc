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

require_once("./../../release/jamp/class/system.class.php");
if(!isset($_GET["lang"])) die('Specificare la lingua da aggiornare. Es: updatelang.php?lang=IT<br>E\' possibile specificare anche un template da utilizzare per scrivere le proprietà.<br>  Es: updatelang.php?lang=IT&template=template.IT.php');
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);

$dir = "./".strtoupper($_GET["lang"]);
print "Aggiornamento lingua: <b>".strtoupper($_GET["lang"])."</b>";
if(isset($_GET["template"]))
{
	require("./".$_GET["template"]);
	print "<br>Template usato: ./".$_GET["template"];
}
foreach($objall as $obj)
{
	$obj = str_replace(".obj.php", "", $obj);
	$objprop = $system->newObj($obj, $obj);
	$file = "$dir/$obj.property.php";

	if(file_exists($file)) require($file);
	$handle = fopen($file, "w");
	fwrite($handle,"\n".'<?php');
	fwrite($handle,"\n".'/**');
	fwrite($handle,"\n".'* Properietà '.strtoupper($obj).'');
	fwrite($handle,"\n".'* @author	Alyx-Software Innovation <info@alyx.it>');
	fwrite($handle,"\n".'* @version	0.4.0');
	fwrite($handle,"\n".'* @package	Develop');
	fwrite($handle,"\n".'* @copyright Alyx-Software Innovation 2008');
	fwrite($handle,"\n".'* @license GNU Public License');
	fwrite($handle,"\n".'* JAMP sorgenti e documentazione li trovi nel sito ufficiale http://jamp.alyx.it/');
	fwrite($handle,"\n".'*/');
	fwrite($handle,"\n");
 	fwrite($handle,"\n".'$propertyHELP = Array();');

	$newProp = array();
	foreach($objprop->getProperty() as $k => $proparray)
	{
		$value = "";
		$space = "";
		if(!empty($propertyHELP[$k])) $value = $propertyHELP[$k];
		if(empty($value) && !empty($propertyTEMPLATE[$k]))
		{
			$value = $propertyTEMPLATE[$k];
			$propertyHELP[$k] = $propertyTEMPLATE[$k];
		}
		for($i = 1; $i < 40 - strlen('$propertyHELP["'.$k.'"]'); $i++) $space.=" ";
		$value = str_replace("\n",'\n', $value);
		$value = str_replace("\"",'\"', $value);
		$value = str_replace("\$",'\$', $value);
		fwrite($handle,"\n".'$propertyHELP["'.$k.'"]'.$space.'= "'.$value.'";');
	}
	fwrite($handle,"\n".'?>');
	fclose($handle);
	print "<br>File proprietà creato: $file";
}
?> 
