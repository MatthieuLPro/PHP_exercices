<?php

	function ft_sort_array($array)
	{
		$i = 1;
		$temp = "";

		while($i < count($array))
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

	unset($argv[0]);
	$argv = ft_sort_array($argv);
	foreach($argv as $key=>$elem)
	{
		echo $elem."\n";
	}

?>