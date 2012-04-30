<?php
require_once("./../jamp/class/system.class.php");
$system = new ClsSystem(true);
$objall = $system->allObj();
unset($objall[0]);
unset($objall[1]);

?>
<html>
<BODY>
<a href="javascript:update();">Update Sito jamp.alyx.it</a><br>
<script language="JavaScript">
	function update()
	{
		for(var i = 0; i < document.forms.length; i++)
		{
			document.forms[i].submit();
		}
	}
</script>
<?php

$outmsg = "";

$KEYID = "OIIIIIIHJKHGYFERtyuhjbvcxsdrtyghvbrtyyyhge4w35543578765433358";
$count = 0;
foreach($objall as $obj)
{
	 if ($obj[0] == ".") continue;
	if($obj != "property.obj.php")
	{
		$obj = str_replace(".obj.php", "", $obj);
		$objprop = $system->newObj($obj, $obj);
		$outHTML = "";
		if (isset($objprop->test))
		{
			if ($objprop->test)
			{
				$outHTML .="\n".'<div class="box">';
				$outHTML .="\n".'	<FONT COLOR="red">OGGETTO IN SVILUPPO, DISPONIBILE PER IL TEST!</FONT>';
				$outHTML .="\n".'</div>';
				$outmsg .= "\\n$obj - Oggetto TEST";
			}
		}

		$outHTML .="\n".'<p><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">REFERENCE <span class="notranslate">XML - '.strtoupper($obj).'</span></span></p>';
		$outHTML .="\n".'<p>';

		$outHTML .="\n".'Oggetto: <b><span class="notranslate">'.strtoupper($obj).'</span></b><br>';
		if(trim($obj) == "map") $outHTML .="\n".'<a href="./../../center.php?menu=doc&value=map">Vedi Maps</a><br>';

		if(isset($objprop->child))
		{
			$outHTML .="\n".'<div class="box">';
			$outHTML .="\n".'<span class="notranslate">';
			$outHTML .="\n".'	<B>&lt;nome </B><FONT COLOR="#008000">typeobj=</FONT><FONT COLOR="#ff0000">"'.$obj.'"</FONT><FONT COLOR="#008000"> attribute=</FONT><FONT COLOR="#ff0000">&quot;valore&quot;</FONT>...<B>&gt;</B><br>';
			$outHTML .="\n".'...<br>';
			$outHTML .="\n".'	<B>&lt;/nome&gt;</B><br>';
			$outHTML .="\n".'</span>';
			$outHTML .="\n".'</div>';
		} 
		else
		{
			$outHTML .="\n".'<div class="box">';
			$outHTML .="\n".'<span class="notranslate">';
			$outHTML .="\n".'	<B>&lt;nome </B><FONT COLOR="#008000">typeobj=</FONT><FONT COLOR="#ff0000">"'.$obj.'"</FONT><FONT COLOR="#008000"> attribute=</FONT><FONT COLOR="#ff0000">&quot;valore&quot;</FONT>...<B>/&gt;</B><br>';
			$outHTML .="\n".'</span>';
			$outHTML .="\n".'</div>';
		}
		$outHTML .="\n".'<p>'; 
		$outHTML .="\n".'<br>';
		$outHTML .="\n".'<font size="+1" color="#000051"><b>Attributi:</b></font>';
		$outHTML .="\n".'<br>';
		$propertyHELP = "";
		require("./../develop/lang/IT/$obj.property.php");
		foreach($objprop->getProperty() as $k => $default)
		{
			if(isset($propertyHELP[$k]))
			{
				$outHTML .="\n".'<b><span class="notranslate">'.$k.'</span></b><br>';
				if($k == "format") $outHTML .="\n".'<a href="./../../center.php?menu=doc&amp;value=format">Vedi Formattazione</a><br>';
				if($k == "value") $outHTML .="\n".'<a href="./../../center.php?menu=doc&amp;value=tagvalue">Vedi TAG VALUE</a><br>';
				if($k == "conn") $outHTML .="\n".'<a href="./../../center.php?menu=doc&amp;value=connection">Vedi Connessioni</a><br>';
				$prop = explode("|",$propertyHELP[$k]);
				$text = $prop[0];
				$values = (isset($prop[1])) ? $prop[1] : ""; 
				$outHTML .="\n".''.$text.'<br>';
				if(!empty($values)) $outHTML .="\n".'Valori consentiti: <i><span class="notranslate">'.$values.'</span></i><br>';
				if(!empty($default))
				{
 					if(is_array($default)) $default = implode(", ", $default);
					$outHTML .="\n".'Valori di default: <i><span class="notranslate">'.$default.'</span></i><br>';
				}
			} else print "<b>$obj</b> attributo: $k ignorato perchè non descritto.<br>";
			$outHTML .="\n".'<br>';
		}
		$outHTML .="\n".'</p>'; 

		//Funzioni intercettate
		$clsname = "";
		exec('cat ./../jamp/js/'.$obj.'.js |grep "= new cls"|awk \'{print $2}\'', $clsname, $err);
		if (isset($clsname[0]))
		{
			$outHTML .="\n".'<p style="text-align: left;"><span class="squares"><span>&#8250;&#8250;</span></span> <span class="news_title_grn">Elenco dei metodi Javascript intercettabili dall\'utente:</span></p><p><span class="notranslate">';
			$ret = "";
			exec('cat ./../jamp/js/'.$obj.'.js |grep ": function"| awk \'{print "<b>Sintassi JS:</b> SYSTEMEVENT.addBeforeCustomFunction(\"'.$clsname[0].'\",\""$1"\", \"User function\"); <b> Function parameters:</b> "$3$4$5$6$7$8$9$410$11$12$13$14$15$16$17$18$19$20}\'', $ret, $err);
			foreach($ret as $k)
			{
				$outHTML .="\n$k<br>"; 
			}

			$outHTML .="\n<br><br>"; 

			$ret = "";
			exec('cat ./../jamp/js/'.$obj.'.js |grep ": function"| awk \'{print "<b>Sintassi JS:</b> SYSTEMEVENT.addAfterCustomFunction(\"'.$clsname[0].'\",\""$1"\", \"User function\"); <b> Function parameters:</b> "$3$4$5$6$7$8$9$410$11$12$13$14$15$16$17$18$19$20}\'', $ret, $err);
			foreach($ret as $k)
			{
				$outHTML .="\n$k<br>"; 
			}
			$outHTML .="\n</span></p>"; 
		}
 		$outHTML =  htmlspecialchars($outHTML);
		print '
		<form method="POST" action="http://jamp.alyx.it/toolsadmin.php" target="iframe'.$count.'">
		<INPUT type="hidden" name="id" value="'.$KEYID.'">
		<INPUT type="hidden" name="action" value="references">
		<INPUT type="hidden" name="obj" value="'.$obj.'">
		<INPUT type="hidden" name="reference" value="'.$outHTML.'">
		</form>';
		print "UPDATE WEB: <b>$obj</b> Esito: <b><span id=\"status$count\"></span></b><iframe name=\"iframe$count\" frameborder=\"0\" width=\"300\" height=\"23\"></iframe>";
		$count++;
	}
}
?> 
<script language="JavaScript">
<?php print "alert(\"Codice pronto per essere inviato sul WEB!$outmsg\");" ?>
</script>
</BODY>
</html>
