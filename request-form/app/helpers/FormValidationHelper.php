<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 13/07/2017
 * Time: 15:33
 */

namespace app\helpers;

use app\helpers\interfaces\FormValidationHelperInterface;
use app\utilities\interfaces\GlobalArraysInterface;
use Valitron\Validator;

class FormValidationHelper implements FormValidationHelperInterface
{


    /**
     * @var GlobalArraysInterface
     */
    private $request;

    /**
     * FormValidationHelper constructor.
     * @param GlobalArraysInterface $request
     */
    public function __construct(GlobalArraysInterface $request)
    {
        $this->request = $request;
    }

    /**
     * @param array $formConfig
     */
    public function validateFormFields(array $formConfig)
    {

        foreach($formConfig as $value) {

            $this->field[$value['name']] = $this->request->getPost($value['name'], $value['input_filter']);
        }

        $this->validateRules($this->field);

        die;
    }


    private function validateRules(array $fields)
    {
        $validate = new Validator($fields);

//
//        $rules = array(
//            'required'  => array('vacancy_type', 'hiring_manager', 'hiring_type'),
////            'integer'   => array(),
//            'lengthMin' => array(
//                           array('vacancy_type', 1),
//                           array('hiring_manager', 2)
//                        )
//        );



        $validate->rule('required', array('vacancy_type', 'hiring_manager', 'hiring_type'));
//        $validate->rule($rules);


        if($validate->validate()) {
            echo 'OK';
            return true;
        }

        var_dump2($validate->errors());
    }

}