<?php

// This class is used with static functions to help with any database updates or selects

class gk_db_util

	{

	// Update the headers of the menu

	public static

	function update_headers($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_headers SET " . "header_1 = '{$menu['headers']['header_1']}', " . "header_2 = '{$menu['headers']['header_2']}', " . "header_3 = '{$menu['headers']['header_3']}', " . "header_4 = '{$menu['headers']['header_4']}', " . "header_5 = '{$menu['headers']['header_5']}', " . "header_6 = '{$menu['headers']['header_6']}', " . "header_7 = '{$menu['headers']['header_7']}', " . "header_8 = '{$menu['headers']['header_8']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the breakfast section of the menu

	public static

	function update_breakfast($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_breakfast SET " . "main_descript = '{$menu['breakfast']['main_descript']}', " . "item_1 = '{$menu['breakfast']['item_1']}', " . "price_1 = '{$menu['breakfast']['price_1']}', " . "item_3 = '{$menu['breakfast']['item_2']}', " . "price_2 = '{$menu['breakfast']['price_2']}', " . "item_3 = '{$menu['breakfast']['item_3']}', " . "price_3 = '{$menu['breakfast']['price_3']}', " . "special_item_1 = '{$menu['breakfast']['special_item_1']}', " . "special_price_1 = '{$menu['breakfast']['special_price_1']}', " . "special_item_1_descript = '{$menu['breakfast']['special_item_1_descript']}', " . "special_item_2 = '{$menu['breakfast']['special_item_2']}', " . "special_price_2 = '{$menu['breakfast']['special_price_2']}', " . "special_item_2_descript = '{$menu['breakfast']['special_item_2_descript']}', " . "special_item_3 = '{$menu['breakfast']['special_item_3']}', " . "special_price_3 = '{$menu['breakfast']['special_price_3']}', " . "special_item_3_descript = '{$menu['breakfast']['special_item_3_descript']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the salad section of the menu

	public static

	function update_salads($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_salads SET " . "meat_1 = '{$menu['salads']['meat_1']}', " . "meat_price_1 = '{$menu['salads']['meat_price_1']}', " . "meat_2 = '{$menu['salads']['meat_2']}', " . "meat_price_2 = '{$menu['salads']['meat_price_2']}', " . "salad_item_1 = '{$menu['salads']['salad_item_1']}', " . "price_1_small = '{$menu['salads']['price_1_small']}', " . "price_1_large = '{$menu['salads']['price_1_large']}', " . "salad_1_descript = '{$menu['salads']['salad_1_descript']}', " . "salad_item_2 = '{$menu['salads']['salad_item_2']}', " . "price_2_small = '{$menu['salads']['price_2_small']}', " . "price_2_large = '{$menu['salads']['price_2_large']}', " . "salad_2_descript = '{$menu['salads']['salad_2_descript']}', " . "salad_item_3 = '{$menu['salads']['salad_item_3']}', " . "price_3_small = '{$menu['salads']['price_3_small']}', " . "price_3_large = '{$menu['salads']['price_3_large']}', " . "salad_3_descript = '{$menu['salads']['salad_3_descript']}', " . "salad_item_4 = '{$menu['salads']['salad_item_4']}', " . "price_4_small = '{$menu['salads']['price_4_small']}', " . "price_4_large = '{$menu['salads']['price_4_large']}', " . "salad_4_descript = '{$menu['salads']['salad_4_descript']}', " . "salad_dressing = '{$menu['salads']['salad_dressing']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the cold sandwich section of the menu

	public static

	function update_cold_sands($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_cold_sandwiches SET " . "main_descript = '{$menu['cold_sands']['main_descript']}', " . "item_1 = '{$menu['cold_sands']['item_1']}', " . "price_1 = '{$menu['cold_sands']['price_1']}', " . "item_2 = '{$menu['cold_sands']['item_2']}', " . "price_2 = '{$menu['cold_sands']['price_2']}', " . "item_3 = '{$menu['cold_sands']['item_3']}', " . "price_3 = '{$menu['cold_sands']['price_3']}', " . "special_item = '{$menu['cold_sands']['special_item']}', " . "special_price = '{$menu['cold_sands']['special_price']}', " . "special_descript = '{$menu['cold_sands']['special_descript']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the wraps section of the menu

	public static

	function update_wraps($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_wraps SET " . "main_descript = '{$menu['wraps']['main_descript']}', " . "item_1 = '{$menu['wraps']['item_1']}', " . "price_1 = '{$menu['wraps']['price_1']}', " . "item_3 = '{$menu['wraps']['item_2']}', " . "price_2 = '{$menu['wraps']['price_2']}', " . "item_3 = '{$menu['wraps']['item_3']}', " . "price_3 = '{$menu['wraps']['price_3']}', " . "special_item_1 = '{$menu['wraps']['special_item_1']}', " . "special_price_1 = '{$menu['wraps']['special_price_1']}', " . "special_descript_1 = '{$menu['wraps']['special_descript_1']}', " . "special_item_2 = '{$menu['wraps']['special_item_2']}', " . "special_price_2 = '{$menu['wraps']['special_price_2']}', " . "special_descript_2 = '{$menu['wraps']['special_descript_2']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the side items section of the menu

	public static

	function update_sides($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_sides SET " . "side_1 = '{$menu['sides']['side_1']}', " . "price_1 = '{$menu['sides']['price_1']}', " . "side_2 = '{$menu['sides']['side_2']}', " . "price_2 = '{$menu['sides']['price_2']}', " . "side_3 = '{$menu['sides']['side_3']}', " . "price_3 = '{$menu['sides']['price_3']}', " . "side_4 = '{$menu['sides']['side_4']}', " . "price_4 = '{$menu['sides']['price_4']}', " . "side_5 = '{$menu['sides']['side_5']}', " . "price_5 = '{$menu['sides']['price_5']}', " . "side_6 = '{$menu['sides']['side_6']}', " . "price_6 = '{$menu['sides']['price_6']}', " . "side_7 = '{$menu['sides']['side_7']}', " . "price_7 = '{$menu['sides']['price_7']}', " . "side_8 = '{$menu['sides']['side_8']}', " . "price_8 = '{$menu['sides']['price_8']}', " . "side_9 = '{$menu['sides']['side_9']}', " . "price_9 = '{$menu['sides']['price_9']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the hot sandwich section of the menu

	public static

	function update_hot_sands($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_hot_sandwiches SET " . "main_descript = '{$menu['hot_sands']['main_descript']}', " . "item_1 = '{$menu['hot_sands']['item_1']}', " . "price_1 = '{$menu['hot_sands']['price_1']}', " . "item_2 = '{$menu['hot_sands']['item_2']}', " . "price_2 = '{$menu['hot_sands']['price_2']}', " . "item_3 = '{$menu['hot_sands']['item_3']}', " . "price_3 = '{$menu['hot_sands']['price_3']}', " . "item_4 = '{$menu['hot_sands']['item_4']}', " . "price_4 = '{$menu['hot_sands']['price_4']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the vegeitarian section of the menu

	public static

	function update_veggies($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_vegetarian SET " . "item_1 = '{$menu['veggies']['item_1']}', " . "price_1 = '{$menu['veggies']['price_1']}', " . "item_descript_1 ='{$menu['veggies']['item_descript_1']}', " . "item_2 = '{$menu['veggies']['item_2']}', " . "price_2 = '{$menu['veggies']['price_2']}', " . "item_descript_2 ='{$menu['veggies']['item_descript_2']}', " . "item_3 = '{$menu['veggies']['item_3']}', " . "price_3 = '{$menu['veggies']['price_3']}', " . "item_descript_3 ='{$menu['veggies']['item_descript_3']}', " . "item_4 = '{$menu['veggies']['item_4']}', " . "price_4 = '{$menu['veggies']['price_4']}', " . "item_descript_4 ='{$menu['veggies']['item_descript_4']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Update the salad section of the menu

	public static

	function update_specials($menu, $mysqli)
		{
		try
			{
			$update_sql = "UPDATE gk_house_specials SET " . "main_descript = '{$menu['specials']['main_descript']}', " . "item_1 = '{$menu['specials']['item_1']}', " . "price_1 = '{$menu['specials']['price_1']}', " . "item_descript_1 ='{$menu['specials']['item_descript_1']}', " . "item_2 = '{$menu['specials']['item_2']}', " . "price_2 = '{$menu['specials']['price_2']}', " . "item_descript_2 ='{$menu['specials']['item_descript_2']}', " . "item_3 = '{$menu['specials']['item_3']}', " . "price_3 = '{$menu['specials']['price_3']}', " . "item_descript_3 ='{$menu['specials']['item_descript_3']}', " . "item_4 = '{$menu['specials']['item_4']}', " . "price_4 = '{$menu['specials']['price_4']}', " . "item_descript_4 ='{$menu['specials']['item_descript_4']}', " . "item_5 = '{$menu['specials']['item_5']}', " . "price_5 = '{$menu['specials']['price_5']}', " . "item_descript_5 ='{$menu['specials']['item_descript_5']}', " . "item_6 = '{$menu['specials']['item_6']}', " . "price_6 = '{$menu['specials']['price_6']}', " . "item_descript_6 ='{$menu['specials']['item_descript_6']}', " . "item_7 = '{$menu['specials']['item_7']}', " . "price_7 = '{$menu['specials']['price_7']}', " . "item_descript_7 ='{$menu['specials']['item_descript_7']}', " . "item_8 = '{$menu['specials']['item_8']}', " . "price_8 = '{$menu['specials']['price_8']}', " . "item_descript_8 ='{$menu['specials']['item_descript_8']}', " . "item_9 = '{$menu['specials']['item_9']}', " . "price_9 = '{$menu['specials']['price_9']}', " . "item_descript_9 ='{$menu['specials']['item_descript_9']}', " . "item_10 = '{$menu['specials']['item_10']}', " . "price_10 = '{$menu['specials']['price_10']}', " . "item_descript_10 ='{$menu['specials']['item_descript_10']}', " . "item_11 = '{$menu['specials']['item_11']}', " . "price_11 = '{$menu['specials']['price_11']}', " . "item_descript_11 ='{$menu['specials']['item_descript_11']}', " . "extra_items = '{$menu['specials']['extra_items']}' " . "WHERE id = 1;";
			$mysqli->query($update_sql);
			}

		catch(Exception $e)
			{
			handle_error("Sorry... your data didn't make it to its destination", $e->getMessage());
			}
		}

	// Get the header values for the form

	public static

	function get_headers($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_headers;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the breakfast values for the form

	public static

	function get_breakfast($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_breakfast;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the salad values for the form

	public static

	function get_salads($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_salads;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the cold sandwich values for the form

	public static

	function get_cold_sands($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_cold_sandwiches;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the wrap values for the form

	public static

	function get_wraps($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_wraps;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the side values for the form

	public static

	function get_sides($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_sides;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the hot sandwich values for the form

	public static

	function get_hot_sands($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_hot_sandwiches;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the vegitarian values for the form

	public static

	function get_veggies($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_vegetarian;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}

	// Get the special values for the form

	public static

	function get_specials($mysqli)
		{
		try
			{
			$select_query = "SELECT * FROM gk_house_specials;";
			$result = $mysqli->query($select_query);
			$row = $result->fetch_assoc();
			return $row;
			}

		catch(Exception $e)
			{
			handle_error("Sorry... the request was not successful.", $e->getMessage());
			}
		}
	}

?>