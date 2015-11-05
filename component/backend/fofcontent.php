<?php
/**
 * @package    FOFContent
 * @copyright  Copyright (c) 2015 Frédéric Vandebeuque / Newebtime.com
 * @license    GNU General Public License version 2
 */
defined('_JEXEC') or die();

// Load FOF
include_once JPATH_LIBRARIES . '/fof30/include.php';

// Dispatch
\FOF30\Container\Container::getInstance('com_fofcontent')->dispatcher->dispatch();
