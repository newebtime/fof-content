<?php
/**
 * @package    FOFContent
 * @copyright  Copyright (c) 2015 Frédéric Vandebeuque / Newebtime.com
 * @license    GNU General Public License version 2
 */

namespace Fofcontent\Admin\Toolbar;

use FOF30\Toolbar\Toolbar as BaseToolbar;

defined('_JEXEC') or die;

class Toolbar extends BaseToolbar
{
	public function renderSubmenu()
	{
		parent::renderSubmenu();

		// Add "Categories"
		$link = new \JURI();
		$query = $link->getQuery(true);
		$query['option']	= 'com_categories';
		$query['extension']	= 'com_fofcontent';
		$link->setQuery($query);

		$this->appendLink(\JText::_('COM_FOFCONTENT_TITLE_CATEGORIES'), $link->toString(), false);
	}
}
