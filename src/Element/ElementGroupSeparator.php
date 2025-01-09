<?php

/*
 * This file is part of Sioweb ElementGroup.
 *
 * (c) Sascha Weidner
 *
 * @license LGPL-3.0-or-later
 */

namespace Sioweb\ElementGroup\Element;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\StringUtil;
use Contao\System;

/**
 * Front end content element "element group" (wrapper separator';).
 */
class ElementGroupSeparator extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'sw_group_separator';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$request = System::getContainer()->get('request_stack')->getCurrentRequest();

		if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			$this->strTemplate = 'be_wildcard';

			$this->Template = new BackendTemplate($this->strTemplate);
			$this->Template->title = 'Spaltengruppe Separator';
		}

		$classes = StringUtil::deserialize($this->mooClasses, true) + array(null, null);
	}
}
