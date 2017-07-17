<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 09:20
 */

use app\helpers\FormConfigurationHelper;

class FormConfigurationHelperTest extends \PHPUnit_Framework_TestCase
{

    private $data;

    private $testObj;

    /**
     * prepare test
     */
    public function setUp()
    {

        # variable that holds the data fixture
        $this->data = array (
            array(
                'name' => 'vacancy_type',
                'label' =>'Vacancy Type',
                'tooltip'=>'vacancy_type tooltip',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'vacancyTypeOptionsList'

            ),

            array(
                'name' => 'hiring_manager',
                'label' =>'Hiring Manager',
                'tooltip'=>'Hiring Manage tooltip',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'hiringManagerOptionsList'
            ),
            array(
                'name' => 'test_12',
                'label' =>'test',
                'tooltip'=>'test',
                'tooltip_active'=>0,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'text',
                'data_method' => ''
            )
        );

        $dependency = new \test\app\helpers\FormConfigurationHelperDependency();
        $request = new \app\utilities\GlobalArrays();
        $this->testObj = new FormConfigurationHelper($dependency, $request);
  }


    /**
     * Indexed array will be converted to associative if in source exists key 'name'
     * Key 'name' replace index or original array with its value
     */
    public function test_ConfigureConfig()
    {
       $config = $this->testObj->setupFields($this->data);

        $expected = array(
            'name' => 'vacancy_type',
            'label' =>'Vacancy Type',
            'tooltip'=>'vacancy_type tooltip',
            'tooltip_active'=>1,
            'placeholder'=>'',
            'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
            'input_type' => 'select',
            'data_method' => 'vacancyTypeOptionsList',
            'value' => null
        );


      $this->assertEquals($expected, $config['field']['vacancy_type']);


    }

    /**
     * if input type is 'select' then key 'options' will be added to array, else key 'options' should not exists
     */
    public function test_PopulateSelectFields() {
        $config = $this->testObj->setupFields($this->data);

        $config = $this->testObj->populateSelectLists($config['field']);

        // select file config array should have 'options' key
        $this->assertArrayHasKey( 'options', $config['vacancy_type']);

        // select file config array should NOT have 'options' key
        $this->assertArrayNotHasKey( 'options', $config['test_12']);


    }


    /**
     * if $_POST value of same key as form field exists, it will be populated with value
     */
    public function test_KeepValueOfPostedForm() {

        $dependency = new \test\app\helpers\FormConfigurationHelperDependency();

        // test helper returns value 'testValue' on checking if $_POST exists
        $request = new \test\app\helpers\RequestDependency();
        $this->testObj = new FormConfigurationHelper($dependency, $request);


        $config = $this->testObj->setupFields($this->data);

        $config = $this->testObj->populateSelectLists($config['field']);

        $expected = array(
            'name' => 'vacancy_type',
            'label' =>'Vacancy Type',
            'tooltip'=>'vacancy_type tooltip',
            'tooltip_active'=>1,
            'placeholder'=>'',
            'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
            'input_type' => 'select',
            'data_method' => 'vacancyTypeOptionsList',
            'value' => 'testValue',
            'options' => array()

        );

        $this->assertEquals($expected, $config['vacancy_type']);

    }


    /***
     * Incorrect format of array passed to FormConfigurationHelper should return array with only one key 'csr_token'
     */
    public function test_RandomArrayPassed() {
        $dependency = new \test\app\helpers\FormConfigurationHelperDependency();
        $request = new \app\utilities\GlobalArrays();
        $this->testObj = new FormConfigurationHelper($dependency, $request);

        $config = $this->testObj->setupFields(array());

        $this->assertArrayNotHasKey('name', $config);
        $this->assertArrayHasKey('csr_token', $config);
    }






}
