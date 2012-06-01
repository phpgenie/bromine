<?php
/**
 * Bromine CMS for FuelPHP
 *
 * @package    Bromine
 * @version    1.0
 * @author     Thomas Edwards <thomas@phpgenie.co.uk>
 * @license    MIT License
 * @copyright  2012 PHP Genie
 * @link       http://bromine.phpgenie.co.uk
 */

namespace Bromine;

/**
 * Menu
 *
 * Handles the return and modification of the menu.
 */
class Menu
{

	/**
	 * View
	 *
	 * Return the menu as a View object.
	 *
	 * @author	Thomas Edwards <thomas@phpgenie.co.uk>
	 * @param	int		$parent	The ID of the parent item
	 * @param	int		$active	The ID of the item to give an active class
	 * @return	object
	 */
	public static function view($parent = 0, $active = 0)
	{
		try
		{
			return \Cache::get('bromine.menu');
		}
		catch (\CacheNotFoundException $e)
		{
			$menu = self::get($parent);
			$view = \View::forge('menu');
			\Cache::set('bromine.menu', $view);
			return $view;
		}
	}

	/**
	 * Raw
	 *
	 * Returns a multidimensional array of the menu.
	 *
	 * @author	Thomas Edwards <thomas@phpgenie.co.uk>
	 * @param	int		$parent	The ID of the parent item
	 * @return	array
	 */
	public static function get($parent = 0)
	{
		return array();
	}

}
