<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 13/07/2017
 * Time: 15:33
 */

namespace app\helpers\interfaces;


interface FormValidationHelperInterface
{

    public function validateFormFields(array $formConfig);
}