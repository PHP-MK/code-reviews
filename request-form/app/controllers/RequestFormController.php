<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 30/06/2017
 * Time: 10:06
 */

namespace app\controllers;

use app\helpers\interfaces\FormConfiguratorInterface;

use app\helpers\interfaces\FormValidationHelperInterface;
use app\utilities\View;

class RequestFormController extends ApplicationController
{

    private $view;

    private $formConfig;

    private $formValidation;


    /**
     * RequestFormController constructor.
     * @param View $view
     * @param FormConfiguratorInterface $formConfig
     */
    public function __construct(View $view, FormConfiguratorInterface $formConfig, FormValidationHelperInterface $validation)
    {
        parent::__construct();

        $this->view = $view;

        $this->formConfig = $formConfig;

        $this->formValidation = $validation;

    }

    /**
     * Build main request form
     * - load JS and CSS
     * - pass form configuration array to Twig template
     * - display view
     */
    public function buildRequestForm()
    {
        $this->loadAsset(array(
            'js/third_party/handlebars-v4.0.10.min.js',
            'js/request_form.min.js',
            'js/third_party/semantic-ui-calendar/calendar.min.js',
            'js/third_party/semantic-ui-calendar/calendar.min.css'));


        // setup view arguments
        $viewArguments = array(
            'config' => $this->formConfig->getFormConfiguration()
        );

        $this->view->setView('request_form.html', $viewArguments);

        $this->view->display();
    }


    public function save()
    {
        $formConfig = $this->formConfig->getFormConfiguration();

        $this->formValidation->validateFormFields($formConfig['field']);

        //TODO: validation
        //TODO: save to DB
    }




}