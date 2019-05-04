<?php

	function ft_only_user($array)
	{
		$i = 0;
		while($i < sizeof($array))
		{
			if (substr($array[$i], 0, 6) == "reboot")
				array_splice($array, $i, 1);
			$i++;
		}
		array_pop($array);
		array_pop($array);
		return $array;
	}

	$i = 0;
	exec('last', $return_value);
	$return_value = ft_only_user($return_value);

	while($i < sizeof($return_value))
	{
		print("$return_value[$i]\n");
		$i++;
	}

?>