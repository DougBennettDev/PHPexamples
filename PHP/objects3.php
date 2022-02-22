<html>
<head>
<title>PHP 5 Objects, part 3</title>
</head>
<body>

<?php
class Animal
{ 
	public function __construct($blood, $name =NULL, $password)
	{
		$this->blood = $blood;
		if ($name)
		{
		    $this->name = $name;
		    $this->password = $password;
		}
	}
}

//Mammal is a child of Animal, which is the parent
class Mammal extends Animal
{
	
	function __construct($furcolor, $legs, $name, $password)
	{
		parent::__construct("warm", $name, $password);
		$this->furcolor = $furcolor;
		$this->legs = $legs;
	}
}

//Class Ferret will now be a child of Mammal, technically a grandchild
//of Animal

class Ferret extends Mammal
{
	function __construct($furcolor, $name, $password)
	{
		parent::__construct($furcolor, 4, $name, $password);
		self::bark();
	}
	function bark()
	{
	    print"$this->name says 'dook!'";	
	}
}

$d = new Ferret("Black and Tan and White", "Kaos","Itsasecret");
print "<br /> $d->name has $d->legs legs";
print "<br /> $d->name has $d->blood blood";
print "<br /> $d->name has the password $d->password <br />";
print_r( $d );
?>
</body>
</html>
