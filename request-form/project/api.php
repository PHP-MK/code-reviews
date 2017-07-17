<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 30/06/2017
 * Time: 10:18
 */

$view = new \app\utilities\View();
$api = new \app\controllers\ApiController($view);


/*** setup routing ***/
$global = new \app\utilities\GlobalArrays();
$form = new \app\routers\ApiRouting($global, $api);

$form->route();



