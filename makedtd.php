<?php
require_once("./../jamp/class/system.class.php");
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);
$dtd = "./jamp.dtd";
$handle = fopen($dtd, "w");
fwrite($handle,'<?xml version="1.0" encoding="UTF-8"?>'."\n");
fwrite($handle,"<!ELEMENT jamp (page)>\n");
$txt = implode("*,",$objall)."*";
$txt = str_replace("property.obj.php", "", $txt);
$txt = str_replace(".obj.php", "", $txt);
$txt = str_replace(".svn*,","", $txt);
$txt = str_replace(",*,",",", $txt);
fwrite($handle,"<!ELEMENT page ANY>\n");


foreach($objall as $obj)
{
	if($obj != "property.obj.php" && $obj != ".svn")
	{
		$obj = str_replace(".obj.php", "", $obj);
		$objprop = $system->newObj($obj, $obj);
		if($obj!="page") 
		{
			if(isset($objprop->child))
			{
				fwrite($handle,"<!ELEMENT $obj ANY>\n");
				
			}else fwrite($handle,"<!ELEMENT $obj (#PCDATA)>\n");
		}
		fwrite($handle,"<!ATTLIST $obj\n");
		require("./lang/IT/$obj.property.php");
		foreach($objprop->getProperty() as $k => $default)
		{
			if(isset($propertyHELP[$k]))
			{
				if ($k!="typeobj")
				{
					if ($k=="id") fwrite($handle,"$k CDATA #REQUIRED\n");
					else 
					if ($k=="enctype") fwrite($handle,"$k CDATA #IMPLIED\n");
					else
					if ($k=="maxopacity") fwrite($handle,"$k CDATA #IMPLIED\n");
					else
					if ($k=="scrollbar") fwrite($handle,"$k CDATA #IMPLIED\n");
					else
					{
						$prop = explode("|",$propertyHELP[$k]);
						$text = $prop[0];
						if (isset($prop[1]))
						{
							$prop[1]=str_replace(",","|",$prop[1]);
							fwrite($handle,"$k ($prop[1]) #IMPLIED\n");
						} else fwrite($handle,"$k CDATA #IMPLIED\n");
					}
				}
			} else print "<b>$obj</b> attributo: $k ignorato perchè non descritto.<br>";
		}
		fwrite($handle,">\n");
	}
}
fclose($handle);
print date("d-m-Y H:i:s")." File jamp.dtd creato devi uplodarlo su http://jamp.alyx.it/jamp.dtd";
?> 