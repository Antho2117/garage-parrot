<?php

namespace App\Core;

class Form
{
    /**
     * @param array $form
     * @param array $fields
     * @return bool|void
     */
    public static function validateForm(array $form, array $fields)
    {
        foreach($fields as $field)
        {
            if(!isset($form[$field])){
                return false;
            }
            return true;
        }
    }
}