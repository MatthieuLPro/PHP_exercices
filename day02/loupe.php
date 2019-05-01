<?php

	function ft_verify_character($char)
	{
		if ($char == "<")
			return (1);
		if ($char == ">")
			return (0);
		return (0);
	}

	function ft_verify_quotes($string, $pos)
	{
		while($string[$pos] != ">")
		{
			if ($string[$pos] == "\"")
				return (1);
			$pos++;
		}
		return (0);
	}

	function ft_get_first_quote($string, $pos)
	{
		while($string[$pos] != "\"")
			$pos++;
		return ($pos + 1);
	}

	function ft_skip_balise($string, $pos)
	{
		while ($string[$pos] != ">")
			$pos++;
		return ($pos);
	}

	$homepage = file_get_contents($argv[1]);

	$pos = 0;
	$flag = 0;
	$string = "";
	while ($pos < strlen($homepage))
	{
		$flag = ft_verify_character($homepage[$pos]);
		if ($flag == 1)
		{
			if (ft_verify_quotes($homepage, $pos))
			{
				$pos = ft_get_first_quote($homepage, $pos);
				while($homepage[$pos] != "\"")
				{
					$homepage[$pos] = strtoupper($homepage[$pos]);
					$pos++;
				}
			}
			else
				$pos = ft_skip_balise($homepage, $pos) + 1;
			$flag = 0;
		}
		else
		{	
			$homepage[$pos] = strtoupper($homepage[$pos]);
			$pos++;
		}
	}
	echo "$homepage";
?>