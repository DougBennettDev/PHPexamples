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

<form method="get" actions="#"

<select name="choice">
<option value="">Choose a Day </option>

<?php
$number = 1;
$endvalue = 31;
while ($number <= $endvalue )
{
	echo "<option value=\" $number \">$number</option>";
	//$number = $number + 1;
	//$number += 1;
	$number++;
}
?>
<div id="validator">
<a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/username/directories/filename.html">
HTML 5 Validation</a>
</div>
</body>
</html>