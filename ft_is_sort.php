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
				$i = 0;
			}
			$i++;
		}
		return ($array);
	}

	function ft_is_sort($array)
	{
		$i = 0;

		$temp = ft_sort_array($array);
		while($i < count($array))
		{
			if ($temp[$i] != $array[$i])
				return (0);
			$i++;
		}
		return (1);
	}

	$tab = ["!/@#;", "42", "Hello world", "salut", "zZzZzZzZ"];
	$tab[] = "Et qu'est ce qu'on fait maintenant ?";

	if(ft_is_sort($tab))
		echo "Le tableau est trie\n";
	else
		echo "Le tableau n'est pas trie\n";

?>