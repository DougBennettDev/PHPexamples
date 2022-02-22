<?php
declare(strict_types=1);
include_once 'top.inc.htmlf';

//This block calls the html form objects
//if on inc form that form method="post"
if ( $_POST[submitted] )
{
	echo "Process a POST form";
}
//if on inc form that form method="get"
else if ( $_GET[submitted])
{
	//calls option="search" from main.inc.htmlf
	if($_GET[command] == "search")
	{
		include 'searchform.inc.htmlf';
		//if($_GET[searchtype] == "author")
		//{
		//	echo "Results by author";
		//}
	}
	//calls option="newuser" from main.inc.htmlf
	elseif($_GET[command] == "newuser")
	{
		echo "show new user creation form";
		//include 'newuser.inc.htmlf';
	}
	//calls option="login" from main.inc.htmlf
	elseif($_GET[command] == "loginform")
	{
		echo "Show login form";
	}
	//
	elseif($_GET[command] == "addbooks")
	{
		echo "show add books form";
	}
	elseif ($_GET[command] == "runsearch")
	{
		include 'booksearch.inc.php';
		booksearch();
	}
	else
	{
		echo "do something else";
	}
}
else
{
	include 'main.inc.htmlf';
}

include_once 'bottom.inc.htmlf';
?>