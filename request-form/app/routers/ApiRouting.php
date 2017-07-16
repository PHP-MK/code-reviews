<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 15:41
 */

namespace app\routers;


use app\controllers\ApiController;
use app\utilities\interfaces\GlobalArraysInterface;


/**
 *
 *  header('Content-Type: application/json');
echo json_encode(array('items'=>array(
array('name' => 'test 1', 'title'=>'rwerwer'),
array('name' => 'test 11', 'title'=>'rwerwer'),
array('name' => 'test 122', 'title'=>'rwerwer'),
array('name' => 'test 133', 'title'=>'rwerwer'),
array('name' => 'test 144', 'title'=>'rwerwer'),
)));
 *
 *
 * Class ApiRouting
 * @package app\routers
 */
class ApiRouting
{
    /**
     * @var GlobalArraysInterface
     */
    public $request;

    /**
     * @var ApiController
     */
    public $controller;

    /**
     * copy of $_GET
     * @var array
     */
    private $getArgs = array(
        'search' => FILTER_SANITIZE_STRING,
        'query' => FILTER_SANITIZE_STRING
    );

    /**
     * copy of $_POST
     * @var array
     */
    private $postArgs = array(
        'csr_token' => FILTER_SANITIZE_SPECIAL_CHARS
    );


    /**
     * ApiRouting constructor.
     * @param GlobalArraysInterface $request
     * @param ApiController $api
     */
    public function __construct(GlobalArraysInterface $request, ApiController $api)
    {
        $this->request = $request;

        $this->controller = $api;

    }

    /**
     * request form routing
     */
    public function route()
    {
        $this->request->checkGlobalArray($this->postArgs, $this->getArgs);

        $this->searchActions($this->request->get['search']);

        die;
    }

    /**
     * @param $search
     * @return bool
     */
    private function searchActions($search)
    {
        if(empty($search)) {
            return false;
        }

        switch($search) {

            case 'cost_centre':
                $this->controller->searchCostCentre($this->request->get['query']);
                break;

            case 'job_location':
                $this->controller->searchLocation($this->request->get['query']);
                break;


            default:
        }

        return true;
    }


}