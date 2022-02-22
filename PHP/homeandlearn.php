<html>
<head>
<title> Variables - Some Practice </title>
<?php
	if (isset($_POST['submit1']))
	{	
		$username = $_POST['username'];
		if ($username == "Doug"){
		print("Welcome back, homes!" . '<br>');
		}
		else {
			print("You are not welcome here." . '<br>');
		}
	}
	else{
		$username="";
	}
	if (isset($_POST['submit1'])){
		$selected_radio = $_POST['gender'];
		print $selected_radio . '<br>';
	}
	
?>
</head>
<body>
<?php
	$firstnumber = 10;
	$secondnumber = 20;
	$sum = $firstnumber + $secondnumber;
	print($sum . '<br>');
	print($sum + 35 . '<br>');
	print('the total values plus 23 = ' . $sum + 35 + 23 . '<br>')
?>
<form name="form1" method="POST" action="homeandlearn.php">
	<input type="Text" value="<?php print $username;?>" name="username">
	<br>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<br>
	<input type="submit" name="submit1" value="Select name and Gender">
</form>
<?php
	$counter = 0;
	$start = 1;
	
	for($start; $start <11; $start++){
		$counter = $counter + 1;
		print $counter . '<br>';
	}
?>
<form name="form2" method="POST" action="homeandlearn.php">
Start Number: <input type="text" value="<?php print $startnum;?>" name="startnum">
End Number:	<input type="text" value="<?php print $endnum;?>" name="endnum">
Multiply by: <input type="text" value="<?php print $multby;?>" name="multby">
</br>
	<input type="submit" name="submit2" value="Multiply these bitches">
</form>

<?php

	$multby = 2;
	
	if (isset($_POST['submit2'])) {
		
		$startnum = $_POST['startnum'];
		$endnum = $_POST['endnum'];
		$multby = $_POST['multby'];
		
		for($startnum; $startnum <= $endnum; $startnum++){
			$answer = $startnum * $multby;
			print $startnum . " multiplied by " . $multby . "=" . $answer . "<br>";
		}
	}
	
?>
<form name="form3" method="POST" action="homeandlearn.php">
Start Number: <input type="text" value="<?php print $startnumtwo;?>" name="startnumtwo">
End Number:	<input type="text" value="<?php print $endnumtwo;?>" name="endnumtwo">
Multiply by: <input type="text" value="<?php print $multbytwo;?>" name="multbytwo">
</br>
	<input type="submit" name="submit3" value="Multiply these bitches">
</form>
<?php

	$multbytwo = 0;
	
	if (isset($_POST['submit3'])) {
		
		$startnumtwo = $_POST['startnumtwo'];
		$endnumtwo = $_POST['endnumtwo'];
		$multbytwo = $_POST['multbytwo'];
		
		while($startnumtwo <= $endnumtwo){
			$answertwo = $startnumtwo * $multbytwo;
			print ($startnumtwo . " multiplied by " . $multbytwo . "=" . $answertwo . "<br>");
			$startnumtwo++;
		}
	}
	
?>
<?php
	$Teacherinterrupts = true;
	$count = 1;
	
	while ($count <11) {
		print(" count = " + $count + "<br>");
		if ($Teacherinterrupts == true){
			print("The teacher interrupted");
			break;
		}
			$counter++;
	}
?>
<?php

	$seasons = array("autumn", "winter", "spring", "summer");
	print $seasons[1];
?>
<?php
	
	$seasons = array("wet", "dry", "bright", "dark");
	for ($key_Number = 0; $key_Number < 4; $key_Number++); {
		print $seasons[$key_Number];
	}
?>
</body>
</html>