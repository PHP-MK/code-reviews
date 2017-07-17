<?php

/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 04/07/2017
 * Time: 09:18
 */

namespace app\helpers;


use app\helpers\interfaces\FormConfigurationSelectListsInterface;
use app\helpers\interfaces\FormConfiguratorInterface;
use app\utilities\interfaces\GlobalArraysInterface;
use app\models\FormConfiguration;

class FormConfigurationHelper implements FormConfiguratorInterface
{

    /**
     * @var array
     */
    public $config;

    /**
     * @var FormConfigurationSelectListsInterface
     */
    public $selectLists;

    public $request;


    /**
     * FormConfigurationHelper constructor.
     * @param FormConfigurationSelectListsInterface $selectLists
     * @param GlobalArraysInterface $request
     */
    public function __construct(FormConfigurationSelectListsInterface $selectLists, GlobalArraysInterface $request)
    {
        $this->selectLists = $selectLists;
        $this->request = $request;
    }

    /**
     * Returns complete form fields configuration package
     * @return array
     */
    public function getFormConfiguration()
    {
       $fields =  $this->setupFields(FormConfiguration::all()->toArray());
       $fields['field'] = $this->populateSelectLists($fields['field']);

       return $fields;
    }


    /**
     * @param array $config
     * @return array
     */
    public function setupFields(array $config)
    {
        $setup = array();

        foreach($config as $field) {

            $field['value'] = $this->request->getPost($field['name'], $field['input_filter']);

            if(!empty($field['name'])) {
                $setup['field'][$field['name']] = $field;
            }
        }

        $setup['csr_token']['value']=$this->generateFormToken();

        return $setup;
    }

    /**
     * If field type is select then pass data_method to getOptions function, expecting to get back array with
     *  options list
     * @param array $config
     * @return array
     */
    public function populateSelectLists(array $config)
    {
        foreach($config as &$value) {

            if(isset($value['input_type']) && $value['input_type'] === 'select') {
                  $value['options'] = $this->getOptions($value['data_method']);
            }
        }

        return $config;
    }


    /**
     * Check if $method exists in FormConfigurationSelectLists object and get options
     * @param $method string
     * @return array
     */
    private function getOptions($method)
    {
        $result = array();

        if(method_exists($this->selectLists, $method)) {
            $result = $this->selectLists->$method(1);
        }

        return $result;
    }


    /**
     * @return mixed
     */
    private function generateFormToken() {

        $_SESSION['rocap']['csr_token'] = str_random(128);

        return $_SESSION['rocap']['csr_token'];

    }


}