<?php

/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 18/05/2017
 * Time: 10:57
 */

namespace app\utilities\interfaces;


/**
 * Interface ViewInterface
 */
interface ViewInterface
{

    /**
     * Initiate Twig template engine
     * @param $template
     * @param array $arguments
     */
    public function setView($template, array $arguments);
    
    /**
     * Display template
     * @return void
     */
    public function display();

    /**
     * Return template as a string
     * @return mixed
     */
    public function save();

    /**
     * @param array $result
     * no return dies after displaying JSON object, additionally it will change header to application/json
     */
    public function displayJSON(array $result);
}