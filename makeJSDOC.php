<html>
<BODY>
<?php
date_default_timezone_set('Europe/Rome');
$sql  = "DELETE FROM `ita_references` WHERE `type` = 'js';";
$sql .= makedir("./../jamp/js/", "js");
file_put_contents("referenceJS.sql", $sql);

function makedir($dir, $typedoc)
{
	$sql = "";
	$filename = scandir($dir);
	for($i = 2; $i<count($filename); $i++)
	{
		$txt = file($dir.$filename[$i]);
		$cls_name = preg_grep('/^function/i', $txt);
		foreach($cls_name as $row)
		$row = trim(str_replace("{", "", $row));
		$cls_name = trim(str_replace("function", "", $row));
		$cls_name = trim(str_replace("(", "", $cls_name));
		$cls_name = trim(str_replace(")", "", $cls_name));
		$cls_name = preg_grep('/var[ _a-zA-Z0-9=]{1,}new '.$cls_name.'/i', $txt);
		foreach($cls_name as $name)
		$cls_name = explode("=", $name);
		if(!isset($cls_name[0])) $cls_name = explode("=", $name);
		$cls_name = str_replace("var","",$cls_name[0]);
		$cls_name = addslashes(trim($cls_name));
		$text = preg_grep('/( ):( )function/i', $txt);
		foreach($text as $row)
		{
			if(preg_match('/function/i', $row))
			{
				$fnz = "";
				$cls_desc = "";
				$cls_fnz = addslashes(trim($row));
				preg_match('/[(][ _a-zA-Z0-9,]{1,}[)]/i', $cls_fnz, $fnzs);
				foreach($fnzs as $fnz)
				$fnz = str_replace("(","",$fnz);
				$fnz = str_replace(")","",$fnz);
				$param = explode(",",$fnz);
				$fnz = explode(":", $row);
				$fnz = trim(addslashes($fnz[0]));
				$p1 = isset($param[0]) ? trim(addslashes($param[0])) : "";
				$p2 = isset($param[1]) ? trim(addslashes($param[1])) : "";
				$p3 = isset($param[2]) ? trim(addslashes($param[2])) : "";
				$p4 = isset($param[3]) ? trim(addslashes($param[3])) : "";
				$p5 = isset($param[4]) ? trim(addslashes($param[4])) : "";
				$p6 = isset($param[5]) ? trim(addslashes($param[5])) : "";
				$p7 = isset($param[6]) ? trim(addslashes($param[6])) : "";
				$p8 = isset($param[7]) ? trim(addslashes($param[7])) : "";
				$t1 = isset($cls_param[0]) ? trim(addslashes($cls_param[0])) : "";
				$t2 = isset($cls_param[1]) ? trim(addslashes($cls_param[1])) : "";
				$t3 = isset($cls_param[2]) ? trim(addslashes($cls_param[2])) : "";
				$t4 = isset($cls_param[3]) ? trim(addslashes($cls_param[3])) : "";
				$t5 = isset($cls_param[4]) ? trim(addslashes($cls_param[4])) : "";
				$t6 = isset($cls_param[5]) ? trim(addslashes($cls_param[5])) : "";
				$t7 = isset($cls_param[6]) ? trim(addslashes($cls_param[6])) : "";
				$t8 = isset($cls_param[7]) ? trim(addslashes($cls_param[7])) : "";
				$key = "$cls_name.$fnz";
				if ($key == "FORMAT.format") $key = "FORMAT._format";
				$sql .= "\nINSERT INTO `ita_references` (`key`, `reference`, `update`, `type`, `cab`, `metodo`, `funzione`, `arg1`, `arg2`, `arg3`, `arg4`, `arg5`, `arg6`, `arg7`, `arg8`, `textarg1`, `textarg2`, `textarg3`, `textarg4`, `textarg5`, `textarg6`, `textarg7`, `textarg8`) VALUES ('$key', '".addslashes($cls_desc)."', '".date("Y-m-d H:i:s")."', '$typedoc', '$cls_name', '$fnz', '$cls_fnz', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8','$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8');";
				$param = "";
				$cls_param = "";
				$cls_desc = "";
			}
		}
	
	}
	return $sql;
}

?> 
<h1><a href="referenceJS.sql?<?php print time();?>">referenceJS.sql</a></h1>
</BODY>
</html>
