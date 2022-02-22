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
<p>Doug Bennett, doukl54491, 9/22/17, CIS166AE</p>
<h1>First Form Page</h2></br>
<!-- PHP method for name, age, and radio buttons-->
<?php

if ( $_POST['submitted'] )
{
	echo "Welcome to the page, $_POST[fname]";	
}
else
{
		echo<<<_FORM_

<form method="post" action="firstform.php">

What is your First Name? <input type="text" name="fname"/><br/>
What is your age? <input type="text" name="age"/><br/>
<p>What is your Gender?</p>
<input type="radio" name="q1" value="a">
Male
<br>
<input type="radio" name="q2" value="b">
Female
<br>
<input type="radio" name="q3" value="c">
Other
<br>
<input type ="submit" name ="submitted"/><br/>

</form>
_FORM_;
}
echo "<br>";


switch(ucwords(strtolower(trim($_POST[fname])))){
	case "Doug":
		echo "We have the same first name!";
		break;
	case "":
		echo "Please enter your name, age, and select one option for gender";
		break;
	default :
		echo "Hello $_POST[fname]!";
		break;
}

echo "<br><br>";

if ( $_POST[q1])
{
	echo "You might be interested in the website www.geeks.com";
}
elseif ( $_POST[q2])
{
	echo "You might be interested in the website www.geekgirl.com";
}
elseif ( $_POST[q3])
{
	echo "You might be interested in the website www.geeks.com and/or www.geekgirl.com";
}
else
{
	echo "";
}

echo "<br><br>";

$num;
while ($num <= $_POST[age]) {
	echo $num++ . '<br>';	
}
echo "<br><br>";

?>

<div id="validator">
<a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/username/directories/filename.html">
HTML 5 Validation</a>
</div>
</body>
</html>