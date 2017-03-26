<?php
function point($string){
	$stringPoint="";
	for($i=0;$i<strlen($string);$i++){
		if (strcmp($string[$i], ".")==0) {
			$stringPoint.=$string[$i];
			return rtrim(ltrim($stringPoint));
		}else$stringPoint.=$string[$i];
}
return rtrim(ltrim($stringPoint));
}
?>
