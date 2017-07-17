<?php

/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 04/07/2017
 * Time: 09:18
 */

namespace app\helpers;
use app\helpers\interfaces\FormConfigurationSelectListsInterface;

use app\db_views\CompanyFunction;
use app\models\lists\HeadcountImpact;
use app\models\lists\HiringManager;
use app\models\lists\JobBand;
use app\models\lists\JobTitle;
use app\models\lists\OperatingExpense;
use app\models\lists\RequirementReason;
use app\models\lists\SafetyCritical;
use app\models\lists\Statutory;
use app\models\lists\Upn;
use app\models\lists\VacancyType;
use app\models\lists\HiringType;
use app\models\lists\WorkStatus;


class FormConfigurationSelectListsHelper implements FormConfigurationSelectListsInterface
{

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function hiringManagerOptionsList($status)
    {
        return  HiringManager::whereIn('active', explode(',', $status))->lists('manager', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function vacancyTypeOptionsList($status)
    {
           return  VacancyType::whereIn('active', explode(',', $status))->lists('vacancy_type', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function hiringTypeOptionsList($status)
    {
        return HiringType::whereIn('active', explode(',', $status))->lists('hiring_type', 'id');
    }


    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function upnOptionsList($status)
    {
        return Upn::whereIn('active', explode(',', $status))->lists('upn', 'id');
    }


    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function jobTitleOptionsList($status)
    {
        return JobTitle::whereIn('active', explode(',', $status))->lists('job_title', 'id');
    }



    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function companyFunctionOptionsList($status)
    {
        return CompanyFunction::whereIn('active', explode(',', $status))->lists('name', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function workStatusOptionsList($status)
    {
        return WorkStatus::whereIn('active', explode(',', $status))->lists('work_status', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function operatingExpenseOptionsList($status)
    {
        return OperatingExpense::whereIn('active', explode(',', $status))->lists('operating_expense', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function statutoryOptionsList($status)
    {
        return Statutory::whereIn('active', explode(',', $status))->lists('statutory', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function headcountImpactOptionsList($status)
    {
        return HeadcountImpact::whereIn('active', explode(',', $status))->lists('impact', 'id');
    }

    /**
     * @return array
     */
    public function safetyCriticalOptionsList($status)
    {
        return SafetyCritical::whereIn('active', explode(',', $status))->lists('safety_critical', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function jobBandOptionList($status)
    {
        return JobBand::whereIn('active', explode(',', $status))->lists('job_band', 'id');
    }

    /**
     * @param string $status comma separated list of statuses
     * @return array
     */
    public function requirementReasonOptionList($status)
    {
        return RequirementReason::whereIn('active', explode(',', $status))->lists('reason', 'id');
    }




}