<?php

use Phinx\Seed\AbstractSeed;

class FormConfiguratorSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *'placeholder'=>'', 'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS', input_filter = 'FILTER_SANITIZE_SPECIAL_CHARS'
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = array (
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
                'name' => 'hiring_type',
                'label' =>'Hiring Type',
                'tooltip'=>'hiring_type tooltip',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'hiringTypeOptionsList'
            ),

            array(
                'name' => 'upn',
                'label' =>'UPN',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'upnOptionsList'
            ),

            array(
                'name' => 'job_title',
                'label' =>'Job Title',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'jobTitleOptionsList'
            ),

            array(
                'name' => 'company_function',
                'label' =>'Function',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'companyFunctionOptionsList'
            ),
            array(
                'name' => 'work_status',
                'label' =>'Work Status',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'workStatusOptionsList'
            ),
            array(
                'name' => 'job_band',
                'label' =>'Job Band',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'jobBandOptionList'
            ),
            array(
                'name' => 'job_location',
                'label' =>'Job Location',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'search',
                'data_method' => ''
            ),
            array(
                'name' => 'safety_critical',
                'label' =>'Safety Critical',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'safetyCriticalOptionsList'
            ),
            array(
                'name' => 'statutory',
                'label' =>'Statutory',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'statutoryOptionsList'
            ),

            array(
                'name' => 'headcount_impact',
                'label' =>'Headcount Impact',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'headcountImpactOptionsList'
            ),

            array(
                'name' => 'headcount_impact_explanation',
                'label' =>'Headcount Impact (brief further explanation)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'cost_centre',
                'label' =>'Cost Centre',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'search',
                'data_method' => ''
            ),


            array(
                'name' => 'operating_expense',
                'label' =>'CAPEX/OPEX/Both',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'operatingExpenseOptionsList'
            ),

            array(
                'name' => 'founding_explain',
                'label' =>'Explain',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'reason_for_requirement',
                'label' =>'Reason for requirement',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'select',
                'data_method' => 'requirementReasonOptionList'
            ),

            array(
                'name' => 'person_replacing',
                'label' =>'If replacement, select name of the person replacing',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'reason_for_requirement_explain',
                'label' =>'Reason for requirement(relevant background information)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),


            array(
                'name' => 'start_date',
                'label' =>'Proposed start date',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'select date',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'calendar',
                'data_method' => ''
            ),


            array(
                'name' => 'contract_duration',
                'label' =>'Proposed duration of contract (months)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'number of months',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_INT',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'minimal_pay_rate',
                'label' =>'Minimal day rate (£)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'day rate',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_DOUBLE',
                'input_type' => 'text',
                'data_method' => ''
            ),


            array(
                'name' => 'median_pay_rate',
                'label' =>'Median day rate (£)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'day rate',
                'input_filter' => 'FILTER_SANITIZE_NUMBER_DOUBLE',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'contractor_name',
                'label' =>'Name of contractor',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'contractor_experience_explain',
                'label' =>'Has the contractor worked in the same or similar role previously?',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'relocating_work',
                'label' =>'Relocating work in the same team',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'review_workload',
                'label' =>'Review workload priorities',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'secondment_placement',
                'label' =>'Secondment or graduate placement',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'redeployment',
                'label' =>'Redeployment',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'text',
                'data_method' => ''
            ),

            array(
                'name' => 'role_explain',
                'label' =>'Summarize what this role is accountable for',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),


            array(
                'name' => 'safety_impact',
                'label' =>'Safety impact if not recruited',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'performance',
                'label' =>'Efficiency & performance',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'team_impact',
                'label' =>'Team impact',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'reputation_impact',
                'label' =>'Reputation impact',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            ),

            array(
                'name' => 'advertise_externally',
                'label' =>'Justification to advertise externally (if required)',
                'tooltip'=>'example tooltip message',
                'tooltip_active'=>1,
                'placeholder'=>'',
                'input_filter' => 'FILTER_SANITIZE_SPECIAL_CHARS',
                'input_type' => 'textarea',
                'data_method' => ''
            )


        );

        $posts = $this->table('form_configurations');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
