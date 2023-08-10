<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();
use Joomla\CMS\Factory;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$template = HelixUltimate\Framework\Platform\Helper::loadTemplateData();
$this->params = $template->params;

if (!$this->params->get('comingsoon'))
{
  header("Location: " . Uri::root());
}

echo LayoutHelper::render('comingsoon', array('language' => $this->language, 'direction' => $this->direction, 'params' => $this->params));