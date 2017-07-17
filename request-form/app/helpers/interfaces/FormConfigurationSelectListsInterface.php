<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 11:15
 */

namespace app\helpers\interfaces;


interface FormConfigurationSelectListsInterface
{


    /**
     * @param string $status comma separated list of statuses
     * @return mixed
     */
    public function hiringManagerOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return mixed
     */
    public function vacancyTypeOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function hiringTypeOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function upnOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function jobTitleOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function companyFunctionOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function workStatusOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function operatingExpenseOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function statutoryOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function headcountImpactOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function safetyCriticalOptionsList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function jobBandOptionList($status);

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function requirementReasonOptionList($status);



}