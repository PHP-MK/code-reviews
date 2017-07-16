<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 29/06/2017
 * Time: 12:51
 */


/** build controller ***/
$selectLists = new \app\helpers\FormConfigurationSelectListsHelper();

$request = new \app\utilities\GlobalArrays();

$formConfig = new \app\helpers\FormConfigurationHelper($selectLists, $request);

$formValidation = new \app\helpers\FormValidationHelper($request);

$view = new app\utilities\View();

$formController = new \app\controllers\RequestFormController($view, $formConfig, $formValidation);

/*** setup routing ***/
$global = new \app\utilities\GlobalArrays();

$form = new \app\routers\RequestFormRouting($global, $formController);

$form->route();








