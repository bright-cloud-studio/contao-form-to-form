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

 
namespace Bcs\Backend;

use Contao\DataContainer;

class ContaoFormToFormBackend extends \Backend
{
    // Grab our Contact Lists from Constant Contact and display them as a select
    public function getFormsAsSelectOptions() {
      return array(
            '' => '',
            '1' => 'form_one',
            '2' => 'form_two',
            '3' => 'form_three'
        );
	}
    
}
