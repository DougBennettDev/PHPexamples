<?php
//different directory test.... normally do it one level up, (../blurg.inc)
include 'blurg.inc';	
$db1 = new mysqli('localhost', 'dbennett89', $password, 'STUdbennett89');

if($db1->connect_errno > 0)
{
    die('Unable to connect to database [' . $db1->connect_error . ']');
}

$query1 = $db1->prepare("SELECT b.title, a.lname, a.fname, b.pubyear,p.pubname
FROM books2 as b JOIN books_authors2 ba ON (b.book_id = ba.book_id) 
JOIN  authors2 a ON (ba.author_id = a.author_id)
JOIN  publishers2 p ON (p.publisher_id = b.publisher_id)
WHERE a.lname LIKE ?");
//this would normally come from your form and be validated first
$lname = "Lee";

$query1->bind_param('s',$lname);

$query1->execute();

//bind_result attaches a variable to each field your query returns
$query1->bind_result($title,$lname,$fname,$year,$publisher);

while($query1->fetch()){
    echo $title . '<br />';
	echo $lname . '<br />';
	echo $year  . '<br />';
	echo $publisher . '<br />';
}
$query1->free_result();
$db1->close();

?>