<?php

	function ft_verify_day($day)
	{
		$pos = 0;
		$day = strtolower($day);
		$array_day = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];

		while($pos < sizeof($array_day))
		{
			if ($day == $array_day[$pos])
				return (true);
			$pos++;
		}
		return (false);
	}

	function ft_verify_nb($nb)
	{
		if ((int)$nb < 32 && (int)$nb > 0)
			return (true);
		return (false);
	}

	function ft_verify_month($month)
	{
		$pos = 0;
		$month = strtolower($month);
		$array_month = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];

		while ($pos < sizeof($array_month))
		{
			if ($month == $array_month[$pos])
				return (true);
			$pos++;
		}
		return (false);
	}

	function ft_verify_year($year)
	{
		if ((int)$year < 1970)
			return (false);
		return (true);
	}


	function ft_verify_time($time)
	{
		$time_array = explode(":", $time);
		if ($time_array[0] < 0 || $time_array[0] > 24)
			return (false);
		if ($time_array[1] < 0 || $time_array[1] > 59)
			return (false);
		if ($time_array[2] < 0 || $time_array[2] > 59)
			return (false);
		return (true);
	}

	function ft_verify_format($array)
	{
		$pos = 0;

		if (sizeof($array) != 5)
			return (false);
		if (!ft_verify_day($array[0]))
			return (false);
		if (!ft_verify_nb($array[1]))
			return (false);
		if (!ft_verify_month($array[2]))
			return (false);
		if (!ft_verify_year($array[3]))
			return (false);
		if (!ft_verify_time($array[4]))
			return (false);
		return (true);
	}

	function ft_convert_month($month)
	{
		$pos = 1;
		$array_month = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
		while ($pos < sizeof($array_month))
		{
			if ($month == $array_month[$pos])
				break;
			$pos++;
		}
		return ($pos);
	}

	function ft_set_times($array)
	{
		$time_array = explode(":", $array[4]);
		$nb_year = (int)$array[3] - 1970;
		$nb_day = (int)$array[1];
		$nb_month = ft_convert_month($array[2]) - 1;
		$nb_hour = (int)$time_array[0];
		$nb_minute = (int)$time_array[1];
		$nb_seconde = (int)$time_array[2];
		$result = $nb_year * 31540000 + $nb_month * 2628000 + $nb_day * 86400 + $nb_hour * 3600 + $nb_minute * 60 + $nb_seconde;
		return ($result);
	}


	$result = 0;
	$date_array = explode(" ", $argv[1]);
	if (ft_verify_format($date_array))
	{
		$result = ft_set_times($date_array);
		echo "$result\n";
	}	
	else
		echo "Wrong Format\n";

?>