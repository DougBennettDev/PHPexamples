<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic HTML 5</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="dcterms.rightsHolder" content="Name of Copyright Holder" />
<meta name="dcterms.dateCopyrighted" content="2012" />
<meta name="description" content="A short description of the page" />
<meta name="keywords" content="keywords describing this page, most search engines 
ignore this now due to abuse"/>
</head>
<body>

<?php
//declare(strict_types=1); <-- ask about this later, compiler not liking, saying needs to be first statement declared
function pnamecase(string $nametoclean): string
{
	$result = ucwords(strtolower(trim($nametoclean)));
	return $result;
}

$cleanedstring = pnamecase("This is bad"); //not stored so nothing will happen, variable $cleanedstring needs to be declared
echo "the cleaned string: <br> $cleanedstring";
?>
<?php

$varname = array['hello', 3.14,'world',34,'this is a string'];

echo $varname;

echo $varname[3];

echo $varname[1];

$varname[1] = "felis domesticatis";

echo $varname[1];

echo $varname[5];

?>

<div id="validator">
<a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/username/directories/filename.html">
HTML 5 Validation</a>
</div>
</body>
</html>
