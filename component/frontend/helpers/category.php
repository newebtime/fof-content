<?php
/**
 * @package    FOFContent
 * @copyright  Copyright (c) 2015 Frédéric Vandebeuque / Newebtime.com
 * @license    GNU General Public License version 2
 */

defined('_JEXEC') or die;

class FofcontentCategories extends JCategories
{
	public function __construct($options = array())
	{
		$options['table'] = '#__fofcontents_contents';
		$options['extension'] = 'com_fofcontent';

		parent::__construct($options);
	}
}
