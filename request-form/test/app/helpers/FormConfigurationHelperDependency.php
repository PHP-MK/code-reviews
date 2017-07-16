<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 13:59
 */

namespace test\app\helpers;


use app\helpers\interfaces\FormConfigurationSelectListsInterface;

class FormConfigurationHelperDependency implements FormConfigurationSelectListsInterface
{
    public function hiringManagerOptionsList($status) { return array(); }

   
    public function vacancyTypeOptionsList($status) { return array(); }


    public function hiringTypeOptionsList($status) { return array(); }


    public function upnOptionsList($status) { return array(); }


    public function jobTitleOptionsList($status) { return array(); }


    public function companyFunctionOptionsList($status) { return array(); }


    public function workStatusOptionsList($status) { return array(); }


    public function operatingExpenseOptionsList($status) { return array(); }


    public function statutoryOptionsList($status) { return array(); }


    public function headcountImpactOptionsList($status) { return array(); }


    public function safetyCriticalOptionsList($status) { return array(); }


    public function jobBandOptionList($status) { return array(); }


    public function requirementReasonOptionList($status) { return array(); }



    public function currentEmployeeOptionList($status) { return array(); }
}