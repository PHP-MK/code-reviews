<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 09:14
 */

namespace app\helpers\interfaces;


interface FormConfiguratorInterface
{

    /**
     * @return array
     */
    public function getFormConfiguration();

    /**
     * @return array
     */
    public function setupFields(array $config);

    /**
     * @param array $config
     * @return mixed
     */
    public function populateSelectLists(array $config);
}