<?php

// This class is for creating the html from the data sent to the menu by the user

class gk_menu_util

	{

	// Add open tow/data, close row/data, and blank row element variables to help make the menu more dynamic

	private static $descript_tr_open = "<tr class=\"black\" >";
	private static $td_open_span_2 = "<td colspan=\"2\" >";
	private static $td_open_span_3 = "<td colspan=\"3\" >";
	private static $tr_close = "</tr>";
	private static $td_open = "<td>";
	private static $td_close = "</td>";

	// print general item params $menu array, key, value(item name) or
	// price(for priceing), and if end equals true print blank row

	public static

	function echo_general_items($array, $start, $stop, $color)
		{
		$tr_open = "<tr class=\"{$color}\" >";
		$index_1 = $start;
		$index_2 = $start + 1;
		$keys = array_keys($array);
		for ($start; $start < $stop; $start++)
			{
			$item = $array[$keys[$index_1]];
			$price = $array[$keys[$index_2]];
			if ($item != "" && $price != "")
				{
				echo $tr_open . self::$td_open . $item . self::$td_close . self::$td_open . "$" . $price . self::$td_close . self::$tr_close;
				}

			$index_1+= 2;
			$index_2+= 2;
			}
		}

	// print descriptive item params $array from array hash, $start and $stop index,
	// if end equals true print blank row, and $arrayDescript for special cases
	// like having 2 prices.

	public static

	function echo_descript_items($array, $start, $stop, $color, $arrayDescript = null)
		{
		$tr_open = "<tr class=\"{$color}\" >";
		$index_1 = $start;
		$index_2 = $start + 1;
		$index_3 = $start + 2;
		$index_4 = $start + 3;
		$keys = array_keys($array);
		if ($arrayDescript != 'salads')
			{
			for ($start; $start < $stop; $start++)
				{
				$item = $array[$keys[$index_1]];
				$price = $array[$keys[$index_2]];
				$descript = $array[$keys[$index_3]];
				if ($item != "" && $price != "")
					{
					echo $tr_open . self::$td_open . $item . self::$td_close . self::$td_open . "$" . $price . self::$td_close . self::$tr_close;
					if ($descript != "")
						{
						echo self::$descript_tr_open . self::$td_open_span_2 . $descript . self::$td_close . self::$tr_close;
						}
					}

				$index_1+= 3;
				$index_2+= 3;
				$index_3+= 3;
				}
			}
		  else
			{
			for ($start; $start < $stop; $start++)
				{
				$item = $array[$keys[$index_1]];
				$price_1 = $array[$keys[$index_2]];
				$price_2 = $array[$keys[$index_3]];
				$descript = $array[$keys[$index_4]];
				if (($item != "") && ($price_1 != "" || $price_2 != ""))
					{
					echo $tr_open . self::$td_open . $item . self::$td_close . self::$td_open . "SM $" . $price_1 . self::$td_close . self::$td_open . "LG $" . $price_2 . self::$td_close . self::$tr_close;
					if ($descript != "")
						{
						echo self::$descript_tr_open . self::$td_open_span_3 . $descript . self::$td_close . self::$tr_close;
						}
					}

				$index_1+= 4;
				$index_2+= 4;
				$index_3+= 4;
				$index_4+= 4;
				}
			}
		}

	// Distinct function for displaying sides

	public static

	function echo_side_items($array, $color)
		{
		$tr_open = "<tr class=\"{$color}\" >";
		$values = array_values($array);
		echo $tr_open . self::$td_open_span_3 . $values[0] . self::$td_close . self::$td_open . '$' . $values[1] . self::$td_close . self::$tr_close;
		$array_length = count($values);
		$sides = [];
		$prices = [];
		$index = 2;
		$count = 0;
		for ($i = 0; $i < $array_length; $i++)
			{
			if (isset($values[$index + 1]))
				{
				$item = $values[$index];
				$price = $values[$index + 1];
				if ($item != "" && $price != "" && isset($item) && isset($price))
					{
					$sides[$count] = $item;
					$prices[$count] = $price;
					$count++;
					}

				$index+= 2;
				}
			}

		$array_length = count($sides);
		for ($i = 0; $i < $array_length; $i++)
			{
			if (isset($prices[$i]) || isset($sides[$i]))
				{
				echo $tr_open . self::$td_open . $sides[$i] . self::$td_close . self::$td_open . '$' . $prices[$i] . self::$td_close . self::$td_open . $sides[$i + 1] . self::$td_close . self::$td_open . '$' . $prices[$i + 1] . self::$td_close . self::$tr_close;
				$i++;
				}
			}
		}
	}

?>
