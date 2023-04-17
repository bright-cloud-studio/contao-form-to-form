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

namespace Bcs;

class ContaoFormToForm 
{

  public function prefillMatchingFields($arrFields, $formId, $objForm)
  {
    if (substr($formId, 0, 10) == "auto_form_" && \Input::post('preload_form') != '') {
      if ($objForm->id == \Input::post('preload_form')) {
        foreach ($arrFields AS $objField)
        {
          if (\Input::post($objField->name) != '') {
            $objField->value = \Input::post($objField->name);
          }
        }	
      }
    }
    return $arrFields;
  }

}
