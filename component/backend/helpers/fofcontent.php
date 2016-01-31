<?php
// No direct access to this file
defined('_JEXEC') or die;

class FofcontentHelper
{
	/**
	* Configure the Linkbar.
	*/
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(JText::_('COM_FOFCONTENT_TITLE_CONTENTS'),
			'index.php?option=com_fofcontent', false);
		JHtmlSidebar::addEntry(JText::_('COM_FOFCONTENT_TITLE_CATEGORIES'),
			'index.php?option=com_categories&view=categories&extension=com_fofcontent',
			$vName == 'categories');
	}
}
