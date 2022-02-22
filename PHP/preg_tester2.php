<?php

print <<<STARTHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"xml:lang="en">
<head>
<title>PREG Tester</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
STARTHTML;
 
if ( $_POST['submitcheck'] )
{
	print "The user typed: ".  $_POST['fullname'] . "<br />";
	$tainted = $_POST['fullname'];
	$tainted = trim($tainted);
	//$filter = '/(\w+[\'.-]?\s?){2,4}/';
	//$filter='/(\w+[\'. ]{0,2}){1,25}/';
	//$filter='/\d{1,6}(\.\d{2})?/';
	//$filter='/(\w+ ?){1,600}/';
	//$filter='/([A-Za-z-.\'] ?){2,100}/';
	//$filter='/(\w+[-.\']? {0,3}){1,5}/';
	//$filter='/[a-zA-Z]{2,30}/';
	//$filter='/\w{2,30}/';
	//$filter='/^([a-z0-9]+[-_+.]?){0,4}[a-z0-9]+@([a-z]+\.){1,4}[a-z]{2,6}$/';
	$filter='/((&|#)?([\w+\-\[\]]+=?([\w+\-]*[:$@+\'"]{0,3}(\.|%20)?){0,6}[\w+\-]*[:$@+\'"]{0,3})){0,20}/';
	//$filter='/([fhtpsFHTPS]{3,5}:\/\/)?[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*\.[a-zA-Z]{2,6}(?:\:\d{2,5})?\/?#?\??([\w+\-]+(\.|%20)?[\w+\-]*)*\/?#?\??(([\w+\-]+(\.|%20)?[\w+\-]+)*\.[a-zA-Z]{0,5})?((&|#)?([\w+\-\[\]]+=?([\w+\-]*[:$@+\'"]{0,3}(\.|%20)?){0,6}[\w+\-]*[:$@+\'"]{0,3})){0,20}/';
	//$filter='/([a-zA-z0-9_#\[\]\-]+\/?(\.|%20)?){0,30}/';

	//$filter='/([fhtpsFHTPS]{3,5}:\/\/)?[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*\.[a-zA-Z]{2,6}(?:\:\d{2,5})?\/?#?\??(([a-zA-z0-9_#\[\]\-]+(\.|%20)?[a-zA-z0-9_#\[\]\-]*)\/?\??\#?){0,30}/';
	$filter='/([fhtpsFHTPS]{3,5}:\/\/)?[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*\.[a-zA-Z]{2,6}(?:\:\d{2,5})?\/?#?\??(([a-zA-z0-9_#\[\]\-]+(\.|%20)?[a-zA-z0-9_#\[\]\-]*)\/?\??\#?){0,30}((&|#)?([\w+\-\[\]]+=?([\w+\-]*[:$@+\'"]{0,3}(\.|%20)?){0,6}[\w+\-]*[:$@+\'"]{0,3})){0,20}/';
	$filter='/^([fhtpsFHTPS]{3,5}:\/\/)?[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*\.[a-zA-Z]{2,6}(?:\:\d{2,5})?\/?#?\??(([&a-zA-z0-9_#=\[\]\-]+(\.|%20)?[a-zA-z0-9_#=\[\]\-]*)\/?\??\#?){0,30}$/';
	//$filter = '/([a-zA-Z]+[.-\']? ?[a-zA-Z]*){1,4}/';
	preg_match($filter, $tainted, $match);
	print "The preg matched:  " . $match[0] . "<br />";	
	print_r( $match );
} 
else 
{

	print '<form method="post" action="'. $_SERVER['SCRIPT_NAME'] .'">';
	print "\n";
	print 'Please Enter your full name: <input type="text" name="fullname" size="300" maxlength="300" />';
	print "<br />\n";
	print '<input type="submit" name="submitcheck" value="Test Regular Expressions" />';
	print '</form>';

}





?>
