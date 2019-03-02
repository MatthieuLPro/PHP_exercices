<?php
	while(1)
	{
		echo "Entrez un nombre : ";
		$line = fgets(fopen ("php://stdin","r"));
		$temp = 0;
		if (!isset($line[0]))
		{
			echo "\n";
			exit;
		}
		$line = rtrim($line,"\n");
		for ($i = 0; isset($line[$i + 1]) ; $i++)
		{
			if ($line[$i] < '0' || $line[$i] > '9')
			{
				echo "'$line' n'est pas un chiffre\n";
				$temp = 1;
				break;
			}
		}
		if (!isset($line[0]) && !$temp)
			echo "'' n'est pas un chiffre\n";
		elseif (!((int)$line % 2) && !$temp)
			echo "Le chiffre $line est Pair\n";
		elseif (((int)$line % 2) && !$temp)
			echo "Le chiffre $line est Impair\n";
	}
?>