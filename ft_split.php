<?php

	function ft_sort_array($array)
	{
		$i = 0;
		$temp = "";

		while($i < count($array) - 1)
		{
			if ($array[$i] > $array[$i + 1])
			{
				$temp = $array[$i];
				$array[$i] = $array[$i + 1];
				$array[$i + 1] = $temp;
				$i = -1;
			}
			$i++;
		}
		return ($array);
	}

	function ft_clean_backspace($array)
	{
		$i = 0;
		$total = count($array);

		while ($i < $total)
		{
			if (!$array[$i])
				unset($array[$i]);
			$i++;
		}
		return ($array);
	}

	function ft_init_index($size_init, $array)
	{
		$i = $size_init - count($array);
		$j = 0;

		while($i < $size_init)
		{
			$array[$j] = $array[$i];
			unset($array[$i]);
			$j++;
			$i++;
		}
		return ($array);
	}

	function ft_split($string)
	{
		$total = 0;
		$i = 0;

		$my_array = explode(" ", $string);
		$my_array = ft_sort_array($my_array);
		$total = count($my_array);
		$my_array = ft_clean_backspace($my_array);
		$my_array = ft_init_index($total, $my_array);
		return ($my_array);
	}

	print_r (ft_split("       Hello      zzz hh eeeoi rrrzarz za z e        world AAAA       "));

?>