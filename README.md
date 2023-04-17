# Bright Cloud Studio's Form-to-Form
Allows one form's fields to be pre-filled with values submitted from another.

## Uses:
This package was designed for a client who wanted one small form on their homepage to act as a lead-in to a much larger form. When a user enters values into the small form they would be sent to the larger form where those submitted values would then be pre-filled in to the matching form fields. Fields "link" by having the same "Field name".

## Directions:
For these directions assume we have two forms. Form A is our main form and Form B is our smaller lead-in form.

1. On our lead-in form, add a "Hidden field" with the "Field name" set to "form_to_form_target" where the "Default value" is the ID of the form we want to send our values to.

![Step One](https://raw.githubusercontent.com/bright-cloud-studio/contao-form-to-form/main/images/step_1.jpg)


