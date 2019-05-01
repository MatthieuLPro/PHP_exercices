<?php

	function ft_verify_length($string)
	{
		if (strlen($string) == 0)
			return (false);
		return (true);
	}

	function ft_verify_character($char)
	{
		if ((ord($char) > 64 && ord($char) < 91) || (ord($char) > 96 && ord($char) < 123))
			return (true);
		return (false);
	}

	function ft_skip_first_space($string)
	{
		$pos = 0;
		while($string[$pos] == 32 && $pos < strlen($string))
			$pos++;
		return ($pos);
	}

	function ft_array_size($string)
	{
		$nb_word = 0;
		$pos = ft_skip_first_space($string)
		while($pos < strlen($string))
		{
			if (ft_verify_character($string[$pos]))
			{
				if ($pos != 0)
				{
					if (!ft_verify_character($string[$pos - 1]))
						$nb_word++;
				}
				else
					$nb_word++;
			}
			$pos++;
		}
		return ($nb_word);
	}

	function ft_get_words($string, $nb)
	{
		ft_verify_length($string);
		$pos = ft_skip_first_space($string);


	}

	function ft_split($string)
	{
		if (!ft_verify_length($string))
			return ;
		$array_words = array();
	}

	echo "Entrez une phrase: ";
	$input = rtrim(fgets(STDIN));
	$words = ft_array_size($input);
	echo "$words";

?>