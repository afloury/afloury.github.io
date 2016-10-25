function prix()
{
	var h;
	h = window.prompt("Entrez le nombre d'heure de formation");
	h = parseInt(h);
	if (h<10)
		{
		window.alert("Pour ce nombre d'heure(s) le prix sera de : "+(h*30)+" euros.");
		}
	else
		if (h<50 && h>=10)
		{
			window.alert("Pour ce nombre d'heure(s) le prix sera de : "+(h*28)+" euros.");
		}
		else
			if (h<100 && h>=50)
			{
				window.alert("Pour ce nombre d'heure(s) le prix sera de : "+(h*25)+" euros.");
			}
			else
				{
					window.alert("Pour ce nombre d'heure(s) le prix sera de : "+(h*20)+" euros.");
				}
}