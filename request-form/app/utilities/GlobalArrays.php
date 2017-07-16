<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 15/05/2017
 * Time: 15:55
 */

namespace app\utilities {

    use app\utilities\interfaces\GlobalArraysInterface;

    /**
     * Class GlobalArrays
     * @package app\helpers
     */
    class GlobalArrays implements GlobalArraysInterface
    {
        /**
         * @var array
         */
        public $get;

        /**
         * @var array
         */
        public $post;


        /**
         * Sanitise GET and POST arrays based on predefined FILTERS
         * @param $postArgs array
         * @param $getArgs array
         */
        public function checkGlobalArray(array $postArgs, array $getArgs)
        {
            if (count($getArgs) > 0) {
                $this->get = filter_input_array(INPUT_GET, $getArgs);
            }

            if (count($postArgs) > 0) {
                $this->post = filter_input_array(INPUT_POST, $postArgs);
            }
        }


        /**
         * @param string $key
         * @param mixed $filter
         * @return mixed
         */
        public function getPost($key, $filter = FILTER_SANITIZE_STRING){
            $result = filter_input_array(INPUT_POST, array($key => $filter));
            return $result[$key];
        }


        /**
         * @param string $key
         * @param mixed $filter
         * @return mixed
         */
        public function getGet($key, $filter = FILTER_SANITIZE_STRING){
            $result =  filter_input_array(INPUT_GET, array($key => $filter));
            return $result[$key];
        }

        /**
         * @param string $key
         * @param mixed $filter
         * @return mixed
         */
        public function getCookie($key, $filter = FILTER_SANITIZE_STRING){
            $result =  filter_input_array(INPUT_COOKIE, array($key => $filter));
            return $result[$key];
        }


    }
}