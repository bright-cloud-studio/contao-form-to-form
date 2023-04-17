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

/* Hooks */
$GLOBALS['TL_HOOKS']['compileFormFields'][]     = array('Bcs\ContaoFormToForm', 'prefillMatchingFields');
