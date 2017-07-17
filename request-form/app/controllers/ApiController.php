<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 30/06/2017
 * Time: 10:06
 */

namespace app\controllers;

use app\db_views\CostCentre;
use app\db_views\Location;
use app\utilities\View;

class ApiController
{

    private $view;

    /**
     * ApiController constructor.
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @param string $search
     */
    public function searchCostCentre($search)
    {

        $result['items'] = array();

        if(!empty($search)) {
            $result['items'] = CostCentre::where('costcentre', 'like', $search . '%')
                ->select('costcentre', 'description', 'function')
                ->get()
                ->toArray();
        }

        $this->view->displayJSON($result);
    }

    public function searchF1Approval($search)
    {
        $result['items'] = array();

        if(!empty($search)) {
            $result['items'] = CostCentre::where('f1_approver', 'like', '%'.$search . '%')
                ->distinct('f1_approver')
                ->select('f1_approver', 'function')
                ->get()
                ->toArray();
        }

        $this->view->displayJSON($result);
    }
    
    public function searchLocation($search)
    {
        $result['items'] = array();

        if(!empty($search)) {
            $result['items'] = Location::where('location', 'like', '%'.$search . '%')
                ->orWhere('address', 'like', '%'.$search . '%')
                ->distinct('location')
                ->select('address', 'location', 'postalcode')
                ->get()
                ->toArray();
        }

        $this->view->displayJSON($result);
    }






}