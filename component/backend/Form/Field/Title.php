<?php
/**
 * @package    FOFContent
 * @copyright  Copyright (c) 2015 Frédéric Vandebeuque / Newebtime.com
 * @license    GNU General Public License version 2
 */

namespace Fofcontent\Admin\Form\Field;

use FOF30\Form\Field\Title as BaseField;

defined('_JEXEC') or die;

class Title extends BaseField
{
	/**
	 * Get the rendering of this field type for a repeatable (grid) display,
	 * e.g. in a view listing many item (typically a "browse" task)
	 *
	 * @since 2.0
	 *
	 * @return  string  The field HTML
	 */
	public function getRepeatable()
	{
		$html = parent::getRepeatable();

		$category = \JCategories::getInstance('fofcontent')
			->get($this->item->catid)->title;

		$html .= '<br /><span class="small">' . \JText::_('JCATEGORY') . ': ' . $category . '</span>';

		return $html;
	}
}
