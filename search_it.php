<?php

	function check_size_key($string)
	{
		$size = 0;

		while(isset($string[$size]) && ($string[$size] != ':'))
			$size++;
		if ($size == 0)
			return (0);
		return (1);
	}

	function string_size($string)
	{
		$size = 0;

		while(isset($string[$size]))
			$size++;
		return ($size);
	}

	function check_size_value($string)
	{
		$size = 0;

		while(isset(($string[$size])) && $string[$size] != ':')
			$size++;
		if ($size == string_size($string))
			return (0);
		return (1);
	}
	function ft_get_key($string)
	{
		$size = 0;
		$size_max = 0;
		$new_str_size = 0;

		$temp = "";
		while (isset($string[$size_max]))
			$size_max++;
		while (isset($string[$size]) && $string[$size] != ':')
			$size++;
		if ($size_max != $size++)
		{
			while(isset($string[$size]))
			{
				$temp[$new_str_size] = $string[$size];
				$size++;
				$new_str_size++;
			}
			echo $temp;
			echo "\n";
		}
		return;
	}

	if ($argc < 2)
		exit;

	foreach ($argv as $value) 
	{
		if ($argv[0] != $value)
		{
			if ((check_size_key($value) == 1) && (check_size_value($value) == 1))
				ft_get_key($value);
		}
	}
?>