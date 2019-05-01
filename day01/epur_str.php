<?php

	function ft_array_to_string($array)
	{
		$i = 0;
		$my_string = "";

		while(!$array)
			$i++;
		while($i < count($array))
		{
			if($array[$i])
				if ($my_string)
					$my_string = $my_string.' '.$array[$i];
				else
					$my_string = $array[$i];
			$i++;
		}
		return ($my_string);
	}

	$my_array = explode(" ", $argv[1]);
	echo ft_array_to_string($my_array)."\n";

?>