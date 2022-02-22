<?php
declare(strict_types=1);

$varname = array('hello', 3.14,'world',34,'this is a string');

echo $varname;

echo $varname[3];

echo $varname[1];

$varname[1] = "felis domesticus";

echo $varname[1];

echo $varname[5];

//HARD CODING THE LENGTH OFTHE ARRAY IS BAD
for($count = 0; $count < 5; $count++)  //5 is the hard code
{
	echo "\$varname[$count] = $varname[$count] </br>";
}

//better way
for($count = 0; $count < count($varname); $count++)
{
	echo "\$varname[$count] = $varname[$count] </br>";
}

//associative array, dot operators are ->
$houseinfo = array('intRate'=>4.2,'term'=>30,'cost'=>150000,'down'=>25000,);

//changing an array is $variable['element'] = new value;

echo "The interest rate is: $houseinfo[intRate]</br>";
echo "the term is: $houseinfo[term]</br>";

//to loop through all values in an associative array
foreach ($houseinfo as $keyname => $bestvalue) //naming conventions don't matter
{
	echo"\$houseinfo[$keyname] = $bestvalue</br>";
}

foreach ($houseinfo as $bob => $jill) //naming conventions don't matter
{
	echo"\$houseinfo[$bob] = $jill</br>";
}



?>