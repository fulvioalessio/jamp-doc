<?php
require_once("./../jamp/class/system.class.php");
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);

foreach($objall as $obj)
{
	if($obj[0] == ".") continue; 
	if($obj != "property.obj.php")
	{
		$obj = str_replace(".obj.php", "", $obj);
		$objprop = $system->newObj($obj, $obj);
		$handle = fopen("xml/$obj.html", "w");
fwrite($handle,"\n".'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="JAMP - framework, ajax, php, mysql, javascript, opensource, gpl">
<meta name="keywords" content="framework ajax php mysql javascript opensource gpl">
<meta name="author" content="Alyx Software Innovation">
<link rel="stylesheet" type="text/css" href="css/template.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
<title>JAMP</title>
</head>
<body>');
		fwrite($handle,"\n".'<p><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">MANUALE <span class="notranslate">XML - '.strtoupper($obj).'</span> [<a href="./../../center.php?menu=reference">Indice</a>]</span></p>');
		fwrite($handle,"\n".'<p>');
		fwrite($handle,"\n".'Oggetto: <b><span class="notranslate">'.strtoupper($obj).'</span></b><br>');
		if(trim($obj) == "map") fwrite($handle,"\n".'<a href="./../../center.php?menu=doc&value=map">Vedi Maps</a><br>');

		if(isset($objprop->child))
		{
			fwrite($handle,"\n".'<div class="box">');
			fwrite($handle,"\n".'<span class="notranslate">');
			fwrite($handle,"\n".'	<B>&lt;nome </B><FONT COLOR="#008000">typeobj=</FONT><FONT COLOR="#ff0000">"'.$obj.'"</FONT><FONT COLOR="#008000"> attribute=</FONT><FONT COLOR="#ff0000">&quot;valore&quot;</FONT>...<B>&gt;</B><br>');
			fwrite($handle,"\n".'...<br>');
			fwrite($handle,"\n".'	<B>&lt;/nome&gt;</B><br>');
			fwrite($handle,"\n".'</span>');
			fwrite($handle,"\n".'</div>');
		} 
		else
		{
			fwrite($handle,"\n".'<div class="box">');
			fwrite($handle,"\n".'<span class="notranslate">');
			fwrite($handle,"\n".'	<B>&lt;nome </B><FONT COLOR="#008000">typeobj=</FONT><FONT COLOR="#ff0000">"'.$obj.'"</FONT><FONT COLOR="#008000"> attribute=</FONT><FONT COLOR="#ff0000">&quot;valore&quot;</FONT>...<B>/&gt;</B><br>');
			fwrite($handle,"\n".'</span>');
			fwrite($handle,"\n".'</div>');
		}
		fwrite($handle,"\n".'<p>'); 
		fwrite($handle,"\n".'<br>');
		fwrite($handle,"\n".'<font size="+1" color="#000051"><b>Attributi:</b></font>');
		fwrite($handle,"\n".'<br>');
		$propertyHELP = "";
		require("./../develop/lang/IT/$obj.property.php");
		foreach($objprop->getProperty() as $k => $default)
		{
			if(isset($propertyHELP[$k]))
			{
				fwrite($handle,"\n".'<b><span class="notranslate">'.$k.'</span></b><br>');
				if($k == "format") fwrite($handle,"\n".'<a href="./../../center.php?menu=doc&amp;value=format">Vedi Formattazione</a><br>');
				if($k == "value") fwrite($handle,"\n".'<a href="./../../center.php?menu=doc&amp;value=tagvalue">Vedi TAG VALUE</a><br>');
				if($k == "conn") fwrite($handle,"\n".'<a href="./../../center.php?menu=doc&amp;value=connection">Vedi Connessioni</a><br>');
				$prop = explode("|",$propertyHELP[$k]);
				$text = $prop[0];
				$values = (isset($prop[1])) ? $prop[1] : ""; 
				fwrite($handle,"\n".''.$text.'<br>');
				if(!empty($values)) fwrite($handle,"\n".'Valori consentiti: <i><span class="notranslate">'.$values.'</span></i><br>');
				if(!empty($default))
				{
 					if(is_array($default)) $default = implode("'", $default);
					fwrite($handle,"\n".'Valori di default: <i><span class="notranslate">'.$default.'</span></i><br>');
				}
			} else print "<b>$obj</b> attributo: $k ignorato perchè non descritto.<br>";
			fwrite($handle,"\n".'<br>');
		}
		fwrite($handle,"\n".'</p>'); 

		//Funzioni intercettate
		$clsname = "";
		exec('cat ./../js/'.$obj.'.js |grep "= new cls"|awk \'{print $2}\'', $clsname, $err);
		if (isset($clsname[0]))
		{
			fwrite($handle,"\n".'<p><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">Elenco dei metodi Javascript intercettabili dall\'utente:</span></p><p><span class="notranslate">');
			$ret = "";
			exec('cat ./../js/'.$obj.'.js |grep ": function"| awk \'{print "<b>Sintassi JS:</b> SYSTEMEVENT.addBeforeCustomFunction(\"'.$clsname[0].'\",\""$1"\", \"User function\"); <b> Function parameters:</b> "$3$4$5$6$7$8$9$410$11$12$13$14$15$16$17$18$19$20}\'', $ret, $err);
			foreach($ret as $k)
			{
				fwrite($handle,"\n$k<br>"); 
			}

			fwrite($handle,"\n<br><br>"); 

			$ret = "";
			exec('cat ./../js/'.$obj.'.js |grep ": function"| awk \'{print "<b>Sintassi JS:</b> SYSTEMEVENT.addAfterCustomFunction(\"'.$clsname[0].'\",\""$1"\", \"User function\"); <b> Function parameters:</b> "$3$4$5$6$7$8$9$410$11$12$13$14$15$16$17$18$19$20}\'', $ret, $err);
			foreach($ret as $k)
			{
				fwrite($handle,"\n$k<br>"); 
			}
			fwrite($handle,"\n</span></p>"); 
		}
		fclose($handle);
	}
}
?> 