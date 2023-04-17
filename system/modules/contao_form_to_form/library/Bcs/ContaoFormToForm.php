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
        // if $_POST contains our hidden target field
        if (\Input::post('form_to_form_target') != '') {
            // if the target ID matches this form's ID
            if (\Input::post('form_to_form_target') == $objForm->id) {
                // loop through all of the form fields
                foreach ($arrFields as $field)
                {
                    // if we have a value in post that matches this field's name
                    if (\Input::post($field->name) != '') 
                        $field->value = \Input::post($field->name);
                }	
            }
        }
        // return our modified form fields
        return $arrFields;
    }

}
