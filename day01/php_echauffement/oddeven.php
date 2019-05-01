<?php
	
	function ft_verify_length($string)
	{
		if (strlen($string) == 0)
			return (false);
		return (true);
	}

	function ft_verify_ascii($string)
	{
		for ($pos = 0; $pos < strlen($string); $pos++)
		{
			$byte = substr($string, $pos);
			$value = ord($byte);
			if (($value < 48 || $value > 57))
			{
				echo "'$string' n'est pas un nombre";
				return (false);
			}
		}
		return (true);
	}

	function ft_verify_end($string)
	{
		for ($pos = 0; $pos < strlen($string); $pos++)
		{
			$byte = substr($string, $pos);
			$value = ord($byte);
			echo "value: $value\n";
			if ($value == 4)
				return (false);
		}
		return(true);
	}

	$flag = 1;
	while ($flag) {
		echo "Entrez un nombre: ";
		$input = rtrim(fgets(STDIN));
		if (!ft_verify_end($input))
			$flag = 0;
		elseif (!ft_verify_length($input))
			echo "'$input' n'est pas un nombre";
		elseif (ft_verify_ascii($input))
		{
			if ((int)$input % 2 == 0)
				echo "Le chiffre $input est Pair";
			else
				echo "Le chiffre $input est Impair";
		}
		echo "flag: $flag\n";
	}


?>