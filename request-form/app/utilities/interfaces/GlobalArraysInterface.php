<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 06/07/2017
 * Time: 12:02
 */

namespace app\utilities\interfaces;

/**
 * Interface GlobalArraysInterface
 * @package app\utilities\interfaces
 *
 *  * @property array $post
 *  * @property array $get
 *
 */
interface GlobalArraysInterface
{
    public function checkGlobalArray(array $postArgs, array $getArgs);

    public function getPost($key, $filter);

    public function getGet($key, $filter);

    public function getCookie($key, $filter);
}