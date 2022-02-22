<?php

include '../blurg.inc';	
$db1 = new PDO("mysql:host=localhost;dbname=STUdbennett89", 'dbennett89', $password);
$db1->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//error checking on connection

$lname = "Lee";


$query1 = $db1->prepare("SELECT b.title, a.lname, a.fname, b.pubyear,p.pubname
FROM books2 as b JOIN books_authors2 ba ON (b.book_id = ba.book_id) 
JOIN  authors2 a ON (ba.author_id = a.author_id)
JOIN  publishers2 p ON (p.publisher_id = b.publisher_id)
WHERE a.lname LIKE :lastname");

//Note, this is the better way to bind parameters
//you do one per statement, and PARAM_STR takes a length
//Which SHOULD be the max length of the varchar field
$query1->bindParam(':lastname',$lname,PDO::PARAM_STR,30);

$query1->execute();


while($row = $query1->fetch(PDO::FETCH_ASSOC))
{
    echo $row['title'] . '<br />';
    echo $row['lname'] . '<br />';
    echo $row['pubyear']  . '<br />';
    echo $row['pubname'] . '<br />';
}
//Note how you close the connection, you HAVE to close the $query1 or $stmt
//AND THEN the database connection after that by setting each = null
$query1 = null;
$db1 = null;

?>