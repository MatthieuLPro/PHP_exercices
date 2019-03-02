<?php

	function ft_find_two_last_values($array)
	{
		$i = count($array) - 1;
		$temp = 0;

		if ($i == -1)
			return;
		while($i > 0)
		{
			if ($array[$i] != "")
			{	
				if ($temp == 0)
					$array[-1] = $array[$i];
				else if ($temp == 1)
				{
					$array[-2] = $array[$i];
					unset($array[$i]);
					break;
				}
				unset($array[$i]);
				$temp++;
			}
			$i--;
		}
		return ($array);		
	}

	function ft_nb_word($my_array)
	{
		$i = 0;
		$count = 0;

		while($i < count($my_array))
		{
			if($my_array[$i])
				$count++;
			$i++;
		}
		return($count);
	}

	$my_array = explode(" ", $argv[1]);
	if (!$argv[1] || ft_nb_word($my_array) == 0)
		exit;
	$my_array = ft_find_two_last_values($my_array);
	echo $my_array[-1]." ";
	foreach ($my_array as $key => $value) 
	{
		if ($value && $key != -1)
		{
			if ($key != -2)
				echo $value." ";
			else
				echo $value;
		}
	}

?>