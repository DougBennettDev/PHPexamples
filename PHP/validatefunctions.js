window.onload = function()
{
	document.forms[0].onsubmit = checkfields;
	
	createMenu(1, 10, 'On a scale from 1 to 10, how stressed are you?', 'stressmenu');
	document.getElementById('stressmenu').onchange = stresscheck;
	document.getElementById('name').onkeyup = fnamecheck;
	document.getElementById('quantity').onkeyup = quantitycheck;
	document.getElementById('shhpass').onkeyup = passcheck;
	document.getElementById('bands').onclick = bandcheck;
	document.getElementById('bands').onmouseover = bandcheck;
	document.getElementById('schneider').onclick = schneidercheck;
	document.getElementById('schneider').onmouseover = schneidercheck;
	document.getElementById('sandcheck').onclick = sandlercheck;
	document.getElementById('favthings').onkeyup = jackjilltextcheck;
	//note if we can use event targets we can use ONE function
	//but not today

}

function checkfields()
{
	stresscheck();
	fnamecheck();
	quantitycheck();
	passcheck();
	bandcheck();
	schneidercheck();
	sandlercheck();
	jackjilltextcheck();
	return false;
}


function createMenu(start, end, mnuMsg, targetID)
{
	var strMsg = '<option value="">' + mnuMsg + '</option>';
	var counter = start;
	while ( counter <= end)
	{
		strMsg += '<option value="' + counter + '">' + counter + '</option>';
		counter++;
	}
	document.getElementById(targetID).innerHTML = strMsg;
}

function stresscheck()
{
	var stressmenu = document.getElementById('stressmenu');
	var stressSelect = stressmenu.options[stressmenu.selectedIndex].value;
	if (stressSelect <= 10 && stressSelect >= 1)
	{
		strMsg = "Remember to breathe";
	}
	else
	{
		strMsg = "Please choose a number";
	}
	document.getElementById('ddl-error').innerHTML = strMsg;
}

function fnamecheck()
{
	var fnamevar = document.getElementById('name').value;
	if ( fnamevar.length < 2 || fnamevar.length > 25)
	{
		strMsg = "Name must be between 2 to 25 characters long";
	}
	else
	{
		strMsg= "OK";
	}
	document.getElementById('name-error').innerHTML = strMsg;
}

function quantitycheck()
{
	var x, strMsg;
	var x = document.getElementById('quantity').value;
	
	if(isNaN(x) || x < 1)
	{
		strMsg = "enter numbers only dude";
	}
	else{
		strMsg = "Cool!";
	}
	document.getElementById('quantity-error').innerHTML = strMsg;
}

function passcheck()
{
	var passvar = document.getElementById('shhpass').value;
	if ( passvar.length < 8 || passvar.length > 20)
	{
		strMsg = "Bro, your password needs to be between 8 and 20 Billion characters long (actually just 8 and 20 characters)";
	}
	else
	{
		strMsg = "Nice Password";
	}
	document.getElementById('pass-error').innerHTML = strMsg;
}

function bandcheck()
{
	var bandItems = document.forms[0].bandchoice;
	var strMsg = "it's not the end of the world if you don't pick a band, but the site won't work if you don't";
	for (var i=0; i < bandItems.length; i++)
	{
		if(bandItems[i].checked == true)
		{
			strMsg = "Yeah, they're ok";
			break;
		}
	}
	document.getElementById('band-choose-error').innerHTML = strMsg;
}

function schneidercheck()
{
	var schneiderItems = document.forms[0].moviechoice;
	var strMsg = "Please pick a movie.....or don't it's your choice";
	for (var i=0; i < schneiderItems.length; i++)
	{
		if(schneiderItems[i].checked == true)
		{
			strMsg = "Rated PG-13";
			break;
		}
	}
	document.getElementById('schneider-choose-error').innerHTML = strMsg;
}

function sandlercheck()
{
	if (document.getElementById('sandcheck').checked == false)
	{
		strMsg = "yeah, he's not everyone's cup of tea";
	}
	else
	{
		strMsg = "";
	}
	document.getElementById('sanderror').innerHTML = strMsg;	
}

function jackjilltextcheck()
{
	var charsRemaining = 500 - document.getElementById('favthings').value.length;
	if( document.getElementById('favthings').value.length > 500)
	{
		document.getElementById('favthings').value = document.getElementById('favthings').value.substring( 0,500);
	}
	else if ( document.getElementById('favthings').value.length < 500)
	{
		strMsg = charsRemaining + " characters remaining";
	}
	else
	{
		strMsg = "";
	}
	document.getElementById('remaining').innerHTML = strMsg;
}