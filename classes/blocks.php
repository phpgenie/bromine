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
 * Blocks
 *
 * Return, modify and save blocks – bits of pages that can be edited by users.
 * It might be part of the footer or a message on the contact page.
 * Blocks are written in Markdown and rendered and cached on request.
 */
class Blocks
{

	/**
	 * Get
	 *
	 * Returns a block as a string.
	 *
	 * @author	Thomas Edwards <thomas@phpgenie.co.uk>
	 * @param	string	$uri	The block’s URI
	 * @return	string
	 */
	public static function get()
	{
		// Find the block
		//$block = object

		try
		{
			return \Cache::get('bromine.block.'.$block->id);
		}
		catch (\CacheNotFoundException $e)
		{
			$html = Markdown::parse($block->markdown);
			\Cache::set('bromine.block.'.$block->id, $html);
			return $html;
		}
	}

}
