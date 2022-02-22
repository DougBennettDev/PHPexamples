<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic Form response</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="dcterms.rightsHolder" content="Name of Copyright Holder" />
<meta name="dcterms.dateCopyrighted" content="2012" />
<meta name="description" content="A short description of the page" />
<meta name="keywords" content="keywords describing this page, most search engines 
ignore this now due to abuse"/>
</head>
<body>
<p>Doug Bennett</p>
<h1>Form</h2></br>
<!-- PHP method for name, age, and radio buttons-->
<?php
echo "<p>Data Processed at </p>";
date_default_timezone_set('UTC');
echo date('h:i:s:u a, l F jS Y e');
echo "</p>";

$usersName = $_POST['username'];
$streetAddress = $_POST['streetaddress'];
$cityAddress = $_POST['cityaddress'];

echo '<p>Your Information</p>';

//combine variables with text using a period-'.'

echo $usersName. ' lives at </br>';
echo $streetAddress. ' in </br>';
echo $cityAddress. '</br></br>';

/* You can define text using heredoc syntax in the 
same way you use double quotes.
Starts with <<< and an identifier that can't be
used any place else in the text.
It ends with the identifier and a semicolon
without any white space or anything else.
*/
$str = <<<EOD
The customers name is 
$usersName and they 
live at $streetAddress
in $cityAddress</br></br>
EOD;
echo $str;

echo "</br></br>";

define('PI', 3.1415926);

echo "The value of PI is ". PI;

echo"</br>5+2= " . (5 +2);

echo"</br>5/2= " . (integer)(5/2);

echo "</br></br>";

$numOfOranges = 4;
$numOfBananas = 36;

if(($numOfOranges <5) && ($numOfBananas > 30))
	{
	echo '25% Discount';
	}
elseif (($numOfOranges > 30) || ($numOfBananas > 35))
	{
	echo '15% Discount';
	}
elseif (!(($numOfOranges < 5)) || (!(numOfBananas < 5)))
	{
	echo '5% Discout';
	}
else
	{
	echo 'No Discount for you';
	}
	
echo"</br></br>";

switch($usersName){
	case "Doug Bennett":
		echo "Hello Doug!";
		break;
	case "Sally" :
		echo "Hello Sally";
		break;
	default :
		echo "Hello valued customer!";
		break;
}
	
echo "</br></br>";

$num = 0;
while ($num < 20) {
	echo $num++ . ', ';
}

echo "</br></br>";

for($num = 1; $num <= 20; $num++){
	echo $num;
	
	if($num != 20){
		echo ', ';
	}
	else{
		break;
	}
}

echo "</br></br>";

$bestFriends = array('Nate', 'Stephan', 'Patrick');

echo 'My bass player is'. $bestFriends[0];

$bestFriends[4] = 'Ryan';

foreach($bestFriends as $friend){
	echo $friend . ', ';
}
	
$customer = array('Name'=>$usersName, 'Street'=>$streetAddress, 'City'=>$cityAddress);
foreach($customer as $key => $value){
	echo $key . ' : ' . $value;
}


echo"</br></br>";




?>

<div id="validator">
<a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/username/directories/filename.html">
HTML 5 Validation</a>
</div>
</body>
</html>