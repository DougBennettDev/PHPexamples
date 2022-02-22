<?php declare(strict_types=1);

function leapyear(int $year): bool
{
	if ( $year%4 != 0)
	{
		return False;
	}
	else
	{
		return True;
	}
}
$year = 2020;
$lyear = leapyear($year);

echo "$year";
echo $lyear?" is ":" is not ";
echo "a leap year"
?>