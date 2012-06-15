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
 * Title
 *
 * Handles the return and modification of a string to use for the title tag.
 */
class Title
{

	/**
	 * Append
	 *
	 * Append a string to the end of the title.
	 *
	 * @author	Thomas Edwards <thomas@phpgenie.co.uk>
	 * @param	string	$string		The string to append
	 * @param	string	$separator	The separator string
	 * @return	void
	 */
	public static function append($string, $separator = ': ')
	{
		$title = \Config::get('bromine.title');
		$title = $title.$separator.$string;
		\Config::set('bromine.title', $title);
	}

	/**
	 * Get
	 *
	 * Returns the title as a string.
	 *
	 * @author	Thomas Edwards <thomas@phpgenie.co.uk>
	 * @return	string
	 */
	public static function get()
	{
		return \Config::get('bromine.title');
	}

}
