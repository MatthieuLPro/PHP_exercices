<?php

	function ft_sort_array($array)
	{
		$i = 1;
		$temp = "";

		while($i < count($array) - 1)
		{
			if ($array[$i] > $array[$i + 1])
			{
				$temp = $array[$i];
				$array[$i] = $array[$i + 1];
				$array[$i + 1] = $temp;
				$i = 0;
			}
			$i++;
		}
		return ($array);
	}

	if (!$argc < 2)
		exit;
	$my_array = explode(" ", $argv[1]);
	$argv = ft_sort_array($my_array);	
	foreach ($argv as $value) 
	{
		if ($value)
		{
			echo $value;
			echo "\n";
		}
	}
?>