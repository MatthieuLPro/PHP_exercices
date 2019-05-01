<?php

	function ft_convert_char_ascii($string, $pos)
	{
		$value = substr($string, $pos);
		$byte = ord($value);
		return ($byte);
	}

	function ft_skip_space($string, $pos)
	{
		while((ft_convert_char_ascii($string, $pos) == 9 || ft_convert_char_ascii($string, $pos) == 32) && $pos < strlen($string))
			$pos++;
		return ($pos);
	}

	function ft_nb_words($string)
	{
		$sentence = "";
		$pos = 0;
		$temp = 0;

		while($pos < strlen($string))
		{
			$temp = ft_skip_space($string, $pos);
			$pos = $temp;
			while ((ft_convert_char_ascii($string, $pos) != 9 && ft_convert_char_ascii($string, $pos) != 32) && $pos < strlen($string))
			{
				$sentence = $sentence . $string[$pos];
				$pos++;
			}
			if ($pos < strlen($string))
			{
				$sentence = $sentence . " ";
			}
		}
		echo "$sentence\n";
	}

	ft_nb_words($argv[1]);

?>