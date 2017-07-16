<?php

/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 11:58
 */
namespace app\routers;

use app\controllers\RequestFormController;
use app\utilities\interfaces\GlobalArraysInterface;

class RequestFormRouting
{

    /**
     * @var GlobalArraysInterface
     */
    public $request;

    /**
     * @var RequestFormController
     */
    public $controller;

    /**
     * copy of $_GET
     * @var array
     */
    private $getArgs = array(
        'new' => FILTER_SANITIZE_NUMBER_INT
    );

    /**
     * copy of $_POST
     * @var array
     */
    private $postArgs = array(
        'csr_token' => FILTER_SANITIZE_SPECIAL_CHARS
    );


    /**
     * RequestFormRouting constructor.
     * @param GlobalArraysInterface $request
     * @param RequestFormController $controller
     */
    public function __construct(GlobalArraysInterface $request, RequestFormController $controller)
    {
        $this->request = $request;
        $this->controller = $controller;
    }

    /**
     * request form routing
     */
    public function route()
    {
        $this->request->checkGlobalArray($this->postArgs, $this->getArgs);

        if(!empty($_SESSION['rocap']['csr_token']) && !empty($this->request->post['csr_token'])
            && $_SESSION['rocap']['csr_token'] === trim($this->request->post['csr_token'])) {

                //reset token to prevent double submission
                $_SESSION['rocap']['csr_token'] = '1000';

                //save form to be implemented

            $this->controller->save();

        } else {
            $this->controller->buildRequestForm();
        }
    }

}