<html>
<BODY>
<?php
date_default_timezone_set('Europe/Rome');
$sql  = "DELETE FROM `ita_references` WHERE `type` = 'php_class';";
$sql .= "DELETE FROM `ita_references` WHERE `type` = 'php_obj';";
$sql .= makedir("./../jamp/class/", "php_class");
$sql .= makedir("./../jamp/obj/", "php_obj");
file_put_contents("referencePHP.sql", $sql);

function makedir($dir, $typedoc)
{
	$sql = "";
	$filename = scandir($dir);
	for($i = 2; $i<count($filename); $i++)
	{
		$txt = file($dir.$filename[$i]);
		print "<pre>";
		$cls_name = preg_grep('/(^class)|(^abstract class)/i', $txt);
		foreach($cls_name as $row)
		$row = trim(str_replace("{", "", $row));
		$cls_name = trim(str_replace("class ", "", $row));
		$cls_name = trim(str_replace("abstract ", "", $cls_name ));
		$cls_name = trim(str_replace("extends FPDF", "", $cls_name ));
		$cls_name = trim(str_replace("extends iDS", "", $cls_name ));
		$cls_name = trim(str_replace("extends ClsObject", "", $cls_name ));
		$text = preg_grep('/((\*)|(public function))/i', $txt);
		$fnz = "";
		$cls_desc = "";
		foreach($text as $row)
		{
			if(preg_match('/\/\*/i', $row)) $cls_desc = "";
			else if(preg_match('/\@param/i', $row)) $cls_param[] = trim(str_replace("*","", str_replace("@param","",$row)));
			else if(preg_match('/\@return/i', $row))
			{
				$row = trim(str_replace("@return","",$row));
				$row = trim(str_replace("*","",$row));
				$cls_desc .= "\r\n<b>return</b> ".$row."\r\n";
			}
			else if(preg_match('/\*\//i', $row)) $i = $i;
			else if(preg_match('/public function/i', $row))
			{
				$cls_fnz = addslashes(trim($row));
				preg_match('/public function [_a-zA-Z0-9]{1,}/i', $cls_fnz, $fnzs);
				foreach($fnzs as $fnz)
				$fnz = trim(str_replace("public function","",$fnz))."()";
				preg_match_all('/\$[a-zA-Z]{1,}/', $row, $param);
				$param = $param[0];
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
				$sql .= "\nINSERT INTO `ita_references` (`key`, `reference`, `update`, `type`, `cab`, `metodo`, `funzione`, `arg1`, `arg2`, `arg3`, `arg4`, `arg5`, `arg6`, `arg7`, `arg8`, `textarg1`, `textarg2`, `textarg3`, `textarg4`, `textarg5`, `textarg6`, `textarg7`, `textarg8`) VALUES ('".$cls_name."->$fnz', '".addslashes($cls_desc)."', '".date("Y-m-d H:i:s")."', '$typedoc', '$cls_name', '$fnz', '$cls_fnz', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8','$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8');";
				$param = "";
				$cls_param = "";
				$cls_desc = "";
			}
			else if(preg_match('/\*/i', $row)) $cls_desc .= trim(str_replace("*","",$row))."\r\n";
		}
		
	}
	return $sql;
}

?> 
<h1><a href="referencePHP.sql?<?php print time();?>">referencePHP.sql</a></h1>
</BODY>
</html>
