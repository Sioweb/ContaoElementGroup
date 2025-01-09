<?php

/*
 * This file is part of Sioweb Group Element.
 *
 * (c) Sascha Weidner
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['swGroupStart']	= '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID,swInnerClass;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['swGroupStop']		= '{type_legend},type;';

$GLOBALS['TL_DCA']['tl_content']['fields']['swInnerClass'] = [
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['swInnerClassCheckbox'] = [
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "TEXT NULL"
];
