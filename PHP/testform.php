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
if ( $_POST['submitted'] )
{
	//This has no security, never do this in real life
	echo "your name is $_POST[cname]</br>";
	echo "your quest is $_POST[cquest]</br>";
	echo "your favorite color is $_POST[supersecret]</br>";
}
else
{
		echo<<<_FORM_

<form method="post" action="testform.php">

What is your Name? <input type="text" name="cname"/><br/>
What is your Quest? <input type="text" name="cquest"/><br/>
What is your Favorite Color? <input type ="password" name="supersecret"/><br/>
<p>What is your Gender?</p>
<input type="radio" name="q1" value="a">
Male
<br>
<input type="radio" name="q1" value="b">
Female
<br>
<input type="radio" name="q1" value="c">
Other
<br>
<input type="submit" name="submitted" value="Place order"/><br/>
<input type ="submit" name ="submitted"/><br/>

</form>
_FORM_;
}
?>
<div id="validator">
<a href="http://validator.w3.org/nu/?doc=https://nbtl.mesacc.edu/username/directories/filename.html">
HTML 5 Validation</a>
</div>
</body>
</html>