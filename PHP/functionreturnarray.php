<?php

function returnarray($var1, $var2)
{
		$var1 *= 2;
		$var2 *= 5;
		$result = array($var1,$var2);
		return $result;		
}

$try1 = returnarray(5,2);
echo "\$returnarray = $try1 <br>";

echo "$try1[0] <br />";
echo "$try1[1] <br />";

list ($val1, $val2) = returnarray(10,10);
echo "$val1 <br />";
echo "$val2 <br />";

?>