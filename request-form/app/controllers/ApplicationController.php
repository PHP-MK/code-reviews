<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 15/11/2016
 * Time: 13:48
 */

namespace app\controllers;


/**
 * Class application_controller
 * @package app\controllers
 */

Abstract class ApplicationController
{
    /**
     * @var \Singleton
     */
    protected $app;


    /**
     * application_controller constructor
     * load customised Bootstrap CSS
     * load application default CSS
     */
    public function __construct()
    {
        //load application default CSS
        $this->loadAsset(array('js/third_party/semantic-ui/dist/semantic.css',
            'js/third_party/semantic-ui/dist/semantic.min.js',
            'css/main.css',
        ));
    }

    /**
     * Load CSS an JS to the view
     * @param $file string|array
     */
    protected function loadAsset($file)
    {
        $assets = array($file);

        /** @noinspection PhpUndefinedClassInspection */
        $this->app = \application::getInstance();

        if (is_array($file)) {
            $assets = $file;
        }

        foreach ($assets as $asset) {
            $type = substr($asset, strrpos($asset, '.') + 1);
            switch ($type) {
                case 'css':
                    /** @noinspection PhpUndefinedMethodInspection */
                    $this->app->addCss($asset);
                    break;

                case 'js':
                    /** @noinspection PhpUndefinedMethodInspection */
                    $this->app->addJavascript($asset);
                    break;

                default:

            }
        }
    }


}