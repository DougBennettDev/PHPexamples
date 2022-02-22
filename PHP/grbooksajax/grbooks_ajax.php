<?php
declare(strict_types=1);
header("Access-Control-Allow-Origin: *"); //Dangerous?
header("Expires: Mon, December 1, 2009");
header("Cache-Control: no-cache");
require '../blurg.inc';


$tainted_command = trim($_GET['command']);

if (!preg_match('/^[a-zA-Z0-9_]{1,30}$/',$tainted_command))
{
    die("Invalid command");
}
else
{
    $command = $tainted_command;
}

$tainted_searchterm = trim($_GET['searchterm']);
if (!preg_match('/^[a-zA-Z0-9 ]{1,30}$/',$tainted_searchterm))
{
    die("Invalid searchterm");
}
else
{
    $searchterm = $tainted_searchterm;
}

$db1 = new mysqli('localhost', 'dbennett89', $password, 'STUdbennett89');

if($db1->connect_errno > 0)
{
    die('Unable to connect to database [' . $db1->connect_error . ']');
}


if ($command == "bytitle")
{
    $query1 = $db1->prepare("select gb.title, gb.pubyear,gb.isbn13,ga.lastname,ga.firstname,gp.pubname
    FROM grbooks gb JOIN grbooks_authors gba USING(book_id) 
    JOIN grauthors ga USING (author_id) 
    JOIN grpublishers gp USING (publisher_id)
    WHERE gb.title like ?");
    //this would normally come from your form and be validated first
    $title = "%" . $searchterm . "%";

    $query1->bind_param('s',$title);

    $query1->execute();

    //bind_result attaches a variable to each field your query returns
    $query1->bind_result($title,$year,$isbn,$lastname, $firstname, $publisher);

    while($query1->fetch()){
        echo $title . '<br />';
            echo $year . '<br />';
            echo $isbn  . '<br />';
            echo $lastname . ',' . $firstname . '<br />';
            echo $publisher . '<br />';
            echo '<hr> <br />';
    }
    
}
elseif ($command == "byauthor")
{
    $query1 = $db1->prepare("select gb.title, gb.pubyear,gb.isbn13,ga.lastname,ga.firstname,gp.pubname
    FROM grbooks gb JOIN grbooks_authors gba USING(book_id) 
    JOIN grauthors ga USING (author_id) 
    JOIN grpublishers gp USING (publisher_id)
    WHERE ga.lastname like ?
    OR ga.firstname like ?");
    //this would normally come from your form and be validated first
    $authfname = "%" . $searchterm . "%";
    $authlname = $authfname;
    $query1->bind_param('ss',$authfname,$authlname);

    $query1->execute();

    //bind_result attaches a variable to each field your query returns
    $query1->bind_result($title,$year,$isbn,$lastname, $firstname, $publisher);

    while($query1->fetch()){
        echo $title . '<br />';
            echo $year . '<br />';
            echo $isbn  . '<br />';
            echo $lastname . ',' . $firstname . '<br />';
            echo $publisher . '<br />';
            echo '<hr> <br />';
    }

}
elseif ($command == "byyear")
{
    $query1 = $db1->prepare("select gb.title,gb.pubyear,gb.isbn13,gp.pubname
    FROM grbooks gb JOIN grpublishers gp USING (publisher_id)
    WHERE gb.pubyear = ?");
    //this would normally come from your form and be validated first
    $year = $searchterm;
    $query1->bind_param('s',$year);

    $query1->execute();

    //bind_result attaches a variable to each field your query returns
    $query1->bind_result($title,$year,$isbn,$publisher);

    while($query1->fetch()){
        echo $title . '<br />';
            echo $year . '<br />';
            echo $isbn  . '<br />';
            echo $publisher . '<br />';
            echo '<hr> <br />';
    }

}
elseif ($command == "byyearjson")
{
    $query1 = $db1->prepare("select gb.title,gb.pubyear,gb.isbn13,gp.pubname
    FROM grbooks gb JOIN grpublishers gp USING (publisher_id)
    WHERE gb.pubyear = ?");
    //this would normally come from your form and be validated first
    $year = $searchterm;
    $query1->bind_param('s',$year);

    $query1->execute();

    //bind_result attaches a variable to each field your query returns
    $query1->bind_result($title,$year,$isbn,$publisher);

    $books = array();
    while($query1->fetch()){
        $books[] = array('title' => $title,'year' => $year,'isbn13' => $isbn,'publisher' => $publisher);
    }
    $booksjson = json_encode($books);
    echo $booksjson;
}
else
{
    die("Not a valid command");
}
$query1->free_result();
$db1->close();

?>