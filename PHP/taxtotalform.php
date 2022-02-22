<!DOCTYPE html>
<html lang="en">
<head>
<title>Total with and without Tax calculator</title>
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
	echo "your subtotal is $_POST[ctotal]</br>";
	echo "your quest is $_POST[ctax]</br>";
}
else
{
		echo<<<_FORM_

<form method="post" action="taxtotalform.php">

What is the total price of the items? <input type="text" name="ctotal"/><br/>
What is the tax rate? <input type="text" name="ctax"/><br/>
<p>Is this taxable?</p>
<input type="radio" name="q1" value="a">
Yes
<br>
<input type="radio" name="q1" value="b">
No
<br>
<input type="submit" name="submitted" value="Calculate"/><br/>
<input type ="submit" name="submitted"/><br/>

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