<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 13:59
 */

namespace test\app\helpers;

use app\utilities\interfaces\GlobalArraysInterface;

class RequestDependency implements GlobalArraysInterface
{
    public $get;

    public $post;
    
    public function checkGlobalArray(array $postArgs, array $getArgs) {

    }

    public function getPost($key, $filter){
        return 'testValue';
    }

    public function getGet($key, $filter){
        return 'testValue';
    }

    public function getCookie($key, $filter){
        return 'testValue';
    }

}