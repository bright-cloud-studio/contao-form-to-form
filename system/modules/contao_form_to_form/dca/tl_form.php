<?php

/**
 * Bright Cloud Studio's Contao Form-to-Form
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/contao-form-to-form
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

 /* Extend the tl_form palette */
$GLOBALS['TL_DCA']['tl_form']['palettes']['default'] = str_replace(';{expert_legend:hide}', ';{cftf_legend},cftf_target;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_form']['palettes']['default']);

/* Add fields to tl_user */
$GLOBALS['TL_DCA']['tl_form']['fields']['cftf_target'] = array
(
    'label'                     => &$GLOBALS['TL_LANG']['tl_form']['cftf_target'],
    'inputType'                 => 'select',
    'default'                   => '',
    'options_callback'          => array('Bcs\Backend\ContaoFormToFormBackend', 'getFormsAsSelectOptions'),
    'eval'                      => array('includeBlankOption'=>false, 'mandatory'=>false, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'                       => "varchar(255) NOT NULL default ''"
);
